<?php
/* @var $this ModeloDeNegociosController */
/* @var $model ModeloDeNegocios */
?>

<?php
$this->breadcrumbs=array(
	'Modelo De Negocios'=>array('index'),
	$model->MOD_CORREL,
);

$this->menu=array(
    array('label'=>'List ModeloDeNegocios', 'url'=>array('index')),
	array('label'=>'Create ModeloDeNegocios', 'url'=>array('create')),
	array('label'=>'Update ModeloDeNegocios', 'url'=>array('update', 'id'=>$model->MOD_CORREL)),
	array('label'=>'Delete ModeloDeNegocios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->MOD_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>'Manage ModeloDeNegocios', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('View','Modelo de Negocios '.$model->MOD_CORREL) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		'MOD_CORREL',
		'PRO_CORREL',
		'MOD_SOCIO_CLAVE',
		'MOD_ACTIVIDAD',
		'MOD_RECURSOS',
		'MOD_PROPUESTA',
		'MOD_REL_CLIENTE',
		'MOD_CANALES',
		'MOD_SEGMENTO_CLIENTE',
		'MOD_COSTOS',
		'MOD_INGRESO',
		'MOD_VIGENCIA',
	),
)); ?>