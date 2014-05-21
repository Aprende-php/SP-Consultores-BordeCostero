<?php
/* @var $this PresupuestoController */
/* @var $model Presupuesto */
?>

<?php
$this->breadcrumbs=array(
	'Presupuestos'=>array('index'),
	$model->PRE_CORREL=>array('view','id'=>$model->PRE_CORREL),
	'Update',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Presupuesto', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Presupuesto', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-list-alt','label'=>'View Presupuesto', 'url'=>array('view', 'id'=>$model->PRE_CORREL)),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Presupuesto', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Update','Presupuesto '.$model->PRE_CORREL) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>