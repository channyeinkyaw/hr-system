<?php
/* @var $this StandardHourController */
/* @var $model StandardHour */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID'); ?>
		<?php echo $form->textField($model,'ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'std_start'); ?>
		<?php echo $form->textField($model,'std_start'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'std_end'); ?>
		<?php echo $form->textField($model,'std_end'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->