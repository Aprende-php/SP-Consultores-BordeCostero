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
    array('label'=>'Volver al proyecto', 'url'=>array('//proyecto/view','id'=>$model->PRO_CORREL)),
	array('label'=>'Editar ModeloDeNegocios', 'url'=>array('update', 'id'=>$model->MOD_CORREL)),
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