<?php
/* @var $this PersonaInfoController */
/* @var $data PersonaInfo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PER_INFO_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PER_INFO_CORREL),array('view','id'=>$data->PER_INFO_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PER_CORREL')); ?>:</b>
	<?php echo CHtml::encode($data->PER_CORREL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COM_CORREL')); ?>:</b>
	<?php echo CHtml::encode($data->COM_CORREL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PER_NOMBRES')); ?>:</b>
	<?php echo CHtml::encode($data->PER_NOMBRES); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PER_PATERNO')); ?>:</b>
	<?php echo CHtml::encode($data->PER_PATERNO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PER_MATERNO')); ?>:</b>
	<?php echo CHtml::encode($data->PER_MATERNO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PER_DIRECCION')); ?>:</b>
	<?php echo CHtml::encode($data->PER_DIRECCION); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('PER_LATITUD')); ?>:</b>
	<?php echo CHtml::encode($data->PER_LATITUD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PER_LONGITUD')); ?>:</b>
	<?php echo CHtml::encode($data->PER_LONGITUD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PER_TELEFONO')); ?>:</b>
	<?php echo CHtml::encode($data->PER_TELEFONO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PER_VIGENCIA')); ?>:</b>
	<?php echo CHtml::encode($data->PER_VIGENCIA); ?>
	<br />

	*/ ?>

</div>