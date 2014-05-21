<?php
/* @var $this PersonaController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Personas',
);

$this->menu=array(
    array('label'=>'Agregar Persona', 'url'=>array('create')),
    array('label'=>'Administrar Persona', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Personas') ?>
<?php $this->widget('bootstrap.widgets.BsListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>