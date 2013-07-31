<?php
/* @var $this SiteController */

//$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'Overtime',
);
?>
<h1>Overtime</h1>

<?php
//    $users = Yii::app()->db->createCommand()
//    ->select('*')
//    ->from('working_hour')
//    ->queryAll();
//echo "<pre>"; 
//var_dump($users);
//echo "</pre>";
//
//echo CHtml::link(CHtml::encode($users->ID));
//    echo "<pre>";
//    print_r (Yii::app()->db);
//    echo "</pre>";

$rawData = Yii::app()->db->createCommand()
    ->select('*')
    ->from('working_hour')
    ->queryAll();
$dataProvider=new CArrayDataProvider($rawData
//, array(
//'sort'=>array(
//'attributes'=>array(
//'working_date' => 'working_date',
//),
//),
//
//'pagination'=>array(
//'pageSize'=>10,
//),
//
//)
);

$this->widget('zii.widgets.grid.CGridView', array(

'dataProvider'=>$dataProvider,
//    'columns'=>array('ID','working_date'),
//    'htmlOptions'=>array('width'=>'10px'),
    'columns'=>array(
    array(
'name'  => 'ID',
'header'=> 'ID',
'value' => $data['ID'],
'htmlOptions'=>array('width'=>'10px')),
array(
'name'  => 'working_date',
'header'=> 'Working Date',
'value' => $data['working_date'],
'htmlOptions'=>array('width'=>'10px')),
)

));


?>