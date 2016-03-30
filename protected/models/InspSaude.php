<?php

/**
 * This is the model class for table "insp_saude".
 *
 * The followings are the available columns in table 'insp_saude':
 * @property integer $id
 * @property integer $id_militar
 * @property string $letra
 * @property string $secao
 * @property string $data
 * @property string $boletim
 * @property string $validade
 * @property string $parecer
 *
 * The followings are the available model relations:
 * @property Militar $idMilitar
 */
class InspSaude extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'insp_saude';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, id_militar', 'required'),
			array('id, id_militar', 'numerical', 'integerOnly'=>true),
			array('letra', 'length', 'max'=>3),
			array('secao, boletim', 'length', 'max'=>50),
			array('parecer', 'length', 'max'=>500),
			array('data, validade', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_militar, letra, secao, data, boletim, validade, parecer', 'safe', 'on'=>'search'),
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
			'letra' => 'Letra',
			'secao' => 'Secao',
			'data' => 'Data',
			'boletim' => 'Boletim',
			'validade' => 'Validade',
			'parecer' => 'Parecer',
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
		$criteria->compare('letra',$this->letra,true);
		$criteria->compare('secao',$this->secao,true);
		$criteria->compare('data',$this->data,true);
		$criteria->compare('boletim',$this->boletim,true);
		$criteria->compare('validade',$this->validade,true);
		$criteria->compare('parecer',$this->parecer,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function searchInspSaude($id_militar)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('id_militar',$id_militar);
		$criteria->compare('letra',$this->letra,true);
		$criteria->compare('secao',$this->secao,true);
		$criteria->compare('data',$this->data,true);
		$criteria->compare('boletim',$this->boletim,true);
		$criteria->compare('validade',$this->validade,true);
		$criteria->compare('parecer',$this->parecer,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return InspSaude the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
