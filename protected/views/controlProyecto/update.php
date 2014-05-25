<?php
/* @var $this controlProyectController */
/* @var $model controlProyect */
?>

<?php
$this->breadcrumbs=array(
	'Control de Proyecto'=>array('index'),
	$model->CON_CORREL=>array('view','id'=>$model->CON_CORREL),
	'Actualizar',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'Lista control de proyecto', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Crear control de proyecto', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-list-alt','label'=>'Ver controlde proyecto', 'url'=>array('view', 'id'=>$model->CON_CORREL)),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Administrar control de proyecto', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Administrar','Control de Proyecto '.$model->CON_CORREL) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>