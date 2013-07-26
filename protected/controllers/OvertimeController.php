<?php

class OvertimeController extends Controller
{
	
    public function actionIndex()
    {
        echo "index";
    }
    
    public function actionPage($alias)
    {
        echo "Page is $alias.";
    }
    public function actionTest()
    {
        //echo $this->createUrl('website/page', 'alias' => 'about');
        //echo $this->createAbsoluteUrl('website/page', 'alias' => 'test');
    }
}
