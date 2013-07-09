<?php
/* @var $this JobController */
/* @var $model Job */

$this->breadcrumbs=array(
	'Job Types'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Job', 'url'=>array('index')),
    array('label'=>'View Members', 'url'=>array('/personalinfo','data'=>$model->ID, 'type'=>'job','status'=>$model->position_name)),
//	array('label'=>'Create Job', 'url'=>array('create')),
	array('label'=>'Update Job', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Job', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Job', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->position_name; ?> Position</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'position_name',
		'salary',
	),
)); ?>
