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
	array('label'=>'Volver', 'url'=>array('//persona/view','id'=>$model->PER_CORREL)),	
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Administrar Informacion Personal', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Agregar','Información Personal') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>