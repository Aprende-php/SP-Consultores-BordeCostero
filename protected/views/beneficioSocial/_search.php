<?php
/* @var $this BeneficioSocialController */
/* @var $model BeneficioSocial */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <?php echo $form->textFieldControlGroup($model,'BEN_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'INT_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'BEN_FECHA'); ?>
    <?php echo $form->textFieldControlGroup($model,'BEN_TIPO',array('maxlength'=>11)); ?>
    <?php echo $form->textAreaControlGroup($model,'BEN_NOMBRE',array('maxlength'=>100)); ?>
    <?php echo $form->textAreaControlGroup($model,'BEN_DESCRIPCION',array('rows'=>6)); ?>
    <?php echo $form->textFieldControlGroup($model,'BEN_MONTO',array('maxlength'=>12)); ?>

    <div class="form-actions">
        <?php echo BsHtml::submitButton('Buscar',  array('color' => BsHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

<?php $this->endWidget(); ?>
