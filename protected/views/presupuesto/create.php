<?php
/* @var $this PresupuestoController */
/* @var $model Presupuesto */
?>

<?php
$this->breadcrumbs=array(
	'Presupuestos'=>array('index'),
	'Create',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Presupuesto', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Presupuesto', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Create','Presupuesto') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>