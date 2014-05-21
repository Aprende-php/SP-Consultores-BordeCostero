<?php
/* @var $this controlProyectController */
/* @var $model controlProyect */
?>

<?php
$this->breadcrumbs=array(
	'controlProyecto'=>array('index'),
	$model->CON_CORREL,
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List controlProyect', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create controlProyect', 'url'=>array('create')),
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Update controlProyect', 'url'=>array('update', 'id'=>$model->CON_CORREL)),
	array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Delete controlProyect', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CON_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage controlProyect', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('View','controlProyect '.$model->CON_CORREL) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		'CON_CORREL',
		'PRO_CORREL',
		'CON_DESCRIPCION',
		'CON_RECOMENDACION',
		'CON_ESTADO',
		'CON_FECHA_CONTROL',
	),
)); ?>