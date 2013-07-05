<?php
/* @var $this DepartmentController */
/* @var $data Department */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dept_name')); ?>:</b>
	<?php echo CHtml::encode($data->dept_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('manager_name')); ?>:</b>
	<?php echo CHtml::encode($data->manager_name); ?>
	<br />


</div>