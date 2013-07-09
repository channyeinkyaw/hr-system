<?php
/* @var $this EducationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    'Employee List'=>array('/personalinfo/index','data'=>'','type'=>'main','status'=>''),
    $_GET['name'],
	'Educations',
);

$this->menu=array(
	array('label'=>'Create Education', 'url'=>array('create')),
	array('label'=>'Manage Education', 'url'=>array('admin')),
);
?>

<h1>Educations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
