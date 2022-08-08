<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('option_key')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->option_key), array('view', 'id' => $data->option_key)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('option_value')); ?>:
	<?php echo GxHtml::encode($data->option_value); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('option_autoload')); ?>:
	<?php echo GxHtml::encode($data->option_autoload); ?>
	<br />

</div>