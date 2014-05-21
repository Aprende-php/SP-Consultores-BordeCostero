<?php
/* @var $this controlProyectoController */
/* @var $model controlProyecto */
?>

<?php
$this->breadcrumbs=array(
	'controlProyecto'=>array('index'),
	'Create',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List controlProyecto', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage controlProyecto', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Create','controlProyecto') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>