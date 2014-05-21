<?php
/* @var $this ProyectoController */
/* @var $data Proyecto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PRO_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PRO_CORREL),array('view','id'=>$data->PRO_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PER_CORREL')); ?>:</b>
	<?php echo CHtml::encode($data->PER_CORREL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('INT_CORREL')); ?>:</b>
	<?php echo CHtml::encode($data->INT_CORREL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PRO_FECHA')); ?>:</b>
	<?php echo CHtml::encode($data->PRO_FECHA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PRO_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->PRO_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PRO_DESCRIPCION')); ?>:</b>
	<?php echo CHtml::encode($data->PRO_DESCRIPCION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PRO_MONTO')); ?>:</b>
	<?php echo CHtml::encode($data->PRO_MONTO); ?>
	<br />


</div>