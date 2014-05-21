<?php
/* @var $this MunicipioController */
/* @var $model Municipio */
?>

<?php
$this->breadcrumbs=array(
	'Municipios'=>array('index'),
	$model->MUN_CORREL=>array('view','id'=>$model->MUN_CORREL),
	'Update',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Municipio', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Municipio', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-list-alt','label'=>'View Municipio', 'url'=>array('view', 'id'=>$model->MUN_CORREL)),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Municipio', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Update','Municipio '.$model->MUN_CORREL) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>