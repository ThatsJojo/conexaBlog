<?php

class UsermetaController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Usermeta'),
		));
	}

	public function actionCreate() {
		$model = new Usermeta;


		if (isset($_POST['Usermeta'])) {
			$model->setAttributes($_POST['Usermeta']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->usermeta_id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Usermeta');


		if (isset($_POST['Usermeta'])) {
			$model->setAttributes($_POST['Usermeta']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->usermeta_id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Usermeta')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Usermeta');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Usermeta('search');
		$model->unsetAttributes();

		if (isset($_GET['Usermeta']))
			$model->setAttributes($_GET['Usermeta']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}