<?php

class SiteoptionController extends GxController {

	public function filters()
	{
		return array(
			'accessControl',
		);
	}

	public function accessRules()
	{
		return array(
			array(
				'allow',
				'actions' => array('view','index','create','update','delete','admin'),
				'expression' => 'Yii::app()->user->getState("isAdmin")',
			),
			array(
				'deny',
				'users' => array('*'),
			),
		);
	}


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Siteoption'),
		));
	}

	public function actionCreate() {
		$model = new Siteoption;


		if (isset($_POST['Siteoption'])) {
			$model->setAttributes($_POST['Siteoption']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->option_key));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Siteoption');


		if (isset($_POST['Siteoption'])) {
			$model->setAttributes($_POST['Siteoption']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->option_key));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Siteoption')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Siteoption');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Siteoption('search');
		$model->unsetAttributes();

		if (isset($_GET['Siteoption']))
			$model->setAttributes($_GET['Siteoption']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}