<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'term-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'term_taxonomy'); ?>
		<?php echo $form->textField($model, 'term_taxonomy', array('maxlength' => 32)); ?>
		<?php echo $form->error($model,'term_taxonomy'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'term_description'); ?>
		<?php echo $form->textArea($model, 'term_description'); ?>
		<?php echo $form->error($model,'term_description'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('termRelationships')); ?></label>
		<?php echo $form->checkBoxList($model, 'termRelationships', GxHtml::encodeEx(GxHtml::listDataEx(TermRelationships::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->