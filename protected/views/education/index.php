<?php
/* @var $this EducationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    'Personal-info'=>array('/personalinfo/index','dept_id'=>''),
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
