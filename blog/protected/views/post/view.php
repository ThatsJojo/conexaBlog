<?php

$loggedUser = User::model()->findByPk(Yii::app()->user->id);

if (isset($loggedUser)) {
	$loggedUserName = $loggedUser->user_login ?? false;
	$loggedUserAdmin = $loggedUser->isAdmin();
	$loggedUserImg = $loggedUser->getImagePath();
	$loggedUserId = $loggedUser->user_id;
}

$content =  $model["post_content_filtered"];
$post = $model;

$comments = $model->comments;

$categories = $post->termRelationships(array('condition' => 'relation_type = "category"'));

$id = $post['post_id'];
$data = $post->getFormatedPostDate();
$author = $post['postAuthor']['user_name'] . ' ' . $post['postAuthor']['user_sirname'] . ' <strong>@' . $post['postAuthor']['user_login'] . '</strong>';

// Verificando se há imagem registrada
$img =  $post->postmetas(array('condition' => 'meta_key = "img"'))[0]['meta_value'];

$views =  $post->postmetas(array('condition' => 'meta_key = "views"',))[0]['meta_value'];

$title = $post['post_title'];
?>



<main class="m-5 mt-0 mb-0 pb-5 pt-3">
	<div class="bg-light bg-gradient container border d-flex flex-column justify-content-center align-items-center mt-5 rounded">

		<h2 class="post-title px-3 m-5 text-aling-center"><?= $title ?></h2>

		<div class="container p-5" style="overflow: none;">


			<a href="<?= Yii::app()->request->baseUrl; ?>/post/<?= $id ?>">
				<img class="card-img-top" src="<?= Yii::app()->request->baseUrl; ?>/images/posts/<?= $img ?>" alt="<?= $title  ?>">

			</a>
			<div class="post-description"><?= $content ?></div>

		</div>
	</div>

	<div class="bg-light bg-gradient container border text-justify mt-5 p-5 rounded">
		<div class="d-flex flex-column justify-content-between">


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
				<div><?= $views ?> <strong>views</strong></div>
			</div>
		</div>
	</div>

	<div class="container border text-justify mt-5 p-5 rounded shadow-sm" style="background-color: #eee" ;>
		<div class=" d-flex flex-column justify-content-between">
			<h2 class="mb-3"><?= $comments ? 'Comentários:' : 'Ainda não há comentários aqui.' ?></h2>

			<?php foreach ($comments as $comment) :
				if ($comment->comment_parent_id != null)
					continue;
				$commentUser = $comment->commentUser;
				// Comentários principais
			?>
				<div>
					<div class="card mb-2" commentId='<?=$comment->comment_id?>'>
						<div class="card-body">
							<p><?= $comment->comment_content ?></p>

							<div class="d-flex justify-content-between mb-0">
								<div class="d-flex flex-row align-items-center">
									<img src="<?= $commentUser->getImagePath() ?>" alt="avatar" width="25" height="25" class="rounded-circle" />
									<p class="small mb-0 ms-2">
									<p><?= $commentUser->user_login ?></p>
									</p>
								</div>
								<div class="d-flex flex-column align-items-end">
									<i class="far fa-thumbs-up mx-2 fa-xs text-black" style="margin-top: -0.16rem;">Publicado em: <?= $comment->getFormatedCommentDate() ?></i>

									<?php if (isset($loggedUser)) : ?>
										<i class="far fa-thumbs-up mx-2 fa-xs text-black"><a class="answearComment" href="javascript:void(0);">Responder</a></i>
									<?php endif; ?>

								</div>
							</div>
						</div>
					</div>

					<?php
					$reponses = $comment->comments;
					if (isset($reponses)) :
						foreach ($reponses as $comment) :
							// Comentários aninhados
							if ($comment->comment_status != 'published')
								continue;
							$commentUser = $comment->commentUser;
					?>

							<div class="card mb-2 ms-5 text-bg-secondary">
								<div class="card-body">
									<p><?= $comment->comment_content ?></p>

									<div class="d-flex justify-content-between mb-0">
										<div class="d-flex flex-row align-items-center">
											<img src="<?= $commentUser->getImagePath() ?>" alt="avatar" width="25" height="25" class="rounded-circle" />
											<p class="small mb-0 ms-2">
											<p><?= $commentUser->user_login ?></p>
											</p>
										</div>
										<div class="d-flex flex-row align-items-center">
											<i class="far fa-thumbs-up mx-2 fa-xs text-black" style="margin-top: -0.16rem;">Publicado em: <?= $comment->getFormatedCommentDate() ?></i>
										</div>
									</div>
								</div>
							</div>

					<?php endforeach;
					endif;
					?>
				</div>
			<?php endforeach; ?>
		</div>




		<form id="answearCommentForm" action="/comment/create" method="post" class="d-none card mb-2 ms-5">
			<input type="hidden" name="Comment[comment_post_id]" value="<?= $id ?>">
			<input type="hidden" name="Comment[comment_user_id]" value="<?= $loggedUserId ?>">
			<input type="hidden" name="Comment[comment_parent_id]">
			<div class="card-footer py-3 border-1 border border-dark shadow">
				<div class="d-flex flex-start mx-2">
					<img class="rounded-circle shadow-1-strong me-3" src="<?= $loggedUserImg ?>" alt="avatar" width="40" height="40" />
					<div class="form-outline w-100">
						<textarea name="Comment[comment_content]" class="form-control" id="textAreaExample" rows="1" style="background: #fff;" placeholder="Mensagem"></textarea>
					</div>
				</div>
				<div class="d-flex flex-row-reverse mt-2 pt-1">
					<button type="button" class="btn btn-outline-primary btn-sm me-2">Cancel</button>
					<button type="submit" class="btn btn-primary btn-sm me-3">Post comment</button>
				</div>
			</div>
		</form>



	</div>

	<script>
		$(document).ready(function() {
			$(".answearComment").on("click", event => {
				let element = event.target.parentNode.parentNode.parentNode.parentNode.parentNode;
				let commentId = element.getAttribute('commentId');
				element = element.parentNode;
				
				let form = $("#answearCommentForm")[0].cloneNode(true);
				console.log(($(form).find('input[name="Comment[comment_parent_id]"]')[0]).setAttribute("value", commentId));
				form.classList.remove("d-none");
				element.appendChild(form);
			});
		});
	</script>

	<?php if (isset($loggedUser)) : ?>
		<div class="mt-2 py-2 bg-light rounded shadow-sm">
			<form action="/comment/create" method="post" >
				<input type="hidden" name="Comment[comment_post_id]" value="<?= $id ?>">
				<input type="hidden" name="Comment[comment_user_id]" value="<?= $loggedUserId ?>">
				<div class="card-footer py-3 border-0 " style="background-color: #f8f9fa;">
					<div class="d-flex flex-start mx-5">
						<img class="rounded-circle shadow-1-strong me-3" src="<?= $loggedUserImg ?>" alt="avatar" width="40" height="40" />
						<div class="form-outline w-100">
							<textarea name="Comment[comment_content]" class="form-control" id="textAreaExample" rows="4" style="background: #fff;" placeholder="Mensagem"></textarea>
						</div>
					</div>
					<div class="d-flex flex-row-reverse mt-2 pt-1">
						<button type="button" class="btn btn-outline-primary btn-sm me-5">Cancel</button>
						<button type="submit" class="btn btn-primary btn-sm me-3">Post comment</button>
					</div>
				</div>
			</form>
		</div>
	<?php endif; ?>
</main>