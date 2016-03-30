<?php

/**
 * This is the model class for table "ferias".
 *
 * The followings are the available columns in table 'ferias':
 * @property integer $id
 * @property string $aquisitivo_inicio
 * @property string $aquisitivo_fim
 * @property string $concessivo_inicio
 * @property string $concessivo_fim
 * @property string $ferias_inicio
 * @property string $ferias_fim
 * @property integer $n_dias
 * @property integer $tipo
 * @property integer $id_militar
 * @property integer $publicado
 *
 * The followings are the available model relations:
 * @property Militar $idMilitar
 * @property TipoFerias $tipo0
 */
class Ferias extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ferias';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('aquisitivo_inicio, aquisitivo_fim, concessivo_inicio, concessivo_fim, ferias_inicio, ferias_fim, n_dias, tipo, id_militar', 'required'),
			array('n_dias, tipo, id_militar, publicado', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, aquisitivo_inicio, aquisitivo_fim, concessivo_inicio, concessivo_fim, ferias_inicio, ferias_fim, n_dias, tipo, id_militar, publicado', 'safe', 'on'=>'search'),
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
			'publicado0' => array(self::BELONGS_TO, 'Simnao', 'publicado'),
			'idMilitar' => array(self::BELONGS_TO, 'Militar', 'id_militar'),
			'tipo0' => array(self::BELONGS_TO, 'TipoFerias', 'tipo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'aquisitivo_inicio' => 'Aquisitivo Inicio',
			'aquisitivo_fim' => 'Aquisitivo Fim',
			'concessivo_inicio' => 'Concessivo<br>Inicio',
			'concessivo_fim' => 'Concessivo<br>Fim',
			'ferias_inicio' => 'Ferias<br>Inicio',
			'ferias_fim' => 'Ferias<br>Fim',
			'n_dias' => 'N Dias',
			'tipo' => 'Tipo',
			'id_militar' => 'Id Militar',
			'publicado' => 'Publicado',
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
		$criteria->compare('aquisitivo_inicio',$this->aquisitivo_inicio,true);
		$criteria->compare('aquisitivo_fim',$this->aquisitivo_fim,true);
		$criteria->compare('concessivo_inicio',$this->concessivo_inicio,true);
		$criteria->compare('concessivo_fim',$this->concessivo_fim,true);
		$criteria->compare('ferias_inicio',$this->ferias_inicio,true);
		$criteria->compare('ferias_fim',$this->ferias_fim,true);
		$criteria->compare('n_dias',$this->n_dias);
		$criteria->compare('tipo',$this->tipo);
		$criteria->compare('id_militar',$this->id_militar);
		$criteria->compare('publicado',$this->publicado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function searchFerias($id_militar)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('aquisitivo_inicio',$this->aquisitivo_inicio,true);
		$criteria->compare('aquisitivo_fim',$this->aquisitivo_fim,true);
		$criteria->compare('concessivo_inicio',$this->concessivo_inicio,true);
		$criteria->compare('concessivo_fim',$this->concessivo_fim,true);
		$criteria->compare('ferias_inicio',$this->ferias_inicio,true);
		$criteria->compare('ferias_fim',$this->ferias_fim,true);
		$criteria->compare('n_dias',$this->n_dias);
		$criteria->compare('tipo',$this->tipo);
		$criteria->compare('id_militar',$id_militar);
		$criteria->compare('publicado',$this->publicado);

		$criteria->with=array('tipo0', 'publicado0');
		$criteria->together;

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination' => array(
            					'pageSize' => 50,
            ),
            'sort'=>array(
                'defaultOrder'=>'t.ferias_fim DESC',
            )
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ferias the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	protected function afterFind() {

        $this->aquisitivo_inicio = Func::converteDataFromMysql($this->aquisitivo_inicio);
        $this->aquisitivo_fim = Func::converteDataFromMysql($this->aquisitivo_fim);
        $this->concessivo_inicio = Func::converteDataFromMysql($this->concessivo_inicio);
        $this->concessivo_fim = Func::converteDataFromMysql($this->concessivo_fim);
        $this->ferias_inicio = Func::converteDataFromMysql($this->ferias_inicio);
        $this->ferias_fim = Func::converteDataFromMysql($this->ferias_fim);
        //$this->publicado = Func::conveteSimNao($this->publicado);
        return parent::afterFind();
    }

   protected function beforeSave(){

        $this->aquisitivo_inicio = Func::converteDataToMysql($this->aquisitivo_inicio);
        $this->aquisitivo_fim = Func::converteDataToMysql($this->aquisitivo_fim);
        $this->concessivo_inicio = Func::converteDataToMysql($this->concessivo_inicio);
        $this->concessivo_fim = Func::converteDataToMysql($this->concessivo_fim);
        $this->ferias_inicio = Func::converteDataToMysql($this->ferias_inicio);
        $this->ferias_fim = Func::converteDataToMysql($this->ferias_fim);

	    return parent::beforeSave();
	}
}
