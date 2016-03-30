<?php

/**
 * This is the model class for table "endereco".
 *
 * The followings are the available columns in table 'endereco':
 * @property integer $id
 * @property integer $id_uf
 * @property integer $id_cidade
 * @property string $bairro
 * @property integer $id_tipo
 * @property string $logradouro
 * @property string $numero
 * @property string $complemento
 * @property string $cep
 * @property integer $id_militar
 * @property string $data_criacao
 * @property integer $resp_alteracao
 * @property string $data_alteracao
 *
 * The followings are the available model relations:
 * @property Estado $idUf
 * @property Cidade $idCidade
 * @property Militar $idMilitar
 * @property EnderecoTipo $idTipo
 */
class Endereco extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'endereco';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('data_criacao, resp_alteracao, data_alteracao', 'required'),
			array('id_uf, id_cidade, id_tipo, id_militar, resp_alteracao', 'numerical', 'integerOnly'=>true),
			array('bairro, numero, complemento, cep', 'length', 'max'=>50),
			array('logradouro', 'length', 'max'=>300),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_uf, id_cidade, bairro, id_tipo, logradouro, numero, complemento, cep, id_militar, data_criacao, resp_alteracao, data_alteracao', 'safe', 'on'=>'search'),
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
			'idUf' => array(self::BELONGS_TO, 'Estado', 'id_uf'),
			'idCidade' => array(self::BELONGS_TO, 'Cidade', 'id_cidade'),
			'idMilitar' => array(self::BELONGS_TO, 'Militar', 'id_militar'),
			'idTipo' => array(self::BELONGS_TO, 'EnderecoTipo', 'id_tipo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_uf' => 'Id Uf',
			'id_cidade' => 'Id Cidade',
			'bairro' => 'Bairro',
			'id_tipo' => 'Id Tipo',
			'logradouro' => 'Logradouro',
			'numero' => 'Numero',
			'complemento' => 'Complemento',
			'cep' => 'Cep',
			'id_militar' => 'Id Militar',
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
		$criteria->compare('id_uf',$this->id_uf);
		$criteria->compare('id_cidade',$this->id_cidade);
		$criteria->compare('bairro',$this->bairro,true);
		$criteria->compare('id_tipo',$this->id_tipo);
		$criteria->compare('logradouro',$this->logradouro,true);
		$criteria->compare('numero',$this->numero,true);
		$criteria->compare('complemento',$this->complemento,true);
		$criteria->compare('cep',$this->cep,true);
		$criteria->compare('id_militar',$this->id_militar);
		$criteria->compare('data_criacao',$this->data_criacao,true);
		$criteria->compare('resp_alteracao',$this->resp_alteracao);
		$criteria->compare('data_alteracao',$this->data_alteracao,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function searchEndereco($id_militar)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('id_uf',$this->id_uf);
		$criteria->compare('id_cidade',$this->id_cidade);
		$criteria->compare('bairro',$this->bairro,true);
		$criteria->compare('id_tipo',$this->id_tipo);
		$criteria->compare('logradouro',$this->logradouro,true);
		$criteria->compare('numero',$this->numero,true);
		$criteria->compare('complemento',$this->complemento,true);
		$criteria->compare('cep',$this->cep,true);
		$criteria->compare('id_militar',$id_militar);
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
	 * @return Endereco the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
