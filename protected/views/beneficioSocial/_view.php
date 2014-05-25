<?php
/* @var $this BeneficioSocialController */
/* @var $data BeneficioSocial */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('BEN_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->BEN_CORREL),array('view','id'=>$data->BEN_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PER_CORREL')); ?>:</b>
	<?php echo CHtml::encode(Persona::model()->findByPk($data->PER_CORREL)->PER_RUT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('INT_CORREL')); ?>:</b>
	<?php echo CHtml::encode($data->INT_CORREL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BEN_FECHA')); ?>:</b>
	<?php echo CHtml::encode($data->BEN_FECHA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BEN_TIPO')); ?>:</b>
	<?php echo CHtml::encode($data->BEN_TIPO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BEN_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->BEN_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BEN_DESCRIPCION')); ?>:</b>
	<?php echo CHtml::encode($data->BEN_DESCRIPCION); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('BEN_MONTO')); ?>:</b>
	<?php echo CHtml::encode($data->BEN_MONTO); ?>
	<br /><br>

</div>