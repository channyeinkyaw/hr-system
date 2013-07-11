<?php
/* @var $this PersonalinfoController */
/* @var $dataProvider CActiveDataProvider */
if($_GET['type']=='job'){
  $this->breadcrumbs=array(
	'Job Types'=>array('/job'),
);
}
else if($_GET['type']=='dept'){
  $this->breadcrumbs=array(
	'Departments'=>array('/department'),
);
}
else{
  $this->breadcrumbs=array(
	'Employee Lists',
);
}

$this->menu=array(
    
	array('label'=>'Create New Employee', 'url'=>array('create')),
//	array('label'=>'Manage Personal Info', 'url'=>array('admin')),
);
?>
<?php
if($_GET['type']=='job'){
  echo '<h1>Employee Lists of '.$_GET['status'].'</h1>';
}
else if($_GET['type']=='dept'){
  echo '<h1>Employee Lists of '.$_GET['status'].'</h1>';
}
else{
  echo '<h1>Employee Lists</h1>';
}
?>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>