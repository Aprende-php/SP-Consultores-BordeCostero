<?php
/* @var $this ModeloDeNegociosController */
/* @var $model ModeloDeNegocios */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <?php echo $form->textFieldControlGroup($model,'MOD_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'PRO_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textAreaControlGroup($model,'MOD_SOCIO_CLAVE',array('rows'=>6)); ?>
    <?php echo $form->textAreaControlGroup($model,'MOD_ACTIVIDAD',array('rows'=>6)); ?>
    <?php echo $form->textAreaControlGroup($model,'MOD_RECURSOS',array('rows'=>6)); ?>
    <?php echo $form->textAreaControlGroup($model,'MOD_PROPUESTA',array('rows'=>6)); ?>
    <?php echo $form->textAreaControlGroup($model,'MOD_REL_CLIENTE',array('rows'=>6)); ?>
    <?php echo $form->textAreaControlGroup($model,'MOD_CANALES',array('rows'=>6)); ?>
    <?php echo $form->textAreaControlGroup($model,'MOD_SEGMENTO_CLIENTE',array('rows'=>6)); ?>
    <?php echo $form->textAreaControlGroup($model,'MOD_COSTOS',array('rows'=>6)); ?>
    <?php echo $form->textAreaControlGroup($model,'MOD_INGRESO',array('rows'=>6)); ?>
    <?php echo $form->textFieldControlGroup($model,'MOD_VIGENCIA'); ?>

    <div class="form-actions">
        <?php echo BsHtml::submitButton('Search',  array('color' => BsHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

<?php $this->endWidget(); ?>
