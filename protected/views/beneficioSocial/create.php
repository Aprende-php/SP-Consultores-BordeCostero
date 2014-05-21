<?php
/* @var $this BeneficioSocialController */
/* @var $model BeneficioSocial */
?>

<?php
$this->breadcrumbs=array(
	'Beneficio Socials'=>array('index'),
	'Create',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List BeneficioSocial', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage BeneficioSocial', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Create','BeneficioSocial') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>