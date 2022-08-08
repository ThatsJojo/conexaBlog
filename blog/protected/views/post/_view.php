<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('post_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->post_id), array('view', 'id' => $data->post_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('post_author')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->postAuthor)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('post_date')); ?>:
	<?php echo GxHtml::encode($data->post_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('post_title')); ?>:
	<?php echo GxHtml::encode($data->post_title); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('post_status')); ?>:
	<?php echo GxHtml::encode($data->post_status); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('post_mimetype')); ?>:
	<?php echo GxHtml::encode($data->post_mimetype); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('post_modified')); ?>:
	<?php echo GxHtml::encode($data->post_modified); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('post_content_filtered')); ?>:
	<?php echo GxHtml::encode($data->post_content_filtered); ?>
	<br />
	*/ ?>

</div>