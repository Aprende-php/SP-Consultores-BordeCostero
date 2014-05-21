<?php
/* @var $this ProyectoController */
/* @var $model Proyecto */
?>

<?php
$this->breadcrumbs=array(
	'Proyectos'=>array('index'),
	'Agregar',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'Listar Proyectos', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Administrar Proyectos', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Agregar','Proyecto') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>