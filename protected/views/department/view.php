<?php
/* @var $this DepartmentController */
/* @var $model Department */

$this->breadcrumbs=array(
	'Departments'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Department', 'url'=>array('index')),
    array('label'=>'View Members', 'url'=>array('/personalinfo','data'=>$model->ID,'type'=>'dept','status'=>$model->dept_name)),
//	array('label'=>'Create Department', 'url'=>array('create')),
	array('label'=>'Update Department', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Department', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Department', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->dept_name;?> Department</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'dept_name',
		'manager_name',
	),
)); ?>
