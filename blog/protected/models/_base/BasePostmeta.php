<?php

/**
 * This is the model base class for the table "postmeta".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Postmeta".
 *
 * Columns in table "postmeta" available as properties of the model,
 * followed by relations of table "postmeta" available as properties of the model.
 *
 * @property string $postmeta_id
 * @property string $post_id
 * @property string $meta_key
 * @property string $meta_value
 *
 * @property Post $post
 */
abstract class BasePostmeta extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'postmeta';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Postmeta|Postmetas', $n);
	}

	public static function representingColumn() {
		return 'meta_key';
	}

	public function rules() {
		return array(
			array('post_id, meta_key, meta_value', 'required'),
			array('post_id', 'length', 'max'=>20),
			array('meta_key, meta_value', 'length', 'max'=>255),
			array('postmeta_id, post_id, meta_key, meta_value', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'post' => array(self::BELONGS_TO, 'Post', 'post_id'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'postmeta_id' => Yii::t('app', 'Postmeta'),
			'post_id' => null,
			'meta_key' => Yii::t('app', 'Meta Key'),
			'meta_value' => Yii::t('app', 'Meta Value'),
			'post' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('postmeta_id', $this->postmeta_id, true);
		$criteria->compare('post_id', $this->post_id);
		$criteria->compare('meta_key', $this->meta_key, true);
		$criteria->compare('meta_value', $this->meta_value, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}