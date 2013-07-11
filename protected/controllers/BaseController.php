<?php

class BaseController extends Controller
{

	/**
	 * Default layout
	 * @var string
	 */
	public $layout='//layouts/basic';
	
	/**
	 * This should be used to do stuff before the controller gets initialized
	 */
	public function init()
	{
		
	}
	
	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		$this->layout='//layouts/error';
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest) {
				echo $error['message'];
			} 
			else {
				if ($error['code'] == '404') {
					$this->render('error404', $error);
				}
				else {					
					$this->render('error', $error);
				}
			}
		}
	}
}