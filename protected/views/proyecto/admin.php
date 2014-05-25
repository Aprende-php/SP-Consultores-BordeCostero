<?php
/* @var $this ProyectoController */
/* @var $model Proyecto */


$this->breadcrumbs=array(
	'Proyectos',
	'Administrar',
);

$this->menu=array();

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#proyecto-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php echo BsHtml::pageHeader('Administrar','Proyectos') ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo BsHtml::button('Busqueda Avanzada',array('class' =>'search-button', 'icon' => BsHtml::GLYPHICON_SEARCH,'color' => BsHtml::BUTTON_COLOR_PRIMARY), '#'); ?></h3>
    </div>
    <div class="panel-body">


        <div class="search-form" style="display:none">
            <?php $this->renderPartial('_search',array(
                'model'=>$model,
            )); ?>
        </div>
        <!-- search-form -->

        <?php $this->widget('bootstrap.widgets.BsGridView',array(
			'id'=>'proyecto-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
    		'PRO_CORREL',			
			array(
				'name'=>'PER_CORREL',
				'header'=>'Rut',
				'value'=>'Persona::model()->findByPk($data->PER_CORREL)->PER_RUT',
			),
    		array(
				'name'=>'INT_CORREL',
				'value'=>'Institucion::model()->findByPk($data->INT_CORREL)->INT_NOMBRE',
			),
			'PRO_FECHA',
			'PRO_NOMBRE',
			'PRO_DESCRIPCION',
		/*
		'PRO_MONTO',
		*/
				array(
					'class'=>'bootstrap.widgets.BsButtonColumn',
				),
			),
        )); ?>
    </div>
</div>




