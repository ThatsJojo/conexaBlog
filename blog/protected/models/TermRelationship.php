<?php

Yii::import('application.models._base.BaseTermRelationship');

class TermRelationship extends BaseTermRelationship
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}