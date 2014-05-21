<?php
/* @var $this MunicipioController */
/* @var $model Municipio */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'id'=>'municipio-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Los a campos con <span class="required">*</span> son requeridos.</p>

    <?php echo $form->errorSummary($model); ?>
    <?php echo $form->dropDownListControlGroup($model,'COM_CORREL',CHtml::listData(Comuna::model()->findAll(),'COM_CORREL','COM_NOMBRE'), array('empty' => 'Elija una Comuna')); ?>
    <?php echo $form->textFieldControlGroup($model,'MUN_NOMBRE',array('maxlength'=>45)); ?>
    <?php echo $form->textFieldControlGroup($model,'MUN_RUT',array('maxlength'=>45)); ?>
    <?php echo $form->textFieldControlGroup($model,'MUN_CONTACTO',array('maxlength'=>45)); ?>

    <?php echo BsHtml::submitButton('Agregar Municipio', array('color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>

<?php $this->endWidget(); ?>
