<?php
/* @var $this PersonaInfoController */
/* @var $model PersonaInfo */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <?php echo $form->textFieldControlGroup($model,'PER_INFO_CORREL',array('maxlength'=>45)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'COM_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_NOMBRES',array('maxlength'=>20)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_PATERNO',array('maxlength'=>15)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_MATERNO',array('maxlength'=>15)); ?>
    <?php echo $form->textAreaControlGroup($model,'PER_DIRECCION',array('rows'=>6)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_LATITUD',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_LONGITUD',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_TELEFONO',array('maxlength'=>45)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_VIGENCIA'); ?>

    <div class="form-actions">
        <?php echo BsHtml::submitButton('Search',  array('color' => BsHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

<?php $this->endWidget(); ?>
