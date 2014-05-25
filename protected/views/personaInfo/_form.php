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
    'enableAjaxValidation'=>true,
)); ?>

    <p class="help-block">Los campos con <span class="required">*</span> son requeridos.</p>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->textFieldControlGroup(Persona::model()->findByPk($model->PER_CORREL),'PER_RUT', array('disabled' => true));?>
    <?php echo $form->dropDownListControlGroup($model,'COM_CORREL',CHtml::listData(Comuna::model()->findAll(),'COM_CORREL','COM_NOMBRE'), array('empty' => 'Escoja la Comuna')); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_NOMBRES',array('maxlength'=>20)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_PATERNO',array('maxlength'=>15)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_MATERNO',array('maxlength'=>15)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_TELEFONO',array('maxlength'=>45)); ?>
    <?php echo $form->textAreaControlGroup($model,'PER_DIRECCION',array('rows'=>6)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_LATITUD',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_LONGITUD',array('maxlength'=>10)); ?>

    <?php echo BsHtml::submitButton('Guardar', array('color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>

<?php $this->endWidget(); ?>
