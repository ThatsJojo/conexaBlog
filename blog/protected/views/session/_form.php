<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'session-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'session_id'); ?>
		<?php echo $form->textField($model, 'session_id', array('maxlength' => 40)); ?>
		<?php echo $form->error($model,'session_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'session_ip_address'); ?>
		<?php echo $form->textField($model, 'session_ip_address', array('maxlength' => 16)); ?>
		<?php echo $form->error($model,'session_ip_address'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'session_user_agent'); ?>
		<?php echo $form->textField($model, 'session_user_agent', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'session_user_agent'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'session_last_activity'); ?>
		<?php echo $form->textField($model, 'session_last_activity'); ?>
		<?php echo $form->error($model,'session_last_activity'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->dropDownList($model, 'user_id', GxHtml::listDataEx(Users::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'user_id'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->