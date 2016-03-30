<?php

/**
 * This is the model class for table "usuarios".
 *
 * The followings are the available columns in table 'usuarios':
 * @property string $id
 * @property string $cod_pessoal
 * @property integer $antig
 * @property string $pt_gd
 * @property string $especialidade
 * @property string $nomeguerra
 * @property string $nome
 * @property string $secao
 * @property string $ramal
 * @property string $nivel
 * @property string $SENHA
 * @property string $idt
 * @property string $visits
 */
class Usuarios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('antig', 'numerical', 'integerOnly'=>true),
			array('cod_pessoal', 'length', 'max'=>10),
			array('pt_gd', 'length', 'max'=>3),
			array('especialidade, secao', 'length', 'max'=>15),
			array('nomeguerra, SENHA', 'length', 'max'=>20),
			array('nome', 'length', 'max'=>60),
			array('ramal', 'length', 'max'=>6),
			array('nivel', 'length', 'max'=>2),
			array('idt', 'length', 'max'=>7),
			array('visits', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, cod_pessoal, antig, pt_gd, especialidade, nomeguerra, nome, secao, ramal, nivel, SENHA, idt, visits', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'cod_pessoal' => 'Cod Pessoal',
			'antig' => 'Antig',
			'pt_gd' => 'Pt Gd',
			'especialidade' => 'Especialidade',
			'nomeguerra' => 'Nomeguerra',
			'nome' => 'Nome',
			'secao' => 'Secao',
			'ramal' => 'Ramal',
			'nivel' => 'Nivel',
			'SENHA' => 'Senha',
			'idt' => 'Idt',
			'visits' => 'Visitas',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('cod_pessoal',$this->cod_pessoal,true);
		$criteria->compare('antig',$this->antig);
		$criteria->compare('pt_gd',$this->pt_gd,true);
		$criteria->compare('especialidade',$this->especialidade,true);
		$criteria->compare('nomeguerra',$this->nomeguerra,true);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('secao',$this->secao,true);
		$criteria->compare('ramal',$this->ramal,true);
		$criteria->compare('nivel',$this->nivel,true);
		$criteria->compare('SENHA',$this->SENHA,true);
		$criteria->compare('idt',$this->idt,true);
		$criteria->compare('visits',$this->visits,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuarios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
