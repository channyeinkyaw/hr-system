<?php
/* @var $this PersonalinfoController */
/* @var $model Personalinfo */

$this->breadcrumbs=array(
	'Employee List'=>array('index','dept_id'=>''),
	'Create',
);

$this->menu=array(
	array('label'=>'List Personalinfo', 'url'=>array('index')),
	array('label'=>'Manage Personalinfo', 'url'=>array('admin')),
);
?>

<h1>Create New Employee</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>