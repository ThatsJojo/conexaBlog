<?php

class CommentController extends GxController
{

	public static $commentDefaultStatus = 'published';

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
				'actions' => array('index', 'create', 'update', 'delete', 'admin', 'view'),
				'expression' => 'Yii::app()->user->getState("isAdmin")',
			),
			array(
				'allow',
				'actions' => array('create', 'view'),
				'expression' => 'Yii::app()->user->getState("isViwer")',
			),
			array(
				'deny',
				'users' => array('*'),
			),
		);
	}



	public function actionView($id)
	{
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Comment'),
		));
	}

	public function actionCreate()
	{
		$model = new Comment;


		if (isset($_POST['Comment'])) {
			$model->setAttributes($_POST['Comment']);
			$model->comment_status = self::$commentDefaultStatus;

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect($_SERVER['HTTP_REFERER']);
			}
		}

		$this->render('create', array('model' => $model));
	}

	public function actionUpdate($id)
	{
		$model = $this->loadModel($id, 'Comment');


		if (isset($_POST['Comment'])) {
			$model->setAttributes($_POST['Comment']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->comment_id));
			}
		}

		$this->render('update', array(
			'model' => $model,
		));
	}

	public function actionDelete($id)
	{
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Comment')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex()
	{
		$dataProvider = new CActiveDataProvider('Comment');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin()
	{
		$model = new Comment('search');
		$model->unsetAttributes();

		if (isset($_GET['Comment']))
			$model->setAttributes($_GET['Comment']);

		$this->render('admin', array(
			'model' => $model,
		));
	}
}
