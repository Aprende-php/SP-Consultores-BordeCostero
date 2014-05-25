<?php
/* @var $this controlProyectController */
/* @var $model controlProyect */


$this->breadcrumbs=array(
	'Control de Proyecto'=>array('index'),
	'Administrar Control',
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-list','label'=>'Lista control de proyecto', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Crear control de proyecto', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#controlProyect-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php echo BsHtml::pageHeader('Administrar','Control de Proyecto') ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo BsHtml::button('Busqueda avanzada',array('class' =>'search-button', 'icon' => BsHtml::GLYPHICON_SEARCH,'color' => BsHtml::BUTTON_COLOR_PRIMARY), '#'); ?></h3>
    </div>
    <div class="panel-body">
        <div class="search-form" style="display:none">
            <?php $this->renderPartial('_search',array(
                'model'=>$model,
            )); ?>
        </div>
        <!-- search-form -->

        <?php $this->widget('bootstrap.widgets.BsGridView',array(
			'id'=>'controlProyect-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
				'CON_ESTADO',
				'CON_FECHA_CONTROL',
				'CON_RECOMENDACION',
				'CON_DESCRIPCION',
				array(
					'class'=>'bootstrap.widgets.BsButtonColumn',
				),
			),
        )); ?>
    </div>
</div>







