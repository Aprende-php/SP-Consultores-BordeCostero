<?php
/* @var $this ItemController */
/* @var $model Item */
?>

<?php
$this->breadcrumbs=array(
	'Items'=>array('index'),
	$model->ITE_CORREL=>array('view','id'=>$model->ITE_CORREL),
	'Update',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Item', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Item', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-list-alt','label'=>'View Item', 'url'=>array('view', 'id'=>$model->ITE_CORREL)),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Item', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Update','Item '.$model->ITE_CORREL) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>