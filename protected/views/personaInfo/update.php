<?php
/* @var $this PersonaInfoController */
/* @var $model PersonaInfo */
?>

<?php
$this->breadcrumbs=array(
	'Persona Infos'=>array('index'),
	$model->PER_INFO_CORREL=>array('view','id'=>$model->PER_INFO_CORREL),
	'Update',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List PersonaInfo', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create PersonaInfo', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-list-alt','label'=>'View PersonaInfo', 'url'=>array('view', 'id'=>$model->PER_INFO_CORREL)),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage PersonaInfo', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Update','PersonaInfo '.$model->PER_INFO_CORREL) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>