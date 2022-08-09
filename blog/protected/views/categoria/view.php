<?php
/* @var $this CategoriaController 
   @var $model Term
*/
$this->pageTitle = Yii::app()->name;
if(count($posts) < 1)
	header('Location: '.Yii::app()->request->baseurl.'/');
?>


<main>
	<div id="title-container">
		<h1><?= CHtml::encode(Yii::app()->name).': '.$category; ?></h1>
		<p>Somos especialistas em empresas de serviços recorrentes e queremos compartilhar tudo que estamos aprendendo. Vamos Juntos?</p>
	</div>
	<div id="posts-container" class="container d-flex justify-content-between align-items-around">
		<?php foreach ($posts as $post) : ?>
			<!-- Carregando informações dinâmicas para cada post -->
			<div class="post-box card text-dark bg-light  border-light mb-3" style="--bs-bg-opacity: .8;">
				<?php
				$categories = $post->termRelationships(array('condition'=>'relation_type = "category"'));
				
				$id = $post['post_id'];
				$data = (new DateTime($post['post_date']))->format('d/m/ Y, G:i:s');
				$author = $post['postAuthor']['user_name'] . ' ' . $post['postAuthor']['user_sirname'] . ' <strong>@' . $post['postAuthor']['user_login'] . '</strong>';

				// Verificando se há imagem registrada
				$img =  $post->postmetas(array('condition'=>'meta_key = "img"'))[0]['meta_value'];
				
				$views =  $post->postmetas(array('condition'=>'meta_key = "views"',))[0]['meta_value'];

				$title = $post['post_title'];
				$content = $post['post_content_filtered'];

				$content = strip_tags($content);
				if (strlen($content) > 500) {

					// truncate string
					$contentCut = substr($content, 0, 500);
					$endPoint = strrpos($contentCut, ' ');

					//if the string doesn't contain any space then it will cut without word basis.
					$content = $endPoint ? substr($contentCut, 0, $endPoint) : substr($contentCut, 0);
					$content .= '... <a href="' . Yii::app()->request->baseUrl . '/post/' . $id . '">Read More</a>';
				}
				?>


				<a href="<?= Yii::app()->request->baseUrl; ?>/post/<?= $id ?>">
					<img class="card-img-top" src="<?= Yii::app()->request->baseUrl; ?>/images/posts/<?= $img ?>" alt="<?= $title  ?>">

					<h2 class="post-title px-3">
						<?= $title ?>
					</h2>
				</a>
				<div class="card-body d-flex flex-column justify-content-between">

					<p class="post-description"><?= $content ?></p>
	
					<div class="author">
						<strong>Author: </strong> <?= $author ?>
					</div>
	
					<div class="tags-container">
						<p>
							<strong>Categorias: </strong>
							<?php foreach ($categories as $termRelation) : 
								$tag = $termRelation['term'];
								?>
								
								<a href="<?= Yii::app()->request->baseUrl . '/categoria/' . $tag['term_id'] ?>"><?= $tag['term_taxonomy']  ?></a>
							<?php endforeach; ?>
						</p>
					</div>
					<div class="d-flex justify-content-between">
						<div><strong>Publicado em:</strong> <?= $data ?></div>
						<div><?=$views ?> <strong>views</strong></div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
		
	</div>
</main>