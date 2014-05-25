<?php
/* @var $this PersonaController */
/* @var $model Persona */
?>

<?php
$this->breadcrumbs=array(
	'Personas'=>array('index'),
	$model->PER_CORREL,
);

$this->menu=array(
	array('label'=>'Agregar Persona', 'url'=>array('create')),
	array('label'=>'Actualizar Persona', 'url'=>array('update', 'id'=>$model->PER_CORREL)),
	array('label'=>'Eliminar Persona', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PER_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>'Administrar Persona', 'url'=>array('admin')),
    array('label'=>'Añadir Informacion Personal', 'url'=>array('//PersonaInfo/create','id'=>$model->PER_CORREL)),
    array('label'=>'Añadir Beneficio Social', 'url'=>array('//beneficioSocial/createReg','id'=>$model->PER_CORREL)),
    array('label'=>'Añadir Proyecto', 'url'=>array('//Proyecto/create','id'=>$model->PER_CORREL)),
);
?>

<?php echo BsHtml::pageHeader('Ver','Persona '.$model->PER_CORREL) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		'PER_CORREL',
		'PER_RUT',
		'PER_NACIMIENTO',
	),
)); ?>