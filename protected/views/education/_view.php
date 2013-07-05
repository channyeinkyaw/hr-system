<?php
/* @var $this EducationController */
/* @var $data Education */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('educ_name')); ?>:</b>
	<?php echo CHtml::encode($data->educ_name); ?>
	<br />


</div>