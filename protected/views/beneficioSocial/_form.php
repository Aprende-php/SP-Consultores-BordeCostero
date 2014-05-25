<?php
/* @var $this BeneficioSocialController */
/* @var $model BeneficioSocial */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'id'=>'beneficio-social-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->textFieldControlGroup($model,'PER_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->dropDownListControlGroup($model,'INT_CORREL',CHtml::listData(Institucion::model()->findAll(),'INT_CORREL','INT_NOMBRE'), array('empty' => 'Escoja una Institución')); ?>
    <?php echo " Fecha Beneficio"?>
    <?php echo $form->dateField($model,'BEN_FECHA'); ?>
    <?php echo $form->textFieldControlGroup($model,'BEN_TIPO',array('maxlength'=>11)); ?>
    <?php echo $form->textAreaControlGroup($model,'BEN_NOMBRE',array('rows'=>6)); ?>
    <?php echo $form->textAreaControlGroup($model,'BEN_DESCRIPCION',array('rows'=>6)); ?>
    <?php echo $form->numberField($model,'BEN_MONTO',array('maxlength'=>12,'min'=>0)); ?>

    <?php echo BsHtml::submitButton('Aceptar', array('color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>

<?php $this->endWidget(); ?>
