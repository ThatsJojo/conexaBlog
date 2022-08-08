<?php

class TermController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Term'),
		));
	}

	public function actionCreate() {
		$model = new Term;


		if (isset($_POST['Term'])) {
			$model->setAttributes($_POST['Term']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->term_id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Term');


		if (isset($_POST['Term'])) {
			$model->setAttributes($_POST['Term']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->term_id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Term')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Term');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Term('search');
		$model->unsetAttributes();

		if (isset($_GET['Term']))
			$model->setAttributes($_GET['Term']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}