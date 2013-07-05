<?php
/* @var $this PersonalinfoController */
/* @var $model Personalinfo */

$this->breadcrumbs=array(
	'Employee List'=>array('index','dept_id'=>''),
	$model->first_name,
);

$this->menu=array(
//	array('label'=>'List Personalinfo', 'url'=>array('index')),
//	array('label'=>'Create Personalinfo', 'url'=>array('create')),
    array('label'=>'View Education', 'url'=>array('/Education','id'=>$model->educ_id,'name'=>$model->first_name)),
    array('label'=>'View Project History', 'url'=>array('')),
    array('label'=>'View Career History', 'url'=>array('')),
	array('label'=>'Update Personal Info', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Personal Info', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage Personalinfo', 'url'=>array('admin')),
);
?>

<h1>Information of <?php echo ucfirst($model->first_name).' '.ucfirst($model->last_name); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
//		'ID',
		'first_name',
		'last_name',
		'birthday',
		'address',
		'mobile_no',
		'email',
//		'dept_id',
//		'educ_id',
//		'job_id',
	),
)); ?>
