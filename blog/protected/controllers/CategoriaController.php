<?php

class CategoriaController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionView($id)
	{
		$model = Term::model()->findByPk($id);
		$category = $model['term_taxonomy'];
		$categoryRelations = $model->termRelationships(array('condition' => 'relation_type = "category"'));
		$posts = [];
		foreach ($categoryRelations as $categoryRelation) {
			$currentPost = $categoryRelation->post(array('condition' => 'post_status = "published"'));
			if (isset($currentPost))
				$posts[] = $currentPost;
		}

		$this->render('view', array(
			'posts' => $posts,
			'category' => $category,
		));
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}
