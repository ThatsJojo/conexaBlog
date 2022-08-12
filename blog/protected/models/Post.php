<?php

Yii::import('application.models._base.BasePost');

class Post extends BasePost
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function defineImage($img){
		$ext = strtolower(substr($img['name'],-4)); //Pegando extensão do arquivo
    	$new_name = $this->post_id.date("Y.m.d-H.i.s") . '.'.$ext; //Definindo um novo nome para o arquivo
    	$dir = './images/posts/'; //Diretório para uploads 
    	move_uploaded_file($img['tmp_name'], $dir.$new_name); //Fazer upload do arquivo

		$postMeta = new Postmeta();
		$postMeta->setAttributes(array('post_id'=>$this->post_id, 'meta_key'=>'img','meta_value'=>$new_name));
		$postMeta->save();
	}

	public function getFormatedPostDate(){
		return (new DateTime($this->post_date))->format('d/m/Y, G:i:s');
	}
}