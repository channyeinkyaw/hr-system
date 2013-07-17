<?php
/* @var $this ProjectController */
/* @var $data Project */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID,'name'=>$data->project_name)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_name')); ?>:</b>
	<?php echo CHtml::encode($data->project_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_description')); ?>:</b>
	<?php echo CHtml::encode($data->pro_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('leader_name')); ?>:</b>
	<?php echo CHtml::encode($data->leader_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deadline')); ?>:</b>
	<?php echo CHtml::encode($data->deadline); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dept_name')); ?>:</b>
	<?php echo CHtml::encode($data->dept_name); ?>
	<br />

</div>