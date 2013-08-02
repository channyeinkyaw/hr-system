<?php

  class OvertimeController extends Controller
  {

      
      public function actionGridView(){
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
        $this->render('site/pages/overtime.php', array('dataProvider'  => $dataProvider));
      }
  }