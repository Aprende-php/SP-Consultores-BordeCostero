<?php
/* @var $this PersonaController */
/* @var $model Persona */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <?php echo $form->textFieldControlGroup($model,'PER_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_RUT',array('maxlength'=>12)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_NACIMIENTO'); ?>

    <div class="form-actions">
        <?php echo BsHtml::submitButton('Buscar',  array('color' => BsHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

<?php $this->endWidget(); ?>
