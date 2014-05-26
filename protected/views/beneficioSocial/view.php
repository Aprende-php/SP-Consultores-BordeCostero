<?php
/* @var $this BeneficioSocialController */
/* @var $model BeneficioSocial */
?>

<?php
$this->breadcrumbs=array(
	'Administrar Beneficio Social'=>array('admin'),
	$model->BEN_CORREL,
);
$this->menu=array(
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Crear Beneficio Social', 'url'=>array('create','id'=>Persona::model()->findByPk($model->PER_CORREL)->PER_CORREL)),
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Editar Beneficio Social', 'url'=>array('update', 'id'=>$model->BEN_CORREL)),
	array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Borrar Beneficio Social', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->BEN_CORREL),'confirm'=>'Seguro desee borrar este item?')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Administrar Beneficio Social', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Ver','BeneficioSocial '.$model->BEN_CORREL) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		'BEN_CORREL',
		array(
			'name'=>'Rut Beneficiario',
			'value'=>Persona::model()->findByPk($model->PER_CORREL)->PER_RUT,
			),
		'INT_CORREL',
		'BEN_FECHA',
		'BEN_TIPO',
		'BEN_NOMBRE',
		'BEN_DESCRIPCION',
		'BEN_MONTO',
	),
)); ?>