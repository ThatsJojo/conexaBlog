<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'post_id'); ?>
		<?php echo $form->textField($model, 'post_id', array('maxlength' => 20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'post_author'); ?>
		<?php echo $form->dropDownList($model, 'post_author', GxHtml::listDataEx(User::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'post_date'); ?>
		<?php echo $form->textField($model, 'post_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'post_title'); ?>
		<?php echo $form->textArea($model, 'post_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'post_status'); ?>
		<?php echo $form->textField($model, 'post_status', array('maxlength' => 20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'post_mimetype'); ?>
		<?php echo $form->textField($model, 'post_mimetype', array('maxlength' => 100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'post_modified'); ?>
		<?php echo $form->textField($model, 'post_modified'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'post_content_filtered'); ?>
		<?php echo $form->textArea($model, 'post_content_filtered'); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
