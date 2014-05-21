<?php
/* @var $this PersonaController */
/* @var $data Persona */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PER_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PER_CORREL),array('view','id'=>$data->PER_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PER_RUT')); ?>:</b>
	<?php echo CHtml::encode($data->PER_RUT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PER_NACIMIENTO')); ?>:</b>
	<?php echo CHtml::encode($data->PER_NACIMIENTO); ?>
	<br />


</div>