<?php
/* @var $this ControlProyectoController */
/* @var $model ControlProyecto */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <?php echo $form->textFieldControlGroup($model,'CON_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'PRO_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textAreaControlGroup($model,'CON_DESCRIPCION',array('rows'=>6)); ?>
    <?php echo $form->textAreaControlGroup($model,'CON_RECOMENDACION',array('rows'=>6)); ?>
    <?php echo $form->textFieldControlGroup($model,'CON_ESTADO',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'CON_FECHA_CONTROL'); ?>

    <div class="form-actions">
        <?php echo BsHtml::submitButton('Search',  array('color' => BsHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

<?php $this->endWidget(); ?>
