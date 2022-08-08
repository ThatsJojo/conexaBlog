<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'term-relationship-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'term_id'); ?>
		<?php echo $form->dropDownList($model, 'term_id', GxHtml::listDataEx(Terms::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'term_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'post_id'); ?>
		<?php echo $form->dropDownList($model, 'post_id', GxHtml::listDataEx(Posts::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'post_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'relation_level'); ?>
		<?php echo $form->textField($model, 'relation_level', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'relation_level'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'relation_type'); ?>
		<?php echo $form->textField($model, 'relation_type', array('maxlength' => 20)); ?>
		<?php echo $form->error($model,'relation_type'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->