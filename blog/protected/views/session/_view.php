<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('session_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->session_id), array('view', 'id' => $data->session_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('session_ip_address')); ?>:
	<?php echo GxHtml::encode($data->session_ip_address); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('session_user_agent')); ?>:
	<?php echo GxHtml::encode($data->session_user_agent); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('session_last_activity')); ?>:
	<?php echo GxHtml::encode($data->session_last_activity); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('user_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->user)); ?>
	<br />

</div>