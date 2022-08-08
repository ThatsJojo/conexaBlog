<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'user_id'); ?>
		<?php echo $form->textField($model, 'user_id', array('maxlength' => 20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'user_login'); ?>
		<?php echo $form->textField($model, 'user_login', array('maxlength' => 60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'user_pass'); ?>
		<?php echo $form->textField($model, 'user_pass', array('maxlength' => 255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'user_email'); ?>
		<?php echo $form->textField($model, 'user_email', array('maxlength' => 100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'user_name'); ?>
		<?php echo $form->textField($model, 'user_name', array('maxlength' => 50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'user_sirname'); ?>
		<?php echo $form->textField($model, 'user_sirname', array('maxlength' => 100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'user_cpf'); ?>
		<?php echo $form->textField($model, 'user_cpf', array('maxlength' => 14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'user_rg'); ?>
		<?php echo $form->textField($model, 'user_rg', array('maxlength' => 13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'user_phone'); ?>
		<?php echo $form->textField($model, 'user_phone', array('maxlength' => 14)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
