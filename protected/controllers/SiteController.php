<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
        if(!empty($_POST['inputIcon']))
        {
        	$model=new Newsletter;
            $model->email=$_POST['inputIcon'];
            $model->id_newsletter = md5($model->count());
            $model->estat = 1;
            if($model->save(false))
                $this->render('index'); // Normally this would lead you to the detail view, but you should render a success page or you could display a flash-message
        }
		$this->render('index');
	}
	
	public function actionCreate()
	{
		$usr=new Users;
		$client=new Clients;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation(array($usr,$client));
		
		if(isset($_POST['Users'],$_POST['Clients']))
		{
			$usr->attributes=$_POST['Users'];
			$client->attributes=$_POST['Clients'];
			
			$now=new DateTime;
			$md5_pass=md5($usr->password);
			
			if($client->validate())
			{
				$client->nom_complet = $client->nom . ' ' . $client->cognom1 . ' ' . $client->cognom2; 
				if($client->save(false)){
					$usr->id_client = $client->id_client;
					$usr->password = $md5_pass;
					$usr->data_alta = $now->format('Y-m-d');
					$usr->save(false);
					$this->redirect(array('login'));
				}	
			}	
		}

		$this->render('create',array('usr'=>$usr,'client'=>$client));
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$headers="From: {$model->email}\r\nReply-To: {$model->email}";
				mail(Yii::app()->params['adminEmail'],'Pregunta de: '.$model->name,$model->body,$headers);
				Yii::app()->user->setFlash('success','ok');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}
	
	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
			Yii::app()->user->setFlash('loginerror','ok');
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
		/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($models)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='users-form')
		{
			echo CActiveForm::validate($models);
			Yii::app()->end();
		}
	}
}