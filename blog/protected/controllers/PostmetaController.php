<?php

class PostmetaController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Postmeta'),
		));
	}

	public function actionCreate() {
		$model = new Postmeta;


		if (isset($_POST['Postmeta'])) {
			$model->setAttributes($_POST['Postmeta']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->postmeta_id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Postmeta');


		if (isset($_POST['Postmeta'])) {
			$model->setAttributes($_POST['Postmeta']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->postmeta_id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Postmeta')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Postmeta');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Postmeta('search');
		$model->unsetAttributes();

		if (isset($_GET['Postmeta']))
			$model->setAttributes($_GET['Postmeta']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}