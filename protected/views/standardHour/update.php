<?php
/* @var $this StandardHourController */
/* @var $model StandardHour */

$this->breadcrumbs=array(
	'Standard Hours'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List StandardHour', 'url'=>array('index')),
	array('label'=>'Create StandardHour', 'url'=>array('create')),
	array('label'=>'View StandardHour', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage StandardHour', 'url'=>array('admin')),
);
?>

<h1>Update StandardHour <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>