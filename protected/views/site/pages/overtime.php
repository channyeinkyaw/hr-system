<?php
/* @var $this SiteController */

//$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'Overtime',
);
?>
<h1>Overtime</h1>

<?php

$rawData = Yii::app()->db->createCommand()
    ->select('wh.ID, UPPER(pi.first_name) AS Name, 
      wh.working_date AS Date, SEC_TO_TIME(TIME_TO_SEC(wh.end_time) - TIME_TO_SEC(sh.std_end)) AS Overtime')
    ->from('working_hour wh')
    ->join('standard_hour sh','sh.id=1')
    ->join('personal_info pi','pi.ID=wh.personal_id')
    ->order('Overtime')
    //->where('wh.personal_id=2')
    ->queryAll();

$dataProvider=new CArrayDataProvider($rawData, array('pagination'=>array('pageSize'=>10,)));

//'sort'=>array(
//'attributes'=>array(
//'working_date' => 'working_date',
//),
//),
//
//),
//

$this->widget('zii.widgets.grid.CGridView', array('dataProvider'=>$dataProvider,'columns'=>array()));

//    'columns'=>array('ID','working_date'),
//    'htmlOptions'=>array('width'=>'10px'),
//    array(
//'name'  => 'ID',
//'header'=> 'ID',
//'value' => $data['ID'],
//'htmlOptions'=>array('width'=>'10px')),
//array(
//'name'  => 'working_date',
//'header'=> 'Working Date',
//'value' => $data['working_date'],
//'htmlOptions'=>array('width'=>'10px')),
//)
?>