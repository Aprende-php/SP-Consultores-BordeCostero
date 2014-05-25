<?php
/* @var $this PersonaInfoController */
/* @var $model PersonaInfo */
?>

<?php
$this->breadcrumbs=array(
	'Persona Infos'=>array('index'),
	$model->PER_INFO_CORREL,
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List PersonaInfo', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create PersonaInfo', 'url'=>array('create')),
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Update PersonaInfo', 'url'=>array('update', 'id'=>$model->PER_INFO_CORREL)),
	array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Delete PersonaInfo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PER_INFO_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage PersonaInfo', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('View','PersonaInfo '.$model->PER_INFO_CORREL) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		'PER_INFO_CORREL',
		'PER_CORREL',
		'COM_CORREL',
		'PER_NOMBRES',
		'PER_PATERNO',
		'PER_MATERNO',
		'PER_DIRECCION',
		'PER_LATITUD',
		'PER_LONGITUD',
		'PER_TELEFONO',
		'PER_VIGENCIA',
	),
)); ?>