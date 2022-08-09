<?php

Yii::import('application.models._base.BasePost');

class Post extends BasePost
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	// public static function getPosts($className=__CLASS__){
	// 	return parent::model($className=__CLASS__)->with('postmetas','postAuthor','termRelationships')->findAll();
	// }
}