<?php
/* @var $this PersonaController */
/* @var $model Persona */
?>

<?php
$this->breadcrumbs=array(
	'Personas'=>array('index'),
	'Crear Persona',
);

$this->menu=array(
    array('label'=>'Lista de Personas', 'url'=>array('index')),
	array('label'=>'Administrar Personas', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Añadir','Persona') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>