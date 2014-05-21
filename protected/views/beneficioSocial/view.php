<?php
/* @var $this BeneficioSocialController */
/* @var $model BeneficioSocial */
?>

<?php
$this->breadcrumbs=array(
	'Beneficio Socials'=>array('index'),
	$model->BEN_CORREL,
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List BeneficioSocial', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create BeneficioSocial', 'url'=>array('create')),
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Update BeneficioSocial', 'url'=>array('update', 'id'=>$model->BEN_CORREL)),
	array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Delete BeneficioSocial', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->BEN_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage BeneficioSocial', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('View','BeneficioSocial '.$model->BEN_CORREL) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		'BEN_CORREL',
		'PER_CORREL',
		'INT_CORREL',
		'BEN_FECHA',
		'BEN_TIPO',
		'BEN_NOMBRE',
		'BEN_DESCRIPCION',
		'BEN_MONTO',
	),
)); ?>