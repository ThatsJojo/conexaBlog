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
			'captcha' => array(
				'class' => 'CCaptchaAction',
				'backColor' => 0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page' => array(
				'class' => 'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		$criteria = new CDbCriteria(array(
			'condition' => 'post_status="published"',
			'order' => 'post_date DESC',
			'with' => 'termRelationships',
		));

		$dataProvider = new CActiveDataProvider('Post', array(
			'pagination' => array(
				'pageSize' => 4,
			),
			'criteria' => $criteria,
		));

		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if ($error = Yii::app()->errorHandler->error) {
			if (Yii::app()->request->isAjaxRequest)
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
		$model = new ContactForm;
		if (isset($_POST['ContactForm'])) {
			$model->attributes = $_POST['ContactForm'];
			if ($model->validate()) {
				$name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
				$subject = '=?UTF-8?B?' . base64_encode($model->subject) . '?=';
				$headers = "From: $name <{$model->email}>\r\n" .
					"Reply-To: {$model->email}\r\n" .
					"MIME-Version: 1.0\r\n" .
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'], $subject, $model->body, $headers);
				Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact', array('model' => $model));
	}

	public function actionLogin()
	{
		$model = new User('login');
		if (isset($_POST['User'])) {
			$model->attributes = $_POST['User'];
			if ($model->validate()) {
				$identity = new UserIdentity($model->user_login, $model->user_pass);
				$identity->authenticate();
				switch ($identity->errorCode) {
					case UserIdentity::ERROR_NONE:
						Yii::app()->user->login($identity);

						$model = User::model()->findByPk(Yii::app()->user->id);
						$isAdmin = $model->isAdmin();
						$isViwer = $model->isViwer();

						Yii::app()->user->setState('isAdmin', $isAdmin);
						Yii::app()->user->setState('isViwer', $isViwer);

						$this->redirect(Yii::app()->user->returnUrl);
						return true;
						break;
					case UserIdentity::ERROR_USERNAME_INVALID:
					case UserIdentity::ERROR_UNKNOWN_IDENTITY:
						$errorMessage = 'Usuário não encontrado!';
						break;
					case UserIdentity::ERROR_PASSWORD_INVALID:
						$errorMessage = 'Senha inválida!';
						break;
				}
			}
		}

		$this->render('login', array('model' => $model, 'errorMessage' => $errorMessage));
	}

	public function actionSignup()
	{
		$model = new User;

		// uncomment the following code to enable ajax-based validation

		if (isset($_POST['ajax']) && $_POST['ajax'] === 'user-signup-form') {
			echo CActiveForm::validate($model);
			Yii::app()->end();
			echo 'zap';
		}


		if (isset($_POST['User'])) {
			$model->attributes = $_POST['User'];
			if ($model->validate()) {
				// form inputs are valid, do something here
				return;
			}
		}
		$this->render('signup', array('model' => $model));
	}




	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}
