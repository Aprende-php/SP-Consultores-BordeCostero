<?php
/* @var $this InstitucionController */
/* @var $model Institucion */
?>

<?php
$this->breadcrumbs=array(
	'Institucions'=>array('index'),
	$model->INT_CORREL,
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Institucion', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Institucion', 'url'=>array('create')),
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Update Institucion', 'url'=>array('update', 'id'=>$model->INT_CORREL)),
	array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Delete Institucion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->INT_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Institucion', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('View','Institucion '.$model->INT_CORREL) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		'INT_CORREL',
		'INT_NOMBRE',
		'INT_DESCRIPCION',
	),
)); ?>