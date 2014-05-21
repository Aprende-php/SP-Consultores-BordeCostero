<?php
/* @var $this InstitucionController */
/* @var $data Institucion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('INT_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->INT_CORREL),array('view','id'=>$data->INT_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('INT_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->INT_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('INT_DESCRIPCION')); ?>:</b>
	<?php echo CHtml::encode($data->INT_DESCRIPCION); ?>
	<br />


</div>