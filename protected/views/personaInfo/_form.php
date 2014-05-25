<?php
/* @var $this PersonaInfoController */
/* @var $model PersonaInfo */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'id'=>'persona-info-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->textFieldControlGroup($model,'PER_INFO_CORREL',array('maxlength'=>45)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'COM_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_NOMBRES',array('maxlength'=>20)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_PATERNO',array('maxlength'=>15)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_MATERNO',array('maxlength'=>15)); ?>
    <?php echo $form->textAreaControlGroup($model,'PER_DIRECCION',array('rows'=>6)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_LATITUD',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_LONGITUD',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_TELEFONO',array('maxlength'=>45)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_VIGENCIA'); ?>

    <?php echo BsHtml::submitButton('Submit', array('color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>

<?php $this->endWidget(); ?>
