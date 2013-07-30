<?php
/* @var $this SiteController */

//$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'Overtime',
);
?>
<h1>Overtime</h1>

<?php
    $users = Yii::app()->db->createCommand()
    ->select('*')
    ->from('working_hour')
    ->queryAll();
echo "<pre>"; 
var_dump($users);
echo "</pre>";

echo CHtml::link(CHtml::encode($users->ID));
//    echo "<pre>";
//    print_r (Yii::app()->db);
//    echo "</pre>";
//$users=>ID;
?>