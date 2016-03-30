<?php

/**
 * This is the model class for table "subsecao".
 *
 * The followings are the available columns in table 'subsecao':
 * @property integer $id
 * @property string $nome
 * @property string $sigla
 * @property integer $id_secao
 *
 * The followings are the available model relations:
 * @property Militar[] $militars
 * @property Secao $idSecao
 */
class Subsecao extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'subsecao';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, sigla, id_secao', 'required'),
			array('id_secao', 'numerical', 'integerOnly'=>true),
			array('nome', 'length', 'max'=>300),
			array('sigla', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nome, sigla, id_secao', 'safe', 'on'=>'search'),
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
			'militars' => array(self::HAS_MANY, 'Militar', 'subsecao'),
			'idSecao' => array(self::BELONGS_TO, 'Secao', 'id_secao'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nome' => 'Nome',
			'sigla' => 'Sigla',
			'id_secao' => 'Id Secao',
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
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('sigla',$this->sigla,true);
		$criteria->compare('id_secao',$this->id_secao);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Subsecao the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
