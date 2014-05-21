<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'USU_ROLE'); ?>
		<?php echo $form->textField($model,'USU_ROLE',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'USU_ROLE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USU_PASSWORD'); ?>
		<?php echo $form->textField($model,'USU_PASSWORD',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'USU_PASSWORD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USU_ESTADO'); ?>
		<?php echo $form->textField($model,'USU_ESTADO',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'USU_ESTADO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->