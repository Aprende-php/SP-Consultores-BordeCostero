<?php
/* @var $this ProyectoController */
/* @var $model Proyecto */
?>

<?php
$this->breadcrumbs=array(
	'Proyectos',
	$model->PRO_NOMBRE,
);

$this->menu=array(
	array('label'=>'Volver', 'url'=>array('//persona/view','id'=>$model->PER_CORREL)),
	array('label'=>'Agregar Proyecto', 'url'=>array('create','id'=>$model->PER_CORREL)),
	array('label'=>'Agregar Control del Proyecto', 'url'=>array('//ControlProyecto/create','id'=>$model->PRO_CORREL)),
	array('label'=>'Agregar Modelo de Negocios', 'url'=>array('//ModeloDeNegocios/crear/','id'=>$model->PRO_CORREL)),
	array('label'=>'Agregar Presupuesto', 'url'=>array('//Presupuesto/Crear','id'=>$model->PRO_CORREL)),
	array('label'=>'Ver Controles de Proyecto', 'url'=>array('//ControlProyecto/admin','id'=>$model->PRO_CORREL)),
	array('label'=>'Actualizar Proyecto', 'url'=>array('update', 'id'=>$model->PRO_CORREL)),
    array('label'=>'Administrar Proyectos', 'url'=>array('admin')),
	array('label'=>'Eliminar Proyecto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PRO_CORREL),'confirm'=>'¿Esta seguro que desea eliminar este Proyecto?')),
);
?>

<?php echo BsHtml::pageHeader('Ver','Proyecto '.$model->PRO_CORREL) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		array(
			'name'=>'PER_CORREL',
			'value'=>Persona::model()->findByPk($model->PER_CORREL)->PER_RUT,
		),
		'PRO_NOMBRE',
		array(
			'name'=>'INT_CORREL',
			'value'=>Institucion::model()->findByPk($model->INT_CORREL)->INT_NOMBRE,
		),
		'PRO_FECHA',
		'PRO_DESCRIPCION',
		'PRO_MONTO',
	),
)); ?>