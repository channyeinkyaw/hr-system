<?php
/* @var $this WorkingHourController */
/* @var $model WorkingHour */

$this->breadcrumbs=array(
	'Working Hours'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List WorkingHour', 'url'=>array('index')),
	array('label'=>'Create WorkingHour', 'url'=>array('create')),
	array('label'=>'View WorkingHour', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage WorkingHour', 'url'=>array('admin')),
);
?>

<h1>Update WorkingHour <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>