<?php
/* @var $this StandardHourController */
/* @var $data StandardHour */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('std_start')); ?>:</b>
	<?php echo CHtml::encode($data->std_start); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('std_end')); ?>:</b>
	<?php echo CHtml::encode($data->std_end); ?>
	<br />

</div>