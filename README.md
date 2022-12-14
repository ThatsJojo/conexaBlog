
# Conexa Blog

Este projeto foi realizado durante o Onboarding da empresa Conexa. Seu objetivo é permitir um primeiro contato com o framework Yii V1.1.

## Requisitos de usuário:
- O Blog deverá permitir que apenas usuários cadastrados possam publicar novos posts e comentar nas postagens;
- A página inicial deverá mostrar apenas os últimos posts cadastrados com um pequeno resumo do seu texto, data da postagem, autor e título;
- Qualquer pessoa poderá visualizar os posts, porém apenas os usuários logados poderão comentar;
- Os post são vinculados a uma categoria para facilitar a busca por tópicos de um determinado assunto. As categorias são: Integrações, Serviços, Financeiro, Agenda, Parceiros e Outros;

## Requisitos do projeto:
- A modelagem do banco de dados é uma etapa muito importante do seu projeto e essencial no processo de geração dos CRUDs. Por isso, planeje com cuidado os campos que serão necessários, quais informações são relevantes para o seu sistema, especificação de chave estrangeira, chave primária, etc;
- Os formulários devem prezar por questões de usabilidade, observando posicionamento dos botões, textos, labels e questões de experiência do usuário;
- Os formulários devem validar os dados tanto no front-end (utilizando máscaras) quanto no back-end (rules no model)
## Stack utilizada

**Front-end:** Bootstrap, Jquery, Html, css, Javascript, 

**Back-end:** Framework Yii V1.1.22 + Giix Code e PHP 7.3

**Banco:** MySQL 5.7

**Ambiente:** Docker Compose


## Variáveis de Ambiente

Este projeto foi implementado utilizando docker-compose. , você vai precisar utilizar o adicionar as seguintes variáveis de ambiente no seu .env

`ROOT_FOLDER`


## Instalação

As dependências de projeto estão todas integradas no repositório, incluindo o Editor de texto CKeditor. Para rodar o projeto, basta rodar os containers via:

```bash
  docker compose up
```
    
## Demonstração

### Home
 ![Página inicial](/gitImages/home.png)


### Comentários
![Comentários](/gitImages/postComments.png)

### Modelagem do banco
![Modelagem do banco](/gitImages/BlogConexaBD.drawio.png)
