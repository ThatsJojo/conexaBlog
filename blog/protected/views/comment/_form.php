<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'comment-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'comment_post_id'); ?>
		<?php echo $form->dropDownList($model, 'comment_post_id', GxHtml::listDataEx(Posts::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'comment_post_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'comment_user_id'); ?>
		<?php echo $form->dropDownList($model, 'comment_user_id', GxHtml::listDataEx(Users::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'comment_user_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'comment_date'); ?>
		<?php echo $form->textField($model, 'comment_date'); ?>
		<?php echo $form->error($model,'comment_date'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'comment_content'); ?>
		<?php echo $form->textArea($model, 'comment_content'); ?>
		<?php echo $form->error($model,'comment_content'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'comment_status'); ?>
		<?php echo $form->textField($model, 'comment_status', array('maxlength' => 20)); ?>
		<?php echo $form->error($model,'comment_status'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'comment_parent_id'); ?>
		<?php echo $form->dropDownList($model, 'comment_parent_id', GxHtml::listDataEx(Comment::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'comment_parent_id'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('comments')); ?></label>
		<?php echo $form->checkBoxList($model, 'comments', GxHtml::encodeEx(GxHtml::listDataEx(Comment::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->