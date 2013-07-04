<?php
/* @var $this PersonalinfoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Personal-info',
);

$this->menu=array(
    
	array('label'=>'Create Personal Info', 'url'=>array('create')),
//	array('label'=>'Manage Personal Info', 'url'=>array('admin')),
);
?>

<h1>Personal Information</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
