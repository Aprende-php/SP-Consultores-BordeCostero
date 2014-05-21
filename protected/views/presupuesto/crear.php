<?php
/* @var $this PresupuestoController */
/* @var $model Presupuesto */
?>

<?php
$this->breadcrumbs=array(
	'Presupuesto'=>array('index'),
	'Crear',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Presupuesto', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Presupuesto', 'url'=>array('admin')),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model,'lista'=>$lista)); ?>

        <?php $this->widget('bootstrap.widgets.BsGridView',array(
			'id'=>'presupuesto-grid',
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