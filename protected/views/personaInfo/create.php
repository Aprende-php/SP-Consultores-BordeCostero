<?php
/* @var $this PersonaInfoController */
/* @var $model PersonaInfo */
?>

<?php
$this->breadcrumbs=array(
	'Persona Infos'=>array('index'),
	'Create',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List PersonaInfo', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage PersonaInfo', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Create','PersonaInfo') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>