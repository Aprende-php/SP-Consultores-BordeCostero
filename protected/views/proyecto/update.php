<?php
/* @var $this ProyectoController */
/* @var $model Proyecto */
?>

<?php
$this->breadcrumbs=array(
	'Proyectos'=>array('index'),
	$model->PRO_CORREL=>array('view','id'=>$model->PRO_CORREL),
	'Update',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Proyecto', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Proyecto', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-list-alt','label'=>'View Proyecto', 'url'=>array('view', 'id'=>$model->PRO_CORREL)),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Proyecto', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Update','Proyecto '.$model->PRO_CORREL) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>