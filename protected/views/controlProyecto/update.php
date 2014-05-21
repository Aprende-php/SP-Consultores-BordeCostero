<?php
/* @var $this controlProyectController */
/* @var $model controlProyect */
?>

<?php
$this->breadcrumbs=array(
	'controlProyect'=>array('index'),
	$model->CON_CORREL=>array('view','id'=>$model->CON_CORREL),
	'Update',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List controlProyect', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create controlProyect', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-list-alt','label'=>'View controlProyect', 'url'=>array('view', 'id'=>$model->CON_CORREL)),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage controlProyect', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Update','controlProyect '.$model->CON_CORREL) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>