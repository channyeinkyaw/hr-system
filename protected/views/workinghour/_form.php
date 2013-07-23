<?php
/* @var $this WorkingHourController */
/* @var $model WorkingHour */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'working-hour-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'personal_id'); ?>
		<?php 
          if(isset($_GET['id'])){
            echo $form->textField($model,'personal_id',array('value'=>$_GET['id'],'size'=>5,'readonly' => true)); 
          }
          else{
            echo $form->dropDownList($model,'personal_id',
            CHtml::listData(Personalinfo::model()->findAll(array('order'=>'first_name ASC')),'ID','ID', 'first_name')
            ,array('empty'=>'--please select--'));
          }
//            echo $form->textField($model,'personal_id',array('value'=>$_GET['id'],'size'=>5,'readonly' => true)); 
//          echo $form->dropDownList($model,'personal_id',
//          CHtml::listData(Personalinfo::model()->findAll(array('order'=>'first_name ASC')),'ID','ID', 'first_name')
//          ,array('empty'=>'--please select--'));
        ?>
		<?php echo $form->error($model,'personal_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'working_date'); ?>
		<?php //echo $form->textField($model,'working_date'); 
          $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $model,
            'attribute' => 'working_date',
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
                'size' => '15',
                'maxlength' => '10',
            ),
        ));
        ?>
		<?php echo $form->error($model,'working_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'start_time'); ?>
		<?php //echo $form->textField($model,'start_time'); 
//          $this->widget('application.extensions.jui_timepicker.JTimePicker', array(
//          'model'=>$model,
//          'attribute'=>'start_time',
//          // additional javascript options for the date picker plugin
//          'options'=>array('showPeriod'=>true,),
//          'htmlOptions'=>array('size'=>8,'maxlength'=>8 ),
//          ));
        
            /*Yii Extension of EJuiTimePicker*/
            $this->widget( 'ext.EJuiTimePicker.EJuiTimePicker', array(
            'model' => $model, // Your model
            'attribute' => 'start_time', // Attribute for input
            ));
        ?>
		<?php echo $form->error($model,'start_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'end_time'); ?>
		<?php //echo $form->textField($model,'end_time'); 
//          $this->widget('application.extensions.jui_timepicker.JTimePicker', array(
//          'model'=>$model,
//          'attribute'=>'end_time',
//          // additional javascript options for the date picker plugin
//          'options'=>array('showPeriod'=>true,),
//          'htmlOptions'=>array('size'=>8,'maxlength'=>8 ),
//          ));
        
            /*Yii Extension of EJuiTimePicker*/
            $this->widget( 'ext.EJuiTimePicker.EJuiTimePicker', array(
            'model' => $model, // Your model
            'attribute' => 'end_time', // Attribute for input
            ));
        ?>
		<?php echo $form->error($model,'end_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->