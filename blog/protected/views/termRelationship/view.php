<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->relation_id)),
	array('label'=>Yii::t('app', 'Delete') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->relation_id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'relation_id',
array(
			'name' => 'term',
			'type' => 'raw',
			'value' => $model->term !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->term)), array('terms/view', 'id' => GxActiveRecord::extractPkValue($model->term, true))) : null,
			),
array(
			'name' => 'post',
			'type' => 'raw',
			'value' => $model->post !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->post)), array('posts/view', 'id' => GxActiveRecord::extractPkValue($model->post, true))) : null,
			),
'relation_level',
'relation_type',
	),
)); ?>

