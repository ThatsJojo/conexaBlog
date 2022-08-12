<?php

Yii::import('application.models._base.BaseComment');

class Comment extends BaseComment
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function getFormatedCommentDate(){
		return (new DateTime($this->comment_date))->format('d/m/Y, G:i:s');
	}
}