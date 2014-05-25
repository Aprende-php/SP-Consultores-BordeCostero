<?php
/* @var $this controlProyectoController */
/* @var $model controlProyecto */
?>

<?php
$this->breadcrumbs=array(
	'Control de Proyecto'=>array('index'),
	'Crear',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'Lista Control de Proyecto', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Administrar Control de Proyecto', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Crear','Control de Proyecto') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>