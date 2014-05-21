<?php
/* @var $this ModeloDeNegociosController */
/* @var $model ModeloDeNegocios */
?>

<?php
$this->breadcrumbs=array(
	'Modelo De Negocioses'=>array('index'),
	'Crear',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List ModeloDeNegocios', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage ModeloDeNegocios', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Crear','Modelo de negocios') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>