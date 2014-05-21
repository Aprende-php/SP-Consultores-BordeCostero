<?php
/* @var $this ControlProyectoController */
/* @var $data ControlProyecto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CON_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CON_CORREL),array('view','id'=>$data->CON_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PRO_CORREL')); ?>:</b>
	<?php echo CHtml::encode($data->PRO_CORREL); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('CON_DESCRIPCION')); ?>:</b>
	<?php echo CHtml::encode($data->CON_DESCRIPCION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CON_RECOMENDACION')); ?>:</b>
	<?php echo CHtml::encode($data->CON_RECOMENDACION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CON_ESTADO')); ?>:</b>
	<?php echo CHtml::encode($data->CON_ESTADO); ?>
	<br /><br>

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('CON_FECHA_CONTROL')); ?>:</b>
	<?php echo CHtml::encode($data->CON_FECHA_CONTROL); ?>
	<br />

	*/ ?>

</div>