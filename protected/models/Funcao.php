<?php

/**
 * This is the model class for table "funcao".
 *
 * The followings are the available columns in table 'funcao':
 * @property integer $id
 * @property integer $id_militar
 * @property integer $id_funcoes
 * @property string $data_inicio
 * @property string $data_fim
 *
 * The followings are the available model relations:
 * @property Militar $idMilitar
 * @property Funcoes $idFuncoes
 */
class Funcao extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'funcao';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, id_militar, id_funcoes, data_inicio, data_fim', 'required'),
			array('id, id_militar, id_funcoes', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_militar, id_funcoes, data_inicio, data_fim', 'safe', 'on'=>'search'),
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
			'idMilitar' => array(self::BELONGS_TO, 'Militar', 'id_militar'),
			'idFuncoes' => array(self::BELONGS_TO, 'Funcoes', 'id_funcoes'),
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
			'id_funcoes' => 'Id Funcoes',
			'data_inicio' => 'Data Inicio',
			'data_fim' => 'Data Fim',
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
		$criteria->compare('id_funcoes',$this->id_funcoes);
		$criteria->compare('data_inicio',$this->data_inicio,true);
		$criteria->compare('data_fim',$this->data_fim,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function searchFuncao($id_militar)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('id_militar',$id_militar);
		$criteria->compare('id_funcoes',$this->id_funcoes);
		$criteria->compare('data_inicio',$this->data_inicio,true);
		$criteria->compare('data_fim',$this->data_fim,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Funcao the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
