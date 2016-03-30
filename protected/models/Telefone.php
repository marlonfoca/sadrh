<?php

/**
 * This is the model class for table "telefone".
 *
 * The followings are the available columns in table 'telefone':
 * @property integer $id
 * @property integer $id_militar
 * @property integer $tipo
 * @property integer $numero
 * @property string $data_criacao
 * @property integer $resp_alteracao
 * @property string $data_alteracao
 *
 * The followings are the available model relations:
 * @property TelefoneTipo $tipo0
 * @property Militar $idMilitar
 * @property Militar $respAlteracao
 */
class Telefone extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'telefone';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_militar, tipo, numero, data_criacao, resp_alteracao, data_alteracao', 'required'),
			array('id_militar, tipo, numero, resp_alteracao', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_militar, tipo, numero, data_criacao, resp_alteracao, data_alteracao', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'tipo0' => array(self::BELONGS_TO, 'TelefoneTipo', 'tipo'),
			'idMilitar' => array(self::BELONGS_TO, 'Militar', 'id_militar'),
			'respAlteracao' => array(self::BELONGS_TO, 'Militar', 'resp_alteracao'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_militar' => 'Id Militar',
			'tipo' => 'Tipo',
			'numero' => 'Numero',
			'data_criacao' => 'Data Criacao',
			'resp_alteracao' => 'Resp Alteracao',
			'data_alteracao' => 'Data Alteracao',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('id_militar',$this->id_militar);
		$criteria->compare('tipo',$this->tipo);
		$criteria->compare('numero',$this->numero);
		$criteria->compare('data_criacao',$this->data_criacao,true);
		$criteria->compare('resp_alteracao',$this->resp_alteracao);
		$criteria->compare('data_alteracao',$this->data_alteracao,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function searchTelefone($id_militar)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('id_militar',$id_militar);
		$criteria->compare('tipo',$this->tipo);
		$criteria->compare('numero',$this->numero);
		$criteria->compare('data_criacao',$this->data_criacao,true);
		$criteria->compare('resp_alteracao',$this->resp_alteracao);
		$criteria->compare('data_alteracao',$this->data_alteracao,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Telefone the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
