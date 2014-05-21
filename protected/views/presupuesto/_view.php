<?php
/* @var $this PresupuestoController */
/* @var $data Presupuesto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PRE_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PRE_CORREL),array('view','id'=>$data->PRE_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ITE_CORREL')); ?>:</b>
	<?php echo CHtml::encode($data->ITE_CORREL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PRO_CORREL')); ?>:</b>
	<?php echo CHtml::encode($data->PRO_CORREL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PRE_DESCRIPCION')); ?>:</b>
	<?php echo CHtml::encode($data->PRE_DESCRIPCION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PRE_MONTO')); ?>:</b>
	<?php echo CHtml::encode($data->PRE_MONTO); ?>
	<br />


</div>