<?php
/* @var $this ItemController */
/* @var $data Item */
?>

<div class="view">
<table class="table">
	<thead>
		<th><?php echo CHtml::encode($data->getAttributeLabel('ITE_CORREL')); ?></th>
		<th><?php echo CHtml::encode($data->getAttributeLabel('ITE_NOMBRE')); ?></th>
	</thead>
	<tbody>
		<td><?php echo CHtml::link(CHtml::encode($data->ITE_CORREL),array('view','id'=>$data->ITE_CORREL)); ?></td>
		<th><?php echo CHtml::encode($data->ITE_NOMBRE); ?></th>
	</tbody>
</table>
</div>