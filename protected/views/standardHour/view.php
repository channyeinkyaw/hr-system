<?php
/* @var $this StandardHourController */
/* @var $model StandardHour */

$this->breadcrumbs=array(
	'Standard Hours'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List StandardHour', 'url'=>array('index')),
	array('label'=>'Create StandardHour', 'url'=>array('create')),
	array('label'=>'Update StandardHour', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete StandardHour', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StandardHour', 'url'=>array('admin')),
);
?>

<h1>View StandardHour #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'std_start',
		'std_end',
	),
)); ?>
