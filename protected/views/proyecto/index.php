<?php
/* @var $this ProyectoController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Proyectos',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Agregar Proyecto', 'url'=>array('persona/buscarPersona')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Administrar Proyecto', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Proyectos') ?>
<?php $this->widget('bootstrap.widgets.BsListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>