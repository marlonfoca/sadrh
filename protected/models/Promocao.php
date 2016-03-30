<?php

/**
 * This is the model class for table "promocao".
 *
 * The followings are the available columns in table 'promocao':
 * @property integer $id
 * @property integer $id_militar
 * @property integer $id_posto
 * @property string $data
 *
 * The followings are the available model relations:
 * @property Posto $idPosto
 * @property Militar $idMilitar
 */
class Promocao extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'promocao';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, id_militar, id_posto, data', 'required'),
			array('id, id_militar, id_posto', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_militar, id_posto, data', 'safe', 'on'=>'search'),
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
			'idPosto' => array(self::BELONGS_TO, 'Posto', 'id_posto'),
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
			//'id_posto' => 'Id Posto',
			'id_posto' => 'Posto<br>Graduação',
			'data' => 'Data',
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
		$criteria->compare('id_posto',$this->id_posto);
		$criteria->compare('data',$this->data,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function searchPromocao($id_usuario)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('id_militar',$id_usuario);
		$criteria->compare('id_posto',$this->id_posto);
		$criteria->compare('data',$this->data,true);
		$criteria->with=array('idPosto','idMilitar');
		$criteria->together;

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Promocao the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	protected function afterFind() {

        $this->data = Func::converteDataFromMysql($this->data);

        return parent::afterFind();
    }
}
