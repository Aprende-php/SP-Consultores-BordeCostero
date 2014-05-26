<?php
/* @var $this controlProyectoController */
/* @var $model controlProyecto */
?>

<?php
$this->breadcrumbs=array(
	'Proyectos'=>array('index'),
	Proyecto::model()->findByPk($model->PRO_CORREL)->PRO_NOMBRE=>array('//Proyecto/view/','id'=>$model->PRO_CORREL),
	'Crear Control de Proyecto',
	//'Crear Control De Proyecto'=>array('//controlProyecto/create'),
);


$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'Lista Control de Proyecto', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Administrar Control de Proyecto', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Crear','Control de Proyecto') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>