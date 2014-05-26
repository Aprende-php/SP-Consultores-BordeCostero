<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'id'=>'beneficio-social-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation'=>false,
)); ?>
    

    <p class="help-block">Campos con <span class="required">*</span> son obligatorios.</p>

    <?php echo $form->errorSummary($model); ?>
    <?php echo $form->textFieldControlGroup(Persona::model()->findByPk($model->PER_CORREL), 'PER_RUT', array('disabled' => true));?>
    <?php echo $form->dropDownListControlGroup($model,'INT_CORREL',CHtml::listData(Institucion::model()->findAll(),'INT_CORREL','INT_NOMBRE'), array('empty' => 'Escoja una Institución')); ?>
    <label>Fecha Beneficio</label>
    <?php echo $form->dateField($model,'BEN_FECHA'); ?>
    <?php echo $form->textFieldControlGroup($model,'BEN_TIPO',array('maxlength'=>11)); ?>
    <?php echo $form->textAreaControlGroup($model,'BEN_NOMBRE',array('rows'=>6)); ?>
    <?php echo $form->textAreaControlGroup($model,'BEN_DESCRIPCION',array('rows'=>6)); ?>
    <?php echo $form->numberField($model,'BEN_MONTO',array('maxlength'=>12,'min'=>0)); ?>

    <?php echo BsHtml::submitButton('Aceptar', array('color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>

<?php $this->endWidget(); ?>
