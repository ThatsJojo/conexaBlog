<?php

Yii::import('application.models._base.BaseUser');

class User extends BaseUser
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function validateLogin(){
		var_dump(parent::model(__CLASS__)->findAll(array('condition'=>'user_login = "'.$this->user_login.'" AND user_pass = "'.$this->user_pass.'"')));
	}

	public function validatePassword($password)
    {
        return CPasswordHelper::verifyPassword($password,$this->user_pass);
    }

	public function hashPassword($password)
    {
        return CPasswordHelper::hashPassword($password);
    }

	public function isAdmin(){
		return $this->usermetas(array('condition'=>'meta_key = "role" AND meta_value = "admin"')) != null;
	}

	public function isViwer(){
		return $this->usermetas(array('condition'=>'meta_key = "role" AND meta_value = "viwer"')) != null;
	}

	public function getImagePath(){
		return Yii::app()->request->baseUrl .'/images/users/'. ($this->usermetas(array('condition'=>'meta_key = "perfilImg"'))[0]->meta_value?? 'default.png');
	}

	protected function beforeSave (){
		$this->user_pass = $this->hashPassword($this->user_pass);
		return parent::beforeSave();
	}

	public static function getAdmins(){
		return User::model()->with('usermetas')->findAll(array('condition'=>'meta_key = "role" AND meta_value = "admin"'));
	}
}