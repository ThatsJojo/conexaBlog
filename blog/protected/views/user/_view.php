<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('user_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->user_id), array('view', 'id' => $data->user_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('user_login')); ?>:
	<?php echo GxHtml::encode($data->user_login); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('user_pass')); ?>:
	<?php echo GxHtml::encode($data->user_pass); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('user_email')); ?>:
	<?php echo GxHtml::encode($data->user_email); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('user_name')); ?>:
	<?php echo GxHtml::encode($data->user_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('user_sirname')); ?>:
	<?php echo GxHtml::encode($data->user_sirname); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('user_cpf')); ?>:
	<?php echo GxHtml::encode($data->user_cpf); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('user_rg')); ?>:
	<?php echo GxHtml::encode($data->user_rg); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('user_phone')); ?>:
	<?php echo GxHtml::encode($data->user_phone); ?>
	<br />
	*/ ?>

</div>