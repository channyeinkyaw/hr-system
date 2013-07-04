<?php
/* @var $this PersonalinfoController */
/* @var $model Personalinfo */

$this->breadcrumbs=array(
	'Personalinfos'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Personalinfo', 'url'=>array('index')),
	array('label'=>'Create Personalinfo', 'url'=>array('create')),
	array('label'=>'View Personalinfo', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Personalinfo', 'url'=>array('admin')),
);
?>

<h1>Update Personalinfo <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>