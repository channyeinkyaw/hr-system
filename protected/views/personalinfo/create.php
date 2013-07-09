<?php
/* @var $this PersonalinfoController */
/* @var $model Personalinfo */

$this->breadcrumbs=array(
	'Employee List'=>array('index','data'=>'','type'=>'main','status'=>''),
	'Create',
);

$this->menu=array(
	array('label'=>'Employee List', 'url'=>array('index','data'=>'','type'=>'main','status'=>'')),
	array('label'=>'Manage Personalinfo', 'url'=>array('admin')),
);
?>

<h1>Create New Employee</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>