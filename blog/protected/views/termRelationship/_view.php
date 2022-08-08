<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('relation_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->relation_id), array('view', 'id' => $data->relation_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('term_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->term)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('post_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->post)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('relation_level')); ?>:
	<?php echo GxHtml::encode($data->relation_level); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('relation_type')); ?>:
	<?php echo GxHtml::encode($data->relation_type); ?>
	<br />

</div>