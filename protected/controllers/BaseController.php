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
		parent::init();
		Yii::app()->getClientScript()->coreScriptPosition = CClientScript::POS_END;
		Yii::app()->getClientScript()->defaultScriptPosition = CClientScript::POS_END;
		Yii::app()->getClientScript()->defaultScriptFilePosition = CClientScript::POS_END;
		Yii::app()->clientScript->scriptMap['jquery.js'] = false;
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