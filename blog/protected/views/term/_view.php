<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('term_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->term_id), array('view', 'id' => $data->term_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('term_taxonomy')); ?>:
	<?php echo GxHtml::encode($data->term_taxonomy); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('term_description')); ?>:
	<?php echo GxHtml::encode($data->term_description); ?>
	<br />

</div>