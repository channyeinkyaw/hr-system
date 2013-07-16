<?php
/* @var $this ProjectController */
/* @var $model Project */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'project-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'project_name'); ?>
		<?php echo $form->textField($model,'project_name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'project_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pro_description'); ?>
		<?php echo $form->textArea($model,'pro_description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'pro_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'leader_name'); ?>
		<?php echo $form->textField($model,'leader_name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'leader_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deadline'); ?>
		<?php //echo $form->textField($model,'deadline'); 
          $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $model,
            'attribute' => 'deadline',
            'language' => 'en',
            'options' => array(
                'showOn' => 'both',             // also opens with a button
                'dateFormat' => 'yy-mm-dd',     // format of "2012-12-25"
                'showOtherMonths' => true,      // show dates in other months
                'selectOtherMonths' => true,    // can seelect dates in other months
                'changeYear' => true,           // can change year
                'changeMonth' => true,          // can change month
                'yearRange' => '1900:2099',     // range of year
                'minDate' => '1900-01-01',      // minimum date
                'maxDate' => '2099-12-31',      // maximum date
                'showButtonPanel' => true,      // show button panel
            ),
            'htmlOptions' => array(
                'size' => '10',
                'maxlength' => '10',
            ),
        ));
        ?>
		<?php echo $form->error($model,'deadline'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dept_name'); ?>
		<?php //echo $form->textField($model,'dept_id');  
               echo $form->dropDownList($model,'dept_name',
               CHtml::listData(Department::model()->findAll(array('order'=>'dept_name ASC')),'dept_name', 'dept_name')
               ,array('empty'=>'--please select--'));
        ?>
		<?php echo $form->error($model,'dept_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->