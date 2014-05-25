<?php
/* @var $this BeneficioSocialController */
/* @var $model BeneficioSocial */
?>

<?php
$this->breadcrumbs=array(
	'Beneficio Social'=>array('index'),
	'Crear Beneficio Social',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'Lista Beneficios Sociales', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Administrar Beneficio Social', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Create','BeneficioSocial') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>