<?php
/* @var $this ModeloDeNegociosController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Modelo De Negocioses',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create ModeloDeNegocios', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage ModeloDeNegocios', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Modelo De Negocioses') ?>
<?php $this->widget('bootstrap.widgets.BsListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>