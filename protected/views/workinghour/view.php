<?php
/* @var $this WorkingHourController */
/* @var $model WorkingHour */

$this->breadcrumbs=array(
	'Working Hours'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List WorkingHour', 'url'=>array('index')),
	array('label'=>'Create WorkingHour', 'url'=>array('create')),
	array('label'=>'Update WorkingHour', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete WorkingHour', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage WorkingHour', 'url'=>array('admin')),
);
?>

<h1>View WorkingHour #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'personal_id',
		'working_date',
		'start_time',
		'end_time',
	),
)); ?>
