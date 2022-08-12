<?php
/* @var $this CategoriaController 
   @var $model Term
*/
$this->pageTitle = Yii::app()->name;
if (count($posts) < 1)
	header('Location: ' . Yii::app()->request->baseurl . '/');
?>


<div id="title-container" class=" text-center m-5">
	<h1><?= CHtml::encode(Yii::app()->name); ?></h1>
	<div class="m-5 mb-0">
		<div>
			<h5 class="fw-normal ">Somos especialistas em empresas de serviços recorrentes e</h5>
		</div>
		<div>
			<h5 class="fw-normal">queremos compartilhar tudo que estamos aprendendo. </h5>
		</div>
		<div>
			<h5 class="fw-normal">Vamos Juntos?</h2>
		</div>
	</div>
</div>
<div id="posts-container" class="container d-flex justify-content-between align-items-around">
	<?php foreach ($posts as $post) : ?>
		<!-- Carregando informações dinâmicas para cada post -->
		<div class="post-box card text-dark bg-light  border-light mb-3 shadow" style="--bs-bg-opacity: .95;">
			<?php
			$categories = $post->termRelationships(array('condition' => 'relation_type = "category"'));

			$id = $post['post_id'];
			$date = $post->getFormatedPostDate();
			$author = $post['postAuthor']['user_name'] . ' ' . $post['postAuthor']['user_sirname'] . ' <strong>@' . $post['postAuthor']['user_login'] . '</strong>';

			// Verificando se há imagem registrada
			$img =  $post->postmetas(array('condition' => 'meta_key = "img"'))[0]['meta_value'];

			$views =  $post->postmetas(array('condition' => 'meta_key = "views"',))[0]['meta_value'];

			$title = $post['post_title'];
			$content = $post['post_content_filtered'];

			$content = strip_tags($content);
			if (strlen($content) > 500) {

				// truncate string
				$contentCut = substr($content, 0, 500);
				$endPoint = strrpos($contentCut, ' ');

				//if the string doesn't contain any space then it will cut without word basis.
				$content = $endPoint ? substr($contentCut, 0, $endPoint) : substr($contentCut, 0);
				$content .= '...';
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
				<div><strong>Data:</strong> <?= $date ?></div>
				<div class="d-flex justify-content-between align-items-center">
					<span><strong>views: </strong> <?= $views ?> </span>
					<div class="d-flex flex-row-reverse mt-2"><a href="<?= Yii::app()->request->baseUrl . '/post/' . $id ?>" class="btn btn-primary">Saiba mais</a></div>
				</div>
			</div>
		</div>
	<?php endforeach; ?>

</div>
<div class="container d-flex align-items-center justify-content-center mt-3">

	<nav aria-label="Page navigation example">
		<?php $zap = $this->widget('CLinkPager', array(
			'pages' => $dataProvider->pagination,
			'htmlOptions' => array('class' => 'pagination'),
			'cssFile' => '',
			'header' => '',
			'firstPageCssClass' => 'd-none',
			'selectedPageCssClass' => 'page-item active',
			'internalPageCssClass' => 'page-item',
			'previousPageCssClass' => 'page-item',
			'nextPageCssClass' => 'page-item',
			'lastPageCssClass' => 'd-none',
			'firstPageLabel' => 'Primeiro',
			'nextPageLabel' => 'Próximo',
			'prevPageLabel' => 'Anterior',
		)); ?>
	</nav>
</div>