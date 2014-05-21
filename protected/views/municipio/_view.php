<?php
/* @var $this MunicipioController */
/* @var $data Municipio */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('MUN_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->MUN_CORREL),array('view','id'=>$data->MUN_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COM_CORREL')); ?>:</b>
	<?php echo CHtml::encode($data->COM_CORREL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MUN_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->MUN_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MUN_RUT')); ?>:</b>
	<?php echo CHtml::encode($data->MUN_RUT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MUN_CONTACTO')); ?>:</b>
	<?php echo CHtml::encode($data->MUN_CONTACTO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MUN_VIGENCIA')); ?>:</b>
	<?php echo CHtml::encode($data->MUN_VIGENCIA); ?>
	<br />


</div>