<?php

Yii::import('application.models._base.BasePostmeta');

class Postmeta extends BasePostmeta
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}