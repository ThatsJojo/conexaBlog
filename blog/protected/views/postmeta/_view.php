<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('postmeta_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->postmeta_id), array('view', 'id' => $data->postmeta_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('post_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->post)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('meta_key')); ?>:
	<?php echo GxHtml::encode($data->meta_key); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('meta_value')); ?>:
	<?php echo GxHtml::encode($data->meta_value); ?>
	<br />

</div>