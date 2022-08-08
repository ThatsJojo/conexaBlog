<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'siteoption-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'option_key'); ?>
		<?php echo $form->textField($model, 'option_key', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'option_key'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'option_value'); ?>
		<?php echo $form->textField($model, 'option_value', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'option_value'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'option_autoload'); ?>
		<?php echo $form->textField($model, 'option_autoload', array('maxlength' => 3)); ?>
		<?php echo $form->error($model,'option_autoload'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->