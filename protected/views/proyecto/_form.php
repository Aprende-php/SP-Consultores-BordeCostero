<?php
/* @var $this ProyectoController */
/* @var $model Proyecto */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'id'=>'proyecto-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation'=>true,
)); ?>

    <p class="help-block">Los atributos con <span class="required">*</span> son nesesarios.</p>

    <?php echo $form->errorSummary($model); ?>
    <?php echo $form->textFieldControlGroup(Persona::model()->findByPk($model->PER_CORREL), 'PER_RUT', array('disabled' => true));?>
    <?php echo $form->dropDownListControlGroup($model,'INT_CORREL',CHtml::listData(Institucion::model()->findAll(),'INT_CORREL','INT_NOMBRE'), array('empty' => 'Escoja una Institución')); ?>
    <label>Fecha del Proyecto</label>
    <?php echo $form->dateField($model,'PRO_FECHA',array('min'=>'1990-01-01','max'=>date('Y-m-d'))); ?>
    <br>
    <?php echo $form->textAreaControlGroup($model,'PRO_NOMBRE',array('rows'=>1,'placeholder'=>'Agregue el Nombre del Proyecto')); ?>
    <?php echo $form->textAreaControlGroup($model,'PRO_DESCRIPCION',array('rows'=>6,'placeholder'=>'Agregue una breve descripción')); ?>
    <?php echo $form->textFieldControlGroup($model,'PRO_MONTO',array('maxlength'=>12,'min'=>0,'required'=>'')); ?>
    <br>
    <?php echo BsHtml::submitButton('Guardar', array('color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>

<?php $this->endWidget(); ?>
