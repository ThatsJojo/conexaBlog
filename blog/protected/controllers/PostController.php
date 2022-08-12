<?php

class PostController extends GxController
{

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
				'actions' => array('view', 'index'),
				'users' => array('*'),
			),
			array(
				'allow',
				'actions' => array('create', 'update', 'delete', 'admin'),
				'expression' => 'Yii::app()->user->getState("isAdmin")',
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
			'model' => $this->loadModel($id, 'Post'),
		));
	}

	public function actionCreate()
	{
		$model = new Post;


		if (isset($_POST['Post'])) {
			$model->setAttributes($_POST['Post']);
			if ($model->save()) {

				// Salvando categorias
				$termIds = $_POST['termRelationships'] ?? false;
				if ($termIds) {
					foreach ($termIds as $termId) {
						$termRelation = new TermRelationship();
						$termRelation->setAttributes(array('term_id' => $termId, 'post_id' => $model->post_id, 'relation_type' => 'category', 'relation_level' => 'secondary'));
						$termRelation->save();
					}
				}

				// Salvando imagem
				if (isset($_FILES['image'])){
					$model->defineImage($_FILES['image']);
				}

				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->post_id));
			}
		}

		$this->render('create', array('model' => $model));
	}

	public function actionUpdate($id)
	{
		$model = $this->loadModel($id, 'Post');


		if (isset($_POST['Post'])) {
			$model->setAttributes($_POST['Post']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->post_id));
			}
		}

		$this->render('update', array(
			'model' => $model,
		));
	}

	public function actionDelete($id)
	{
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Post')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex()
	{
		$dataProvider = new CActiveDataProvider('Post');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin()
	{
		$model = new Post('search');
		$model->unsetAttributes();

		if (isset($_GET['Post']))
			$model->setAttributes($_GET['Post']);

		$this->render('admin', array(
			'model' => $model,
		));
	}
}
