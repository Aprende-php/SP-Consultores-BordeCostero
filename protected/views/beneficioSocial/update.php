<?php
/* @var $this BeneficioSocialController */
/* @var $model BeneficioSocial */
?>

<?php
$this->breadcrumbs=array(
	'Administrar Beneficio Social'=>array('admin'),
	$model->BEN_CORREL=>array('view','id'=>$model->BEN_CORREL),
	'Editar',
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Crear Beneficio Social', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-list-alt','label'=>'Ver BeneficioSocial', 'url'=>array('view', 'id'=>$model->BEN_CORREL)),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Administrar Beneficio Social', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Editar','BeneficioSocial '.$model->BEN_CORREL) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>