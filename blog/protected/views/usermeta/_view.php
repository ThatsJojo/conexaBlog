<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('usermeta_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->usermeta_id), array('view', 'id' => $data->usermeta_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('user_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->user)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('meta_key')); ?>:
	<?php echo GxHtml::encode($data->meta_key); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('meta_value')); ?>:
	<?php echo GxHtml::encode($data->meta_value); ?>
	<br />

</div>