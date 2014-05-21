<?php
/* @var $this ProyectoController */
/* @var $model Proyecto */
?>

<?php
$this->breadcrumbs=array(
	'Proyectos'=>array('index'),
	$model->PRO_CORREL,
);

$this->menu=array(
    array('label'=>'Listar Proyectos', 'url'=>array('index')),
	array('label'=>'Crear Proyectos', 'url'=>array('create')),
	array('label'=>'Agregar Control del Proyecto', 'url'=>array('//ControlProyecto/create','id'=>$model->PRO_CORREL)),
	array('label'=>'Agregar Modelo de Negocios', 'url'=>array('//ModeloDeNegocios/create/','id'=>$model->PRO_CORREL)),
	array('label'=>'Agregar Presupuesto', 'url'=>array('//Presupuesto/Crear','id'=>$model->PRO_CORREL)),
	array('label'=>'Actualizar Proyecto', 'url'=>array('update', 'id'=>$model->PRO_CORREL)),
	array('label'=>'Eliminar Proyecto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PRO_CORREL),'confirm'=>'¿Esta seguro que desea eliminar este Proyecto?')),
    array('label'=>'Administrar Proyecto', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Vista','Proyecto '.$model->PRO_CORREL) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		'PRO_CORREL',
		'PER_CORREL',
		'INT_CORREL',
		'PRO_FECHA',
		'PRO_NOMBRE',
		'PRO_DESCRIPCION',
		'PRO_MONTO',
	),
)); ?>