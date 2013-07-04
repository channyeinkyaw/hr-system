<?php
/* @var $this PersonalinfoController */
/* @var $model Personalinfo */

$this->breadcrumbs=array(
	'Personalinfos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Personalinfo', 'url'=>array('index')),
	array('label'=>'Manage Personalinfo', 'url'=>array('admin')),
);
?>

<h1>Create Personalinfo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>