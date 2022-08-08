USE `blog`;

INSERT INTO `users` (`user_login`, `user_pass`, `user_email`, `user_name`, `user_sirname`, `user_cpf`, `user_rg`, `user_phone`)
VALUES ('csa.cleyton', 'senha', 'csa.cleyton@outlook.com', 'cleyton', 'cleyton', '055.666.555-09', '22.222.222-22', '55988888888');

-- Usuário inserido
SELECT @selectedUSER:= `user_id` FROM `users` WHERE `user_login`='csa.cleyton';

INSERT INTO `sessions` (`session_user_agent`, `session_last_activity`, `user_id`) 
VALUES ('Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:47.0)', NOW(), @selectedUSER);

INSERT INTO `usermeta` (`user_id`, `meta_key`, `meta_value`)
VALUES (@selectedUSER, 'role', 'admin');

INSERT INTO `posts` (`post_author`, `post_date`, `post_title`, `post_status`, `post_mimetype`, `post_modified`, `post_content_filtered`)
VALUES (@selectedUSER, NOW(), 'Novo módulo de integração com Banco Inter: entenda as vantagens', 'published', 'text/html', NOW(), '<div class="post-4551 post type-post status-publish format-standard has-post-thumbnail hentry category-coworkings">

 <div class="post-content">
 <div class="fusion-builder-row fusion-row fusion-flex-align-items-flex-start fusion-flex-justify-content-center" style="max-width:1372.8px;"><div class="fusion-layout-column fusion_builder_column fusion-builder-column-6 fusion_builder_column_2_3 2_3 fusion-flex-column"><div class="fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column" style="background-position:left top;background-repeat:no-repeat;padding:0px 0px 0px 0px;"><div class="fusion-content-tb fusion-content-tb-1"><div class="fusion-fullwidth fullwidth-box fusion-builder-row-3-1 fusion-flex-container nonhundred-percent-fullwidth non-hundred-percent-height-scrolling" style="background-color:rgba(255,255,255,0);background-position:center;background-repeat:no-repeat;border-width:0px 0px 0px 0px;border-color:rgba(0,0,0,.08);border-style:solid;"><div class="fusion-builder-row fusion-row fusion-flex-align-items-flex-start" style="width:104%;max-width:104%;"><div class="fusion-layout-column fusion_builder_column fusion-builder-column-7 fusion_builder_column_1_1 1_1 fusion-flex-column"><div class="fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column" style="background-position:left top;background-repeat:no-repeat;padding:0px 0px 0px 0px;"><div class="fusion-text fusion-text-4"><p><span style="font-weight:400;"> </span></p>
<p><b style="font-size:18px;">LEITURA EM 1 MIN</b><br><span style="font-size:18px;">O que você precisa saber sobre o módulo do Banco Inter:</span></p>
<p style="font-size:18px;">
</p><p><span style="background-color:rgba(255,255,255,0);font-size:18px;">⭐ Automatiza cobranças, sem necessidade de arquivo de remessa</span></p>
<p><span style="background-color:rgba(255,255,255,0);font-size:18px;">⭐ Permite a emissão de 100 boletos TAXA ZERO todo mês para contas PJ</span></p>
<p><span style="background-color:rgba(255,255,255,0);font-size:18px;">⭐ Pode gerar uma economia de até R$ 2.300,00/ano na sua operação</span></p>
<p><span style="background-color:rgba(255,255,255,0);font-size:18px;"><span style="font-size:18px;">⭐ É ideal para quem emite ao menos </span><u><span style="font-size:18px;">25 </span></u><span style="font-size:18px;">boletos/mês</span></span></p>
<p><span style="background-color:rgba(255,255,255,0);font-size:18px;">⭐ Custa apenas R$49,90/mês</span></p>
<p style="font-size:18px;">
</p><p style="text-align:justify;">
</p><div style="text-align:left;"><b style="background-color:rgba(255,255,255,0);font-size:18px;">LEIA NA ÍNTEGRA</b></div>
<p><span style="font-size:18px;background-color:rgba(255,255,255,0);"></span></p>
<div style="text-align:left;"><span style="background-color:rgba(255,255,255,0);">Se você utiliza arquivo de remessa para gerar e confirmar pagamento dos seus boletos ou possui integração automática com algum outro banco, esse artigo é para você. Nele, vamos abordar:</span></div>
<p></p>
<ol>
<li style="text-align:left;font-weight:400;"><span style="font-weight:400;font-size:18px;">O que faz o novo módulo?</span></li>
<li style="font-weight:400;"><span style="font-weight:400;font-size:18px;">Vantagens para clientes que usam arquivos de remessa</span></li>
<li style="font-weight:400;"><span style="font-weight:400;font-size:18px;">Vantagens para clientes que usam outros bancos de integração</span></li>
<li style="font-weight:400;"><span style="font-weight:400;font-size:18px;">Para quem é vantajoso o novo módulo?</span></li>
<li style="font-weight:400;"><span style="font-weight:400;font-size:18px;">Como contratar</span></li>
</ol>
<p><span style="font-family:Montserrat;font-size:18px;"> </span></p>
<p><span style="background-color:rgba(255,255,255,0);"><span style="font-size:18px;"> </span><b><span style="font-size:18px;"></span><span style="font-size:18px;">1. O que faz o módulo?</span></b></span></p>
<p style="text-align:left;"><span style="font-weight:400;font-size:16px;"><span style="font-size:18px;">Se você ainda não utiliza um processo de automação na geração dos boletos, a sua rotina é mais ou menos assim: abre o Conexa, inicia a geração do boleto com o preenchimento dos dados, </span><u><span style="font-size:18px;">depois </span></u><span style="font-size:18px;">pega o arquivo de remessa gerado e vai ao internet banking do seu banco para processar o boleto. </span></span></p>
<p style="text-align:left;"><span style="font-weight:400;font-size:18px;">Aí você sobe o arquivo e aguarda o horário de processamento do seu banco. Se não houver nenhum erro, você pega o arquivo de retorno, quando estiver disponível, faz o upload no Conexa e recebe a confirmação de que o seu boleto está pronto.</span></p>
<p style="text-align:left;"><span style="font-weight:400;font-size:18px;">Uma tarefa demorada e cheia de etapas.</span></p>
<p style="text-align:left;"><span style="font-weight:400;font-size:18px;">O que o módulo faz é encurtar tudo isso: você faz o pedido do boleto e pronto, o Conexa faz todas as confirmações com o Banco Inter instantaneamente, sem que você precise abrir o internet banking do banco ou esperar o período de validação. Tudo ali, na hora.</span></p>
<p style="text-align:left;"><span style="font-weight:400;font-size:18px;">Após isso, em média, de 10 a 30 min o boleto estará pronto para pagamento.</span></p>
<p style="text-align:left;"><span style="font-weight:400;font-size:18px;">Prático, rápido e você com muito mais tempo para focar em outras áreas do seu negócio.</span></p>
<p><span style="background-color:rgba(255,255,255,0);"><span style="font-size:18px;"> </span><b style="font-size:18px;">2. Vantagens para clientes que usam arquivos de remessa</b></span></p>
<p><span style="font-weight:400;font-size:18px;">Acabar com a rotina de checagem dos arquivos de remessa para gerar e confirmar pagamento de boletos, e realizar tudo na hora: essas são as principais vantagens para quem utiliza arquivos de remessa.</span></p>
<p style="text-align:left;"><span style="font-weight:400;font-size:18px;">Além de ter mais tempo para você fazer o que importa, o módulo também pode garantir uma economia extra: você poderá gerar até 100 boletos com taxa zero pelo Banco Inter.</span></p>
<p style="text-align:left;"><span style="font-weight:400;font-size:18px;">Então, vale uma visão geral sobre todas as vantagens:</span></p>
<ol start="3">
<li><span style="font-weight:400;font-size:18px;"> Gere 100 boletos com TAXA ZERO todo mês</span></li>
<li><span style="font-weight:400;font-size:18px;"> Receba boletos prontos para envio e pagamento</span></li>
<li><span style="font-weight:400;font-size:18px;"> Faça tudo no Conexa, sem precisar abrir o internet banking do Inter</span></li>
</ol>
<p><span style="font-size:18px;"> </span><b><span style="font-size:18px;">3. Vantagens para clientes que usam outros bancos de integração</span><br></b></p>
<p style="text-align:left;"><span style="font-weight:400;font-size:18px;">Para quem usa outro banco e sabe como funciona a automação, o principal fator de vantagem é a economia. Se você já foi até a tela de contratação do módulo adicional do Banco Inter, viu que sua taxa mensal é R$49,90 por mês, e pode estar se perguntando: como economizar se terei uma mensalidade maior no Conexa?</span></p>
<p style="text-align:left;"><span style="font-weight:400;font-size:18px;">Para responder a essa pergunta, precisamos lembrar que o Banco Inter permite a geração de até 100 boletos com taxa zero por mês, como já falamos anteriormente. Ciente disso, vamos a uma rápida simulação.</span></p>
<p style="text-align:left;"><span style="font-weight:400;font-size:18px;">Considere no exemplo a emissão de 100 boletos mensais. A taxa mais comum</span><span style="font-size:18px;"> </span><span style="font-weight:400;font-size:18px;">exercida hoje por geração de boleto é de R$2,45 e vamos utilizá-la para simulação. Na sequência, comparamos com os mesmos 100 boletos no novo módulo.</span></p>
<p style="text-align:left;"><span style="font-weight:400;font-size:18px;">SIMULAÇÃO COM OUTROS BANCOS – TAXA MAIS COMUM POR BOLETO</span></p>
<p style="text-align:left;"><span style="font-weight:400;font-size:18px;">100 boletos X R$2,45 = R$ 245,00/mês</span></p>
<p style="text-align:left;"><span style="font-weight:400;font-size:18px;">SIMULAÇÃO COM MÓDULO ADICIONAL BANCO INTER</span></p>
<p style="text-align:left;"><span style="font-weight:400;font-size:18px;">100 boletos taxa zero + R$ 49,90 da taxa mensal do módulo = R$ 49,90/mês</span></p>
<p style="text-align:left;"><b style="font-size:18px;">Os mesmos 100 boletos com o módulo adicional do Banco Inter custariam apenas R$ 49,90</b><span style="font-weight:400;font-size:18px;">, relativo ao valor mensal no Conexa, economizando mais de R$190,00/mês e aproximadamente R$2.340,00 em um ano.</span></p>
<p><span style="background-color:rgba(255,255,255,0);"><b style="font-size:18px;"> 4.</b><span style="font-size:18px;"> </span></span><b style="background-color:rgba(255,255,255,0);"><span style="font-size:18px;">Para </span><u><span style="font-size:18px;">quem </span></u><span style="font-size:18px;">é vantajoso o novo módulo?</span></b></p>
<p style="text-align:left;"><span style="font-weight:400;font-size:18px;">Agora que você já sabe todos os benefícios, é importante dizer que o novo módulo é vantajoso para clientes que emitem, ao menos, 25 boletos por mês. </span></p>
<p style="text-align:left;"><span style="font-weight:400;font-size:18px;">Assim, mesmo com a taxa de R$49,90 do módulo de integração do Banco Inter, será possível economizar e otimizar o tempo de realização dessa etapa.</span></p>
<p style="font-size:18px;">
</p><p><b><span style="font-size:18px;"> 5. Como contratar</span></b></p>
<p style="text-align:left;font-size:18px;">Para contratar o módulo é simples, e eu te explico em 3 passos super fáceis.</p>
<p style="text-align:left;"><span style="background-color:rgba(255,255,255,0);font-size:18px;">Passo 1: A</span><span style="background-color:rgba(255,255,255,0);font-size:18px;">cesse o seu sistema e vá em Configurações, aquele ícone da engrenagem, no menu superior. Feito isso, clique em </span><span style="background-color:rgba(255,255,255,0);font-size:18px;"><i>Módulos Opcionais</i><i>. </i></span></p>
<p style="text-align:left;"><span style="background-color:rgba(255,255,255,0);font-size:18px;">Passo 2: Selecione a unidade para qual deseja contratar o módulo.</span></p>
<p style="text-align:left;"><span style="background-color:rgba(255,255,255,0);font-size:18px;">Passo 3: Encontre o módulo opcional intitulado </span><span style="background-color:rgba(255,255,255,0);"><i><span style="font-size:18px;">Módulo Integração API Boletos Banco Inter </span></i><span style="font-size:18px;">e clique em contratar</span></span><span style="background-color:rgba(255,255,255,0);font-size:18px;">.</span></p>
<p style="font-size:18px;">
</p><p style="text-align:left;"><span style="font-size:18px;">Se você quiser saber como configurar o seu o módulo, </span><a href="https://ajuda.conexa.app/pt/articles/5908095-como-configurar-o-modulo-de-integracao-api-de-boletos-do-banco-inter"><u><span style="font-size:18px;">clique aqui e veja nosso artigo de orientação na central de ajuda.</span></u></a></p>
<p style="font-size:18px;">
</p><p style="text-align:left;font-size:18px;">Até a próxima dica e boas vendas!</p>
</div></div></div></div></div>
</div></div></div></div><div class="fusion-fullwidth fullwidth-box fusion-builder-row-5 fusion-flex-container nonhundred-percent-fullwidth non-hundred-percent-height-scrolling" style="background-color:rgba(255,255,255,0);background-position:center;background-repeat:no-repeat;border-width:0px 0px 0px 0px;border-color:rgba(0,0,0,.08);border-style:solid;"></div>
 </div>
 </div>');

-- Post inserido
SELECT @selectedPOST:= `post_id` FROM `posts` WHERE `post_author` = @selectedUSER LIMIT 1;

INSERT INTO `postmeta` (`meta_key`,`post_id`,`meta_value`)
VALUES ('views', @selectedPOST, '1500');

INSERT INTO `comments` (`comment_post_id`, `comment_user_id`,`comment_date`,`comment_status`,`comment_parent_id`, `comment_content`)
VALUES (@selectedPOST, @selectedUSER, NOW(), 'published', null, 'Adorei o conteúdo.\n Por favor, publiquem com maior frequência!');

-- Comentário inserido
SELECT @selectedCOMMENT:= `comment_id` FROM `comments` WHERE `comment_user_id` = @selectedUSER AND `comment_post_id` = @selectedPOST LIMIT 1;

INSERT INTO `comments` (`comment_post_id`, `comment_user_id`,`comment_date`,`comment_status`,`comment_parent_id`, `comment_content`)
VALUES (@selectedPOST, @selectedUSER, NOW(), 'published', @selectedCOMMENT, 'Mas continuando com a mesma qualidade, não há problemas! ;)');

-- Inserindo categorias
INSERT INTO `terms` (`term_taxonomy`) 
VALUES ('Integrações'),
    ('Serviços'),
    ('Financeiro'),
    ('Agenda'),
    ('Parceiros'),
    ('Outros');

-- Categoria inserida escolhida
SELECT @integracoesCATEGORY:= `term_id` FROM `terms` WHERE `term_taxonomy`= 'Integrações';
SELECT @servicosCATEGORY:= `term_id` FROM `terms` WHERE `term_taxonomy`= 'Serviços';
SELECT @financeiroCATEGORY:= `term_id` FROM `terms` WHERE `term_taxonomy`= 'Financeiro';
SELECT @agendaCATEGORY:= `term_id` FROM `terms` WHERE `term_taxonomy`= 'Agenda';
SELECT @parceirosCATEGORY:= `term_id` FROM `terms` WHERE `term_taxonomy`= 'Parceiros';
SELECT @outrosCATEGORY:= `term_id` FROM `terms` WHERE `term_taxonomy`= 'Outros';

INSERT INTO `term_relationships` (`term_id`,`post_id`,`relation_level`,`relation_type`)
VALUES (@integracoesCATEGORY, @selectedPOST, 'principal', 'category'),
    (@servicosCATEGORY, @selectedPOST, 'secondary', 'category'),
    (@financeiroCATEGORY, @selectedPOST, 'secondary', 'category'),
    (@agendaCATEGORY, @selectedPOST, 'secondary', 'category'),
    (@parceirosCATEGORY, @selectedPOST, 'secondary', 'category'),
    (@outrosCATEGORY, @selectedPOST, 'secondary', 'category');