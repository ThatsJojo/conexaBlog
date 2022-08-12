<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'comment_id'); ?>
		<?php echo $form->textField($model, 'comment_id', array('maxlength' => 20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'comment_post_id'); ?>
		<?php echo $form->dropDownList($model, 'comment_post_id', GxHtml::listDataEx(Post::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'comment_user_id'); ?>
		<?php echo $form->dropDownList($model, 'comment_user_id', GxHtml::listDataEx(User::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'comment_date'); ?>
		<?php echo $form->textField($model, 'comment_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'comment_content'); ?>
		<?php echo $form->textArea($model, 'comment_content'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'comment_status'); ?>
		<?php echo $form->textField($model, 'comment_status', array('maxlength' => 20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'comment_parent_id'); ?>
		<?php echo $form->dropDownList($model, 'comment_parent_id', GxHtml::listDataEx(Comment::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
