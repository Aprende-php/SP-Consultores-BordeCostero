<?php
/* @var $this PresupuestoController */
/* @var $model Presupuesto */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <?php echo $form->textFieldControlGroup($model,'PRE_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'ITE_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'PRO_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textAreaControlGroup($model,'PRE_DESCRIPCION',array('rows'=>6)); ?>
    <?php echo $form->textFieldControlGroup($model,'PRE_MONTO',array('maxlength'=>12)); ?>

    <div class="form-actions">
        <?php echo BsHtml::submitButton('Search',  array('color' => BsHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

<?php $this->endWidget(); ?>
