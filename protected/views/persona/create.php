<?php
/* @var $this PersonaController */
/* @var $model Persona */
Yii::app()->clientScript->registerScript('Validar Rut', "$('#Persona_PER_RUT').Rut({on_error: function(){ alert('Rut incorrecto');}})");
?>

<?php
$this->breadcrumbs=array(
	'Personas'=>array('admin'),
	'Crear Persona',
);

$this->menu=array(
	array('label'=>'Administrar Personas', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Añadir','Persona') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>