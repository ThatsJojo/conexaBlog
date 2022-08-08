<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'postmeta-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'post_id'); ?>
		<?php echo $form->dropDownList($model, 'post_id', GxHtml::listDataEx(Posts::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'post_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'meta_key'); ?>
		<?php echo $form->textField($model, 'meta_key', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'meta_key'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'meta_value'); ?>
		<?php echo $form->textField($model, 'meta_value', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'meta_value'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->