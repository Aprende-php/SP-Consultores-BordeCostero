<?php
/* @var $this ItemController */
/* @var $model Item */
?>

<?php
$this->breadcrumbs=array(
	'Items'=>array('index'),
	'Crear',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Item', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Item', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Create','Item') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>