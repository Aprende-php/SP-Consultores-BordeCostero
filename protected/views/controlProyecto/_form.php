<?php
/* @var $this ControlProyectoController */
/* @var $model ControlProyecto */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'id'=>'control-proyecto-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>
    <?php echo $form->textAreaControlGroup($model,'CON_DESCRIPCION',array('rows'=>6)); ?>
    <?php echo $form->textAreaControlGroup($model,'CON_RECOMENDACION',array('rows'=>6)); ?>
    <?php echo $form->dropDownListControlGroup($model, 'CON_ESTADO', array(
    'Proyecto en marcha','Proyecto vendido','Proyecto finalizado'), array(
    'empty' => 'Estado del proyecto','class' => BsHtml::INPUT_SIZE_SM));?>
    <?php echo $form->dateField($model,'CON_FECHA_CONTROL'); ?>
    <?php echo BsHtml::submitButton('Aceptar', array('color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>

<?php $this->endWidget(); ?>
