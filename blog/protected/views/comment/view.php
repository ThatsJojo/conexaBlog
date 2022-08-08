<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->comment_id)),
	array('label'=>Yii::t('app', 'Delete') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->comment_id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'comment_id',
array(
			'name' => 'commentPost',
			'type' => 'raw',
			'value' => $model->commentPost !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->commentPost)), array('posts/view', 'id' => GxActiveRecord::extractPkValue($model->commentPost, true))) : null,
			),
array(
			'name' => 'commentUser',
			'type' => 'raw',
			'value' => $model->commentUser !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->commentUser)), array('users/view', 'id' => GxActiveRecord::extractPkValue($model->commentUser, true))) : null,
			),
'comment_date',
'comment_content',
'comment_status',
array(
			'name' => 'commentParent',
			'type' => 'raw',
			'value' => $model->commentParent !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->commentParent)), array('comment/view', 'id' => GxActiveRecord::extractPkValue($model->commentParent, true))) : null,
			),
	),
)); ?>

<h2><?php echo GxHtml::encode($model->getRelationLabel('comments')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->comments as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('comment/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>