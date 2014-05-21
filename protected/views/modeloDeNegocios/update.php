<?php
/* @var $this ModeloDeNegociosController */
/* @var $model ModeloDeNegocios */
?>

<?php
$this->breadcrumbs=array(
	'Modelo De Negocioses'=>array('index'),
	$model->MOD_CORREL=>array('view','id'=>$model->MOD_CORREL),
	'Update',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List ModeloDeNegocios', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create ModeloDeNegocios', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-list-alt','label'=>'View ModeloDeNegocios', 'url'=>array('view', 'id'=>$model->MOD_CORREL)),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage ModeloDeNegocios', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Update','ModeloDeNegocios '.$model->MOD_CORREL) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>