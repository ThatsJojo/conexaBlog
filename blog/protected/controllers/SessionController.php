<?php

class SessionController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Session'),
		));
	}

	public function actionCreate() {
		$model = new Session;


		if (isset($_POST['Session'])) {
			$model->setAttributes($_POST['Session']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->session_id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Session');


		if (isset($_POST['Session'])) {
			$model->setAttributes($_POST['Session']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->session_id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Session')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Session');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Session('search');
		$model->unsetAttributes();

		if (isset($_GET['Session']))
			$model->setAttributes($_GET['Session']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}