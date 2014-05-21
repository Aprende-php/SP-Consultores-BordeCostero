<?php
/* @var $this ModeloDeNegociosController */
/* @var $model ModeloDeNegocios */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'id'=>'modelo-de-negocios-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Los atributos con <span class="required">*</span> son nesesarios.</p>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->textAreaControlGroup($model,'MOD_SOCIO_CLAVE',array('rows'=>2)); ?>
    <?php echo $form->textAreaControlGroup($model,'MOD_ACTIVIDAD',array('rows'=>2)); ?>
    <?php echo $form->textAreaControlGroup($model,'MOD_RECURSOS',array('rows'=>2)); ?>
    <?php echo $form->textAreaControlGroup($model,'MOD_PROPUESTA',array('rows'=>2)); ?>
    <?php echo $form->textAreaControlGroup($model,'MOD_REL_CLIENTE',array('rows'=>2)); ?>
    <?php echo $form->textAreaControlGroup($model,'MOD_CANALES',array('rows'=>2)); ?>
    <?php echo $form->textAreaControlGroup($model,'MOD_SEGMENTO_CLIENTE',array('rows'=>2)); ?>
    <?php echo $form->textAreaControlGroup($model,'MOD_COSTOS',array('rows'=>2)); ?>
    <?php echo $form->textAreaControlGroup($model,'MOD_INGRESO',array('rows'=>2)); ?>

    <?php echo BsHtml::submitButton('Submit', array('color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>

<?php $this->endWidget(); ?>
