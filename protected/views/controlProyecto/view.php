<?php
/* @var $this controlProyectController */
/* @var $model controlProyect */
?>

<?php
$this->breadcrumbs=array(
	'Control de Proyecto'=>array('index'),
	$model->CON_CORREL,
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'Lista control de proyecto', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Crear control de proyecto', 'url'=>array('create')),
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Actualizar control de proyecto', 'url'=>array('update', 'id'=>$model->CON_CORREL)),
	array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Borrar control de proyecto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CON_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Administrar control de proyecto', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Ver','Control de Proyecto '.$model->CON_CORREL) ?>

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