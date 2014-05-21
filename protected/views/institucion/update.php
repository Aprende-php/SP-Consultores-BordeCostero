<?php
/* @var $this InstitucionController */
/* @var $model Institucion */
?>

<?php
$this->breadcrumbs=array(
	'Instituciones'=>array('index'),
	$model->INT_CORREL=>array('view','id'=>$model->INT_CORREL),
	'Actualizar',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Institucion', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Institucion', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-list-alt','label'=>'View Institucion', 'url'=>array('view', 'id'=>$model->INT_CORREL)),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Institucion', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Update','Institucion '.$model->INT_CORREL) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>