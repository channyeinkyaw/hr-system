<?php
/* @var $this PersonalinfoController */
/* @var $model Personalinfo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'personalinfo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'first_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'last_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'birthday'); ?>
		<?php //echo $form->textField($model,'birthday').'&nbsp'.'Ex: Year-Month-Date(2000-01-01)'; 

        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $model,
            'attribute' => 'birthday',
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
		<?php echo $form->error($model,'birthday'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textArea($model,'address',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobile_no'); ?>
		<?php echo $form->textField($model,'mobile_no',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'mobile_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dept_id'); ?>
		<?php //echo $form->textField($model,'dept_id')); 
               echo $form->dropDownList($model,'dept_id',
               CHtml::listData(Department::model()->findAll(array('order'=>'dept_name ASC')),'ID', 'dept_name')
               ,array('empty'=>'--please select--'));
        ?>
		<?php echo $form->error($model,'dept_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'educ_id'); ?>
		<?php //echo $form->textField($model,'educ_id'); 
              echo $form->dropDownList($model,'educ_id',
              CHtml::listData(Education::model()->findAll(array('order'=>'educ_name ASC')),'ID', 'educ_name')
              ,array('empty'=>'--please select--'));
        ?>
		<?php echo $form->error($model,'educ_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'job_id'); ?>
		<?php //echo $form->textField($model,'job_id'); 
              echo $form->dropDownList($model,'job_id',
              CHtml::listData(Job::model()->findAll(array('order'=>'position_name ASC')),'ID', 'position_name')
              ,array('empty'=>'--please select--'));
        ?>
		<?php echo $form->error($model,'job_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->