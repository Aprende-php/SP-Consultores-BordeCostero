<?php
/* @var $this BeneficioSocialController */
/* @var $model BeneficioSocial */
?>

<?php
$this->breadcrumbs=array(
	'Beneficio Socials'=>array('index'),
	$model->BEN_CORREL=>array('view','id'=>$model->BEN_CORREL),
	'Update',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List BeneficioSocial', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create BeneficioSocial', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-list-alt','label'=>'View BeneficioSocial', 'url'=>array('view', 'id'=>$model->BEN_CORREL)),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage BeneficioSocial', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Update','BeneficioSocial '.$model->BEN_CORREL) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>