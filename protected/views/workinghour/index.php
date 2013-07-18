<?php
/* @var $this WorkingHourController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Working Hours',
);

$this->menu=array(
	array('label'=>'Create WorkingHour', 'url'=>array('create')),
	array('label'=>'Manage WorkingHour', 'url'=>array('admin')),
);
?>

<h1>Working Hours</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
