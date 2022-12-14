<?php

class TermRelationshipController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'TermRelationship'),
		));
	}

	public function actionCreate() {
		$model = new TermRelationship;


		if (isset($_POST['TermRelationship'])) {
			$model->setAttributes($_POST['TermRelationship']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->relation_id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'TermRelationship');


		if (isset($_POST['TermRelationship'])) {
			$model->setAttributes($_POST['TermRelationship']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->relation_id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'TermRelationship')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('TermRelationship');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new TermRelationship('search');
		$model->unsetAttributes();

		if (isset($_GET['TermRelationship']))
			$model->setAttributes($_GET['TermRelationship']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}