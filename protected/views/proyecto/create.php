<?php
/* @var $this ProyectoController */
/* @var $model Proyecto */
?>

<?php
$this->breadcrumbs=array(
	'Administrar'=>array('admin'),
	'Agregar',
);

$this->menu=array(
	array('label'=>'Volver', 'url'=>array('//persona/view','id'=>$model->PER_CORREL)),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Administrar Proyectos', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Agregar','Proyecto') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>