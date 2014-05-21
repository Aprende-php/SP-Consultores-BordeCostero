<?php
/* @var $this ItemController */
/* @var $model Item */
?>

<?php
$this->breadcrumbs=array(
	'Items'=>array('index'),
	$model->ITE_CORREL,
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Item', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Item', 'url'=>array('create')),
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Update Item', 'url'=>array('update', 'id'=>$model->ITE_CORREL)),
	array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Delete Item', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ITE_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Item', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('View','Item '.$model->ITE_CORREL) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		'ITE_CORREL',
		'ITE_NOMBRE',
	),
)); ?>