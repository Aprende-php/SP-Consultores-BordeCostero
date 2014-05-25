<?php
/* @var $this ModeloDeNegociosController */
/* @var $model ModeloDeNegocios */
$this->menu=array(
    array('label'=>'Volver al proyecto', 'url'=>array('//proyecto/view','id'=>$model->PRO_CORREL)));
?>

<?php
$this->breadcrumbs=array(
	'Modelo de Negocios',
	'Crear',
);


?>

<?php echo BsHtml::pageHeader('Crear','Modelo de negocios') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>