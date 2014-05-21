<?php
/* @var $this MunicipioController */
/* @var $model Municipio */
?>

<?php
$this->breadcrumbs=array(
	'Municipios'=>array('index'),
	'Crear',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'Lista de Municipio', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Administrar Municipio', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Crear','Municipio') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>