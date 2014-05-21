<?php
/* @var $this MunicipioController */
/* @var $model Municipio */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <?php echo $form->textFieldControlGroup($model,'MUN_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'COM_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'MUN_NOMBRE',array('maxlength'=>45)); ?>
    <?php echo $form->textFieldControlGroup($model,'MUN_RUT',array('maxlength'=>45)); ?>
    <?php echo $form->textFieldControlGroup($model,'MUN_CONTACTO',array('maxlength'=>45)); ?>
    <?php echo $form->textFieldControlGroup($model,'MUN_VIGENCIA'); ?>

    <div class="form-actions">
        <?php echo BsHtml::submitButton('Buscar',  array('color' => BsHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

<?php $this->endWidget(); ?>
