<?php
/* @var $this StandardHourController */
/* @var $model StandardHour */

$this->breadcrumbs=array(
	'Standard Hours'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StandardHour', 'url'=>array('index')),
	array('label'=>'Manage StandardHour', 'url'=>array('admin')),
);
?>

<h1>Create StandardHour</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>