<?php
/* @var $this StandardHourController */
/* @var $model StandardHour */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'standard-hour-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'std_start'); ?>
		<?php //echo $form->textField($model,'std_start'); 
            $this->widget( 'ext.EJuiTimePicker.EJuiTimePicker', array(
            'model' => $model, // Your model
            'attribute' => 'std_start', // Attribute for input
            ));
        ?>
		<?php echo $form->error($model,'std_start'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'std_end'); ?>
		<?php //echo $form->textField($model,'std_end'); 
            $this->widget( 'ext.EJuiTimePicker.EJuiTimePicker', array(
            'model' => $model, // Your model
            'attribute' => 'std_end', // Attribute for input
            ));
        ?>
		<?php echo $form->error($model,'std_end'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->