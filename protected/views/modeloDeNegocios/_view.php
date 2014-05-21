<?php
/* @var $this ModeloDeNegociosController */
/* @var $data ModeloDeNegocios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('MOD_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->MOD_CORREL),array('view','id'=>$data->MOD_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PRO_CORREL')); ?>:</b>
	<?php echo CHtml::encode($data->PRO_CORREL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MOD_SOCIO_CLAVE')); ?>:</b>
	<?php echo CHtml::encode($data->MOD_SOCIO_CLAVE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MOD_ACTIVIDAD')); ?>:</b>
	<?php echo CHtml::encode($data->MOD_ACTIVIDAD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MOD_RECURSOS')); ?>:</b>
	<?php echo CHtml::encode($data->MOD_RECURSOS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MOD_PROPUESTA')); ?>:</b>
	<?php echo CHtml::encode($data->MOD_PROPUESTA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MOD_REL_CLIENTE')); ?>:</b>
	<?php echo CHtml::encode($data->MOD_REL_CLIENTE); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('MOD_CANALES')); ?>:</b>
	<?php echo CHtml::encode($data->MOD_CANALES); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MOD_SEGMENTO_CLIENTE')); ?>:</b>
	<?php echo CHtml::encode($data->MOD_SEGMENTO_CLIENTE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MOD_COSTOS')); ?>:</b>
	<?php echo CHtml::encode($data->MOD_COSTOS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MOD_INGRESO')); ?>:</b>
	<?php echo CHtml::encode($data->MOD_INGRESO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MOD_VIGENCIA')); ?>:</b>
	<?php echo CHtml::encode($data->MOD_VIGENCIA); ?>
	<br />

	*/ ?>

</div>