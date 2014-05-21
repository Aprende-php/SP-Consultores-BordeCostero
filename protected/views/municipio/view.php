<?php
/* @var $this MunicipioController */
/* @var $model Municipio */
?>

<?php
$this->breadcrumbs=array(
	'Municipios'=>array('index'),
	$model->MUN_CORREL,
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Municipio', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Municipio', 'url'=>array('create')),
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Update Municipio', 'url'=>array('update', 'id'=>$model->MUN_CORREL)),
	array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Delete Municipio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->MUN_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Municipio', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('View','Municipio '.$model->MUN_CORREL) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		'MUN_CORREL',
		'COM_CORREL',
		'MUN_NOMBRE',
		'MUN_RUT',
		'MUN_CONTACTO',
		'MUN_VIGENCIA',
	),
)); ?>