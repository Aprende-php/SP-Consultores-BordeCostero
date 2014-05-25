<?php
/* @var $this ModeloDeNegociosController */
/* @var $model ModeloDeNegocios */
?>

<?php
$this->breadcrumbs=array(
	'Atras'=>array(Yii::app()->user->returnUrl),
	'Crear',
);


?>

<?php echo BsHtml::pageHeader('Crear','Modelo de negocios') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>