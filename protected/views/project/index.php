<?php
/* @var $this ProjectController */
/* @var $dataProvider CActiveDataProvider */

if($_GET['status']=='main'){
  $this->breadcrumbs=array(
	'Projects',);
}
else if($_GET['status']=='request'){
  $this->breadcrumbs=array(
      'Employee List'=>array('/personalinfo/index','data'=>'','type'=>'main','status'=>''),
      $_GET['name'],
      'Projects',
  );
}

$this->menu=array(
	array('label'=>'Create Project', 'url'=>array('create')),
	array('label'=>'Manage Project', 'url'=>array('admin')),
);
?>

<h1>Projects</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
