<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div id="title-container" class="text-center">
	<h1><?= CHtml::encode(Yii::app()->name); ?></h1>
	<div class="">
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


<div class="form mt-5">

	<?php $form = $this->beginWidget('CActiveForm', array(
		'id' => 'user-signup-form',
		'htmlOptions' => array('class' => 'container w-25 d-flex flex-column justify-content-between', 'style' => "min-height: 600px;"),
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
		<?php echo $form->passwordField($model, 'user_pass', array('type'=>'password')); ?>
		<?php echo $form->error($model, 'user_pass'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'user_email'); ?>
		<?php echo $form->textField($model, 'user_email'); ?>
		<?php echo $form->error($model, 'user_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'user_name'); ?>
		<?php echo $form->textField($model, 'user_name'); ?>
		<?php echo $form->error($model, 'user_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'user_sirname'); ?>
		<?php echo $form->textField($model, 'user_sirname'); ?>
		<?php echo $form->error($model, 'user_sirname'); ?>
	</div>
	

	<div class="row">
		<?php echo $form->labelEx($model, 'user_cpf'); ?>
		<?php echo $form->textField($model, 'user_cpf'); ?>
		<?php echo $form->error($model, 'user_cpf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'user_phone'); ?>
		<?php echo $form->textField($model, 'user_phone'); ?>
		<?php echo $form->error($model, 'user_phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'user_rg'); ?>
		<?php echo $form->textField($model, 'user_rg'); ?>
		<?php echo $form->error($model, 'user_rg'); ?>
	</div>


	<input type="submit" name="yt0" value="Criar!" style="max-width: 100px; align-self: center;" class="btn btn-success mt-3">


	<?php $this->endWidget(); ?>

</div><!-- form -->

<script>
	$(document).ready(function() {
		$('#User_user_cpf').mask('000.000.000-00');

		

		$('#User_user_rg').mask('00.000.000-00');

		$('#User_user_phone').mask('00 0 0000-0000');
	});


</script>