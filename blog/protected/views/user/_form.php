<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'user-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'user_login'); ?>
		<?php echo $form->textField($model, 'user_login', array('maxlength' => 60)); ?>
		<?php echo $form->error($model,'user_login'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'user_pass'); ?>
		<?php echo $form->textField($model, 'user_pass', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'user_pass'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'user_email'); ?>
		<?php echo $form->textField($model, 'user_email', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'user_email'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'user_name'); ?>
		<?php echo $form->textField($model, 'user_name', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'user_name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'user_sirname'); ?>
		<?php echo $form->textField($model, 'user_sirname', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'user_sirname'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'user_cpf'); ?>
		<?php echo $form->textField($model, 'user_cpf', array('maxlength' => 14)); ?>
		<?php echo $form->error($model,'user_cpf'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'user_rg'); ?>
		<?php echo $form->textField($model, 'user_rg', array('maxlength' => 13)); ?>
		<?php echo $form->error($model,'user_rg'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'user_phone'); ?>
		<?php echo $form->textField($model, 'user_phone', array('maxlength' => 14)); ?>
		<?php echo $form->error($model,'user_phone'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('comments')); ?></label>
		<?php echo $form->checkBoxList($model, 'comments', GxHtml::encodeEx(GxHtml::listDataEx(Comment::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('posts')); ?></label>
		<?php echo $form->checkBoxList($model, 'posts', GxHtml::encodeEx(GxHtml::listDataEx(Post::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('sessions')); ?></label>
		<?php echo $form->checkBoxList($model, 'sessions', GxHtml::encodeEx(GxHtml::listDataEx(Session::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('usermetas')); ?></label>
		<?php echo $form->checkBoxList($model, 'usermetas', GxHtml::encodeEx(GxHtml::listDataEx(Usermeta::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->