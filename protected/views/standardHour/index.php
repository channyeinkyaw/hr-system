<?php
/* @var $this StandardHourController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Standard Hours',
);

$this->menu=array(
	array('label'=>'Create StandardHour', 'url'=>array('create')),
	array('label'=>'Manage StandardHour', 'url'=>array('admin')),
);
?>

<h1>Standard Hours</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
