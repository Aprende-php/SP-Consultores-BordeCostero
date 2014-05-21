<?php
/* @var $this InstitucionController */
/* @var $model Institucion */
?>

<?php
$this->breadcrumbs=array(
	'Instituciones'=>array('index'),
	'Crear',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'Lista Instituciones', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Administrar Instituciones', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Crear','Institución') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>