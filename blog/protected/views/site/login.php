<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */

?>


<div id="title-container" class="text-center">
	<h1><?= CHtml::encode(Yii::app()->name); ?></h1>
	<div class="m-5">
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


	<div class="form mt-5">

		<?php $form = $this->beginWidget('CActiveForm', array(
			'id' => 'user-login-form',
			'htmlOptions' => array('class' => 'container w-25 d-flex flex-column justify-content-between', 'style' => "min-height: 150px;"),
			// Please note: When you enable ajax validation, make sure the corresponding
			// controller action is handling ajax validation correctly.
			// See class documentation of CActiveForm for details on this,
			// you need to use the performAjaxValidation()-method described there.
			'enableAjaxValidation' => false,
		)); ?>

		<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

		<?php
		$header = '<span class="p-3">Corrija os erros abaixo: </span>';
		$htmlOptions = array(
			'class' => 'errorSummary',
			'selectedPageCssClass' => 'page-item active',
		);

		echo $form->errorSummary($model, $header, null, $htmlOptions); ?>

		<div class="row">
			<?php echo $form->labelEx($model, 'user_login'); ?>
			<?php echo $form->textField($model, 'user_login'); ?>
			<?php echo $form->error($model, 'user_login'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model, 'user_pass'); ?>
			<?php echo $form->passwordField($model, 'user_pass', null, array('type' => 'password')) ?>
			<?php echo $form->error($model, 'user_pass'); ?>
		</div>


		<div class="buttons mt-3">
			<input type="submit" name="yt0" value="Entrar" style="max-width: 100px; align-self: center;" class="btn btn-success">
		</div>

		<?php $this->endWidget(); ?>

	</div><!-- form -->
</div>


<!-- ERROR Modal -->
<div class="modal" id="errorModal">
	<div class="modal-dialog">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">Verifique os dados informados:</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
				<?= $errorMessage ?>
			</div>

			<!-- Modal footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
			</div>

		</div>
	</div>
</div>

<script>
	let errorMessage = "<?= $errorMessage ?>";
	$(window).load(function() {


		if (errorMessage) {
			new bootstrap.Modal('#errorModal').show();
		}
	});
</script>