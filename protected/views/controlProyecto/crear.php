<?php
/* @var $this controlProyectController */
/* @var $model controlProyect */
?>

<?php
$this->breadcrumbs=array(
	'controlProyect'=>array('index'),
	'Crear',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List controlProyect', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage controlProyect', 'url'=>array('admin')),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model,'lista'=>$lista)); ?>

        <?php $this->widget('bootstrap.widgets.BsGridView',array(
			'id'=>'controlProyect-grid',
			'dataProvider'=>$lista->search(),
			'filter'=>$lista,
			'columns'=>array(
				array(
					'name'=>'ITE_CORREL',
					'value'=>'Item::model()->findByPk($data->ITE_CORREL)->ITE_NOMBRE',
				),
				'PRE_DESCRIPCION',
				'PRE_MONTO',
				array(
					'class'=>'bootstrap.widgets.BsButtonColumn',
				),

			),
			'type' => BsHtml::GRID_TYPE_RESPONSIVE,

        )); ?>