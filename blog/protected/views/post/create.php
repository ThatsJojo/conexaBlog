<?php
$admins = User::getAdmins();
$categories = Term::getCategories();
?>
<div id="title-container" class=" text-center m-5">
	<h1>Novo Post</h1>
</div>
<div id="posts-container">

	<form action="/post/create" method="post" enctype="multipart/form-data" class="container d-flex flex-column justify-content-center align-items-stretch">
		<div class="d-flex justify-content-between">
			<div>
				<p class="note">
					Campos com <span class="required">*</span> são obrigatórios.
				</p>

				

				<div class="row">
					<label for="Post_post_title">Título do post</label> <textarea name="Post[post_title]" id="Post_post_title"></textarea>
				</div><!-- row -->

				<div class="mb-3">
					<label for="formFile" class="form-label">Imagem Principal do Post</label>
					<input class="form-control" type="file" id="formFile" name="image" accept="image/*">
				</div>

				<?php if (count($admins) > 0) : ?>
					<div class="row">
						<label for="Post_post_author" class="form-label">Usuário</label>
						<select name="Post[post_author]" class="form-select">
							<?php foreach ($admins as $admin) : ?>
								<option value="<?= $admin->user_id ?>"><?= $admin->user_login ?></option>
							<?php endforeach; ?>
						</select>
					</div><!-- row -->
				<?php endif; ?>
				<div class="row">


					<label for="Post_post_date">Data de publicação</label> <input name="Post[post_date]" id="Post_post_date" type="text">
				</div><!-- row -->
				<div class="row">
					<label for="Post_post_status" class="form-label">Status</label>
					<select name="Post[post_status]" class="form-select">
						<option value="published">published</option>
						<option value="draft">draft</option>
						<option value="pendding">pendding</option>
					</select>
				</div><!-- row -->

				<?php if (count($categories) > 0) : ?>
					<div class="mt-3">

						<span>Selecione as categorias:</span>
						<div class="bg-light bg-gradient p-4 mt-2 mb-4 rounded">

							<div class="form-check form-switch" name="termRelationships">
								<?php $counter = 0;
								foreach ($categories as $category) : ?>
									<div>
										<input name="termRelationships[]" value="<?= $category->term_id ?>" class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault<?= $count ?>">
										<label class="form-check-label" for="flexSwitchCheckChecked<?= $count ?>"><?= $category->term_taxonomy ?></label>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				<?php endif; ?>


			</div>
			<div>
				<label for="Post_post_content_filtered">Conteúdo do post</label>
				<textarea name="Post[post_content_filtered]" id="Post_post_content_filtered" ></textarea>

			</div>
		</div>


		<input type="submit" name="yt0" value="Salvar" style="max-width: 100px; align-self: center;" class="btn btn-success">
	</form>
</div><!-- form -->
</div>
</div>

<script src="<?= Yii::app()->request->baseUrl . '/ckeditor/ckeditor.js' ?>"></script>
<script>

	$(document).ready(function(){
		$('#Post_post_date').mask('0000-00-00 00:00:00');
	});

	ClassicEditor
		.create(document.querySelector('#Post_post_content_filtered'),{
			heading: {
                    options: [
                        { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                        { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                        { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                        { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                        { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                        { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                        { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                    ]
                },
		})
		.catch(error => {
			console.error(error);
		});
</script>