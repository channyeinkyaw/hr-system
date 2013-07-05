<?php
/* @var $this PersonalinfoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Employee List',
);

$this->menu=array(
    
	array('label'=>'Create New Employee', 'url'=>array('create')),
//	array('label'=>'Manage Personal Info', 'url'=>array('admin')),
);
?>

<h1>Employee List</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
