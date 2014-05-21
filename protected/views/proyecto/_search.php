<?php
/* @var $this ProyectoController */
/* @var $model Proyecto */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <?php echo $form->textFieldControlGroup($model,'PRO_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'INT_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'PRO_FECHA'); ?>
    <?php echo $form->textAreaControlGroup($model,'PRO_NOMBRE',array('rows'=>6)); ?>
    <?php echo $form->textAreaControlGroup($model,'PRO_DESCRIPCION',array('rows'=>6)); ?>
    <?php echo $form->textFieldControlGroup($model,'PRO_MONTO',array('maxlength'=>12)); ?>

    <div class="form-actions">
        <?php echo BsHtml::submitButton('Buscar',  array('color' => BsHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

<?php $this->endWidget(); ?>
