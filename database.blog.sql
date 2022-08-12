DROP DATABASE IF EXISTS `blog`;
SET GLOBAL time_zone = 'America/Sao_Paulo';
CREATE DATABASE IF NOT EXISTS `blog` CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


USE `blog`;


-- DADOS DE USUÁRIO
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users`(
    `user_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `user_login` VARCHAR(60) NOT NULL COMMENT "Login", 
    `user_pass` VARCHAR(255) NOT NULL COMMENT "Senha",
    `user_email` VARCHAR(100) NOT NULL COMMENT "E-mail",
    `user_name` VARCHAR(50) COMMENT "Nome",
    `user_sirname` VARCHAR(100) COMMENT "Sobrenome",
    `user_cpf` VARCHAR(14) UNIQUE comment "CPF",
    `user_rg` VARCHAR(13) COMMENT "RG",
    `user_phone` VARCHAR(14) COMMENT "Número de Telefone",
    UNIQUE INDEX (`user_login`),
    UNIQUE INDEX (`user_email`)
)ENGINE=INNODB CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `usermeta`;
CREATE TABLE IF NOT EXISTS `usermeta`(
    `usermeta_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `user_id` BIGINT(20) UNSIGNED NOT NULL,
    `meta_key` VARCHAR(255) NOT NULL, 
    `meta_value` VARCHAR(255) NOT NULL,
    INDEX (`user_id`,`meta_key`),
    FOREIGN KEY (`user_id`) REFERENCES `users`(`user_id`) ON DELETE CASCADE
)ENGINE=INNODB CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS  `sessions` (
    `session_id` VARCHAR(40) DEFAULT '0' NOT NULL PRIMARY KEY,
    `session_ip_address` VARCHAR(16) DEFAULT '0' NOT NULL,
    `session_user_agent` VARCHAR(50) NOT NULL,
    `session_last_activity` DATETIME,
    `user_id` BIGINT(20) UNSIGNED NOT NULL,
    FOREIGN KEY (`user_id`) REFERENCES `users`(`user_id`) ON DELETE CASCADE
)ENGINE=INNODB CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- DADOS DE POST
DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts`(
    `post_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `post_author` BIGINT(20) UNSIGNED COMMENT "Autor", 
    `post_date` DATETIME COMMENT "Data de publicação",
    `post_title` TEXT COMMENT "Título",
    `post_status` VARCHAR(20),
    `post_mimetype` VARCHAR(100),
    `post_modified` DATETIME,
    `post_content_filtered` LONGTEXT,
    FOREIGN KEY (`post_author`) REFERENCES `users`(`user_id`) ON DELETE SET NULL
)ENGINE=INNODB CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `postmeta`;
CREATE TABLE IF NOT EXISTS `postmeta`(
    `postmeta_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `post_id` BIGINT(20) UNSIGNED NOT NULL,
    `meta_key` VARCHAR(255) NOT NULL, 
    `meta_value` VARCHAR(255) NOT NULL,
    INDEX (`post_id`,`meta_key`),
    FOREIGN KEY (`post_id`) REFERENCES `posts`(`post_id`) ON DELETE CASCADE
)ENGINE=INNODB CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Auditoria para modificação de posts
CREATE TRIGGER `before_post_update` 
    BEFORE UPDATE ON `posts`
    FOR EACH ROW
    SET NEW.`post_modified` = NOW();

-- Comentários
DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments`(
    `comment_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `comment_post_id` BIGINT(20) UNSIGNED NOT NULL,
    `comment_user_id` BIGINT(20) UNSIGNED NOT NULL,
    `comment_date` DATETIME COMMENT "Data",
    `comment_content` TEXT NOT NULL,
    `comment_status` VARCHAR(20),
    `comment_parent_id` BIGINT(20) UNSIGNED,
    FOREIGN KEY (`comment_post_id`) REFERENCES `posts`(`post_id`) ON DELETE CASCADE,
    FOREIGN KEY (`comment_user_id`) REFERENCES `users`(`user_id`) ON DELETE CASCADE,
    FOREIGN KEY (`comment_parent_id`) REFERENCES `comments`(`comment_id`) ON DELETE SET NULL
)ENGINE=INNODB CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data da inserção dos comentários
CREATE TRIGGER `before_comment_insert` 
    BEFORE INSERT ON `comments`
    FOR EACH ROW
    SET NEW.`comment_date` = NOW();

-- Relações de termos como tags, categorias, etc.
DROP TABLE IF EXISTS `terms`;
CREATE TABLE IF NOT EXISTS `terms`(
    `term_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `term_taxonomy` VARCHAR(32) NOT NULL,
    `term_description` LONGTEXT
)ENGINE=INNODB CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `term_relationships`;
CREATE TABLE IF NOT EXISTS `term_relationships`(
    `relation_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `term_id` BIGINT(20) UNSIGNED NOT NULL,
    `post_id` BIGINT(20) UNSIGNED NOT NULL,
    `relation_level` VARCHAR(10) NOT NULL,
    `relation_type` VARCHAR(20) NOT NULL,
    INDEX (`term_id`,`post_id`),
    FOREIGN KEY (`term_id`) REFERENCES `terms`(`term_id`) ON DELETE CASCADE,
    FOREIGN KEY (`post_id`) REFERENCES `posts`(`post_id`) ON DELETE CASCADE,
    INDEX (`relation_type`)
)ENGINE=INNODB CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Configurações do site
DROP TABLE IF EXISTS `siteoptions`;
CREATE TABLE IF NOT EXISTS `siteoptions`(
    `option_key` VARCHAR(255) NOT NULL PRIMARY KEY,
    `option_value` VARCHAR(255) NOT NULL,
    `option_autoload`VARCHAR(3) NOT NULL,
    INDEX (`option_autoload`)
)ENGINE=INNODB CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;