<?php
/* @var $this WorkingHourController */
/* @var $model WorkingHour */

$this->breadcrumbs=array(
	'Working Hours'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List WorkingHour', 'url'=>array('index')),
	array('label'=>'Manage WorkingHour', 'url'=>array('admin')),
);
?>

<h1>Create WorkingHour</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>