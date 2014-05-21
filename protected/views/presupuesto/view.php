<?php
/* @var $this PresupuestoController */
/* @var $model Presupuesto */
?>

<?php
$this->breadcrumbs=array(
	'Presupuestos'=>array('index'),
	$model->PRE_CORREL,
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Presupuesto', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Presupuesto', 'url'=>array('create')),
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Update Presupuesto', 'url'=>array('update', 'id'=>$model->PRE_CORREL)),
	array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Delete Presupuesto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PRE_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Presupuesto', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('View','Presupuesto '.$model->PRE_CORREL) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		'PRE_CORREL',
		'ITE_CORREL',
		'PRO_CORREL',
		'PRE_DESCRIPCION',
		'PRE_MONTO',
	),
)); ?>