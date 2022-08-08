<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'post-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'post_author'); ?>
		<?php echo $form->dropDownList($model, 'post_author', GxHtml::listDataEx(Users::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'post_author'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'post_date'); ?>
		<?php echo $form->textField($model, 'post_date'); ?>
		<?php echo $form->error($model,'post_date'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'post_title'); ?>
		<?php echo $form->textArea($model, 'post_title'); ?>
		<?php echo $form->error($model,'post_title'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'post_status'); ?>
		<?php echo $form->textField($model, 'post_status', array('maxlength' => 20)); ?>
		<?php echo $form->error($model,'post_status'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'post_mimetype'); ?>
		<?php echo $form->textField($model, 'post_mimetype', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'post_mimetype'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'post_modified'); ?>
		<?php echo $form->textField($model, 'post_modified'); ?>
		<?php echo $form->error($model,'post_modified'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'post_content_filtered'); ?>
		<?php echo $form->textArea($model, 'post_content_filtered'); ?>
		<?php echo $form->error($model,'post_content_filtered'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('comments')); ?></label>
		<?php echo $form->checkBoxList($model, 'comments', GxHtml::encodeEx(GxHtml::listDataEx(Comments::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('postmetas')); ?></label>
		<?php echo $form->checkBoxList($model, 'postmetas', GxHtml::encodeEx(GxHtml::listDataEx(Postmeta::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('termRelationships')); ?></label>
		<?php echo $form->checkBoxList($model, 'termRelationships', GxHtml::encodeEx(GxHtml::listDataEx(TermRelationships::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->