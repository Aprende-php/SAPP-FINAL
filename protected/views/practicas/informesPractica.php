<?php
$this->beginWidget('bootstrap.widgets.BsPanel', array(
    'title' => 'Informes',
    'type' => BsHtml::PANEL_TYPE_PRIMARY
));
?>
<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'id'=>'informes-pdf',
    "htmlOptions"=>array("enctype"=>"multipart/form-data",),
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'layout' => BsHtml::FORM_LAYOUT_HORIZONTAL,
)); ?>

    <?php echo $form->errorSummary($model); ?>

    <?php echo ($model->PRA_DIRF1=='')?$form->fileFieldControlGroup($model, 'PRA_DIRF1'):"El formulario 1 a sido adjuntado<br>";?>
    <?php echo ($model->PRA_DIRF3=='')?$form->fileFieldControlGroup($model, 'PRA_DIRF3'):"El formulario 3 a sido adjuntado";?>
    <?php echo BsHtml::formActions(array(BsHtml::submitButton('Ingresar', array('color' => BsHtml::BUTTON_COLOR_PRIMARY))));?>

<?php $this->endWidget(); ?>
<?php $this->endWidget(); ?>