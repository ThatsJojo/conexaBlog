<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('comment_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->comment_id), array('view', 'id' => $data->comment_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('comment_post_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->commentPost)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('comment_user_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->commentUser)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('comment_date')); ?>:
	<?php echo GxHtml::encode($data->comment_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('comment_content')); ?>:
	<?php echo GxHtml::encode($data->comment_content); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('comment_status')); ?>:
	<?php echo GxHtml::encode($data->comment_status); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('comment_parent_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->commentParent)); ?>
	<br />

</div>