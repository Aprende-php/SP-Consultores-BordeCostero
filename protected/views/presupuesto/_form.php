<?php
/* @var $this PresupuestoController */
/* @var $model Presupuesto */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'id'=>'presupuesto-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Los atributos con <span class="required">*</span> son nesesarios.</p>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->dropDownListControlGroup($model,'ITE_CORREL',CHtml::listData(Item::model()->findAll(),'ITE_CORREL','ITE_NOMBRE'), array(
    'empty' => 'Tipos de item'
)); ?>
    <?php echo $form->textAreaControlGroup($model,'PRE_DESCRIPCION',array('rows'=>6)); ?>
    <?php echo $form->textFieldControlGroup($model,'PRE_MONTO',array('maxlength'=>12)); ?>

    <?php echo BsHtml::submitButton('Agregar Item', array('color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>

<?php $this->endWidget(); ?>
