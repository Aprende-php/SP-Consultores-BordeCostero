<?php
/* @var $this PresupuestoController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Control de Proyecto',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Crear Control de Proyecto', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Administrar Control de Proyecto', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Control Proyecto') ?>
<?php $this->widget('bootstrap.widgets.BsListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>