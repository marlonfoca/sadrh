<?php

/**
 * This is the model class for table "militar".
 *
 * The followings are the available columns in table 'militar':
 * @property integer $id
 * @property integer $saram
 * @property integer $id_posto
 * @property integer $id_quadro
 * @property integer $id_especialidade
 * @property string $nome_completo
 * @property string $nome_guerra
 * @property string $foto
 * @property integer $antiguidade
 * @property string $nascimento
 * @property integer $naturalidade
 * @property integer $uf_naturalidade
 * @property integer $estado_civil
 * @property string $identidade
 * @property integer $cpf
 * @property integer $rc_ra
 * @property integer $pasep
 * @property integer $sexo
 * @property integer $tipo_sanguineo
 * @property integer $carteira_motorista
 * @property string $cat_hab
 * @property integer $titulo_eleitoral
 * @property integer $secao_eleitoral
 * @property integer $zona_eleitoral
 * @property integer $comportamento
 * @property integer $om
 * @property integer $divisao
 * @property integer $subdivisao
 * @property integer $secao
 * @property integer $subsecao
 * @property string $data_inclusao
 * @property string $data_alteracao
 * @property string $data_apres_om
 * @property string $data_praca
 *
 * The followings are the available model relations:
 * @property Engajamento[] $engajamentos
 * @property Ferias[] $feriases
 * @property Medalha[] $medalhas
 * @property Subdivisao $subdivisao0
 * @property Secao $secao0
 * @property Subsecao $subsecao0
 * @property Posto $idPosto
 * @property Quadro $idQuadro
 * @property Especialidade $idEspecialidade
 * @property Estado $ufNaturalidade
 * @property Cidade $naturalidade0
 * @property Sexo $sexo0
 * @property Sangue $tipoSanguineo
 * @property Om $om0
 * @property Divisao $divisao0
 * @property Promocao[] $promocaos
 */
class Militar extends CActiveRecord
{

	public $siglaPosto;
	public $siglaQuadro;
	public $nomeEspecialidade;

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'militar';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('saram, id_posto, id_quadro, id_especialidade, nome_completo, nome_guerra, nascimento, uf_naturalidade, naturalidade, identidade, cpf, sexo, om, divisao, subdivisao, secao, subsecao, tipo_sanguineo, comportamento, data_apres_om, data_praca', 'required'),
			array('saram, antiguidade, naturalidade, uf_naturalidade, estado_civil, rc_ra, pasep, sexo, tipo_sanguineo, carteira_motorista, titulo_eleitoral, secao_eleitoral, zona_eleitoral, comportamento, om, divisao, subdivisao, secao, subsecao', 'numerical', 'integerOnly'=>true),
			array('nome_completo, nome_guerra, foto', 'length', 'max'=>300),
			array('identidade', 'length', 'max'=>50),
			array('cat_hab', 'length', 'max'=>2),
			array('saram', 'length', 'max'=>7),
			array('nascimento, data_apres_om, data_praca', 'safe'),
			array('nascimento, data_apres_om, data_praca', 'date', 'format' => array('yyyy-MM-dd'), 'on' => 'create', 'message' => 'data invalida'),
			array('nascimento, data_apres_om, data_praca', 'date', 'format' => array('dd/MM/yyyy'), 'allowEmpty' => true, 'on' => 'create'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('siglaPosto, siglaQuadro, nomeEspecialidade, id, saram, id_posto, id_quadro, id_especialidade, nome_completo, nome_guerra, foto, antiguidade, nascimento, naturalidade, uf_naturalidade, estado_civil, identidade, cpf, rc_ra, pasep, sexo, tipo_sanguineo, carteira_motorista, cat_hab, titulo_eleitoral, secao_eleitoral, zona_eleitoral, comportamento, om, divisao, subdivisao, secao, subsecao, data_inclusao, data_alteracao, data_apres_om, data_praca', 'safe', 'on'=>'search'),
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
			'engajamentos' => array(self::HAS_MANY, 'Engajamento', 'id_militar'),
			'feriases' => array(self::HAS_MANY, 'Ferias', 'id_militar'),
			'medalhas' => array(self::HAS_MANY, 'Medalha', 'id_militar'),
			'subdivisao0' => array(self::BELONGS_TO, 'Subdivisao', 'subdivisao'),
			'secao0' => array(self::BELONGS_TO, 'Secao', 'secao'),
			'subsecao0' => array(self::BELONGS_TO, 'Subsecao', 'subsecao'),
			'idPosto' => array(self::BELONGS_TO, 'Posto', 'id_posto'),
			'idQuadro' => array(self::BELONGS_TO, 'Quadro', 'id_quadro'),
			'idEspecialidade' => array(self::BELONGS_TO, 'Especialidade', 'id_especialidade'),
			'ufNaturalidade' => array(self::BELONGS_TO, 'Estado', 'uf_naturalidade'),
			'naturalidade0' => array(self::BELONGS_TO, 'Cidade', 'naturalidade'),
			'sexo0' => array(self::BELONGS_TO, 'Sexo', 'sexo'),
			'tipoSanguineo' => array(self::BELONGS_TO, 'Sangue', 'tipo_sanguineo'),
			'om0' => array(self::BELONGS_TO, 'Om', 'om'),
			'divisao0' => array(self::BELONGS_TO, 'Divisao', 'divisao'),
			'promocaos' => array(self::HAS_MANY, 'Promocao', 'id_militar'),
			'estadoCivil' => array(self::BELONGS_TO, 'EstadoCivil', 'estado_civil'),
			'comportamento0' => array(self::BELONGS_TO, 'Comportamento', 'comportamento'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'saram' => 'Saram',
			'id_posto' => 'Posto<br>Graduação',
			'id_quadro' => 'Quadro',
			'id_especialidade' => 'Especialidade',

			'siglaPosto' => 'Posto<br>Graduação',
			'siglaQuadro' => 'Quadro',
			'nomeEspecialidade' => 'Especialidade',

			'nome_completo' => 'Nome',
			'nome_guerra' => 'Nome Guerra',
			'foto' => 'Foto',
			'antiguidade' => 'Antiguidade',
			'nascimento' => 'Nascimento',
			'naturalidade' => 'Naturalidade',
			'uf_naturalidade' => 'Uf Naturalidade',
			'estado_civil' => 'Estado Civil',
			'estadoCivil.tipo' => 'Estado Civil',
			'identidade' => 'Identidade',
			'cpf' => 'Cpf',
			'rc_ra' => 'Rc/Ra',
			'pasep' => 'Pasep',
			'sexo' => 'Sexo',
			'tipo_sanguineo' => 'Tipo Sanguineo',
			'carteira_motorista' => 'Carteira Motorista',
			'cat_hab' => 'Categoria de Habilitação',
			'titulo_eleitoral' => 'Titulo Eleitoral',
			'secao_eleitoral' => 'Secao Eleitoral',
			'zona_eleitoral' => 'Zona Eleitoral',
			'comportamento' => 'Comportamento',
			'comportamento0.nome' => 'Comportamento',
			'om' => 'OM',
			'divisao' => 'Divisão',
			'subdivisao' => 'Subdivisão',
			'secao' => 'Seção',
			'subsecao' => 'Subseção',
			'data_inclusao' => 'Data Inclusão',
			'data_alteracao' => 'Data Alteração',
			'data_apres_om' => 'Data Apres OM',
			'data_praca' => 'Data Praça',




			//'engajamentos' => ,
			//'feriases' => ,
			//'medalhas' => ,
			'subdivisao0.nome' => 'Subdivisão',
			'secao0.nome' => 'Seção',
			'subsecao0.nome' => 'Subseção',
			'idPosto.nome' => 'Posto/Graduação',
			'idQuadro.sigla' => 'Quadro',
			'idEspecialidade.nome' => 'Especialidade',
			'idEspecialidade.sigla' => 'Sigla',
			'ufNaturalidade.nome' => 'UF Naturalidade',
			'naturalidade0.nome' => 'Naturalidade',
			'sexo0.nome' => 'Sexo',
			'tipoSanguineo.nome' => 'Tipo Sanguineo',
			'om0.sigla' => 'OM',
			'divisao0.nome' => 'Divisão',
			//'promocaos' => ,
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
		$criteria->compare('saram',$this->saram);
		$criteria->compare('id_posto',$this->id_posto);
		$criteria->compare('id_quadro',$this->id_quadro);
		$criteria->compare('id_especialidade',$this->id_especialidade);
		$criteria->compare('nome_completo',$this->nome_completo,true);
		$criteria->compare('nome_guerra',$this->nome_guerra,true);
		$criteria->compare('foto',$this->foto,true);
		$criteria->compare('antiguidade',$this->antiguidade);
		$criteria->compare('nascimento',$this->nascimento,true);
		$criteria->compare('naturalidade',$this->naturalidade);
		$criteria->compare('uf_naturalidade',$this->uf_naturalidade);
		$criteria->compare('estado_civil',$this->estado_civil);
		$criteria->compare('identidade',$this->identidade,true);
		$criteria->compare('cpf',$this->cpf);
		$criteria->compare('rc_ra',$this->rc_ra);
		$criteria->compare('pasep',$this->pasep);
		$criteria->compare('sexo',$this->sexo);
		$criteria->compare('tipo_sanguineo',$this->tipo_sanguineo);
		$criteria->compare('carteira_motorista',$this->carteira_motorista);
		$criteria->compare('cat_hab',$this->cat_hab,true);
		$criteria->compare('titulo_eleitoral',$this->titulo_eleitoral);
		$criteria->compare('secao_eleitoral',$this->secao_eleitoral);
		$criteria->compare('zona_eleitoral',$this->zona_eleitoral);
		$criteria->compare('comportamento',$this->comportamento);
		$criteria->compare('om',$this->om);
		$criteria->compare('divisao',$this->divisao);
		$criteria->compare('subdivisao',$this->subdivisao);
		$criteria->compare('secao',$this->secao);
		$criteria->compare('subsecao',$this->subsecao);
		$criteria->compare('data_inclusao',$this->data_inclusao,true);
		$criteria->compare('data_alteracao',$this->data_alteracao,true);
		$criteria->compare('data_apres_om',$this->data_apres_om,true);
		$criteria->compare('data_praca',$this->data_praca,true);

		//$criteria->order = "id_posto ASC";

		//$criteria->with=array('idPosto');
		//$criteria->together;

		//$criteria->compare('idPosto.nome',$this->nomePosto, true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>array(
                'defaultOrder'=>'id_posto ASC, nome_guerra ASC'),
			'pagination' => array(
                'pageSize' => 25,
            ),
		));
	}

	public function searchIndex()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('saram',$this->saram);
		
		$criteria->compare('id_posto',$this->id_posto);
		$criteria->compare('id_quadro',$this->id_quadro);
		$criteria->compare('id_especialidade',$this->id_especialidade);

		$criteria->compare('nome_completo',$this->nome_completo,true);
		$criteria->compare('nome_guerra',$this->nome_guerra,true);
		
		$criteria->with=array('idPosto','idQuadro', 'idEspecialidade');
		//$criteria->together;

		$criteria->compare('idPosto.sigla',$this->siglaPosto, true);
		$criteria->compare('idQuadro.sigla',$this->siglaQuadro, true);
		$criteria->compare('idEspecialidade.nome',$this->nomeEspecialidade, true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>array(
				'attributes'=>array(
					'siglaPosto'=>array(
						'asc'=>'idPosto.sigla',
						'desc'=>'idPosto.sigla DESC',
						),
					'siglaQuadro'=>array(
						'asc'=>'idQuadro.sigla',
						'desc'=>'idQuadro.sigla DESC',
						),
					'nomeEspecialidade'=>array(
						'asc'=>'idEspecialidade.nome',
						'desc'=>'idEspecialidade.nome DESC',
						),
					'*',
					),
                'defaultOrder'=>'id_posto ASC, nome_guerra ASC'),
			'pagination' => array(
                'pageSize' => 20,
            ),
		));
	}

	public function searchFerias()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		//$criteria->compare('id',$this->id);
		$criteria->compare('saram',$this->saram);
		$criteria->compare('id_posto',$this->id_posto);
		$criteria->compare('id_quadro',$this->id_quadro);
		$criteria->compare('id_especialidade',$this->id_especialidade);
		$criteria->compare('nome_completo',$this->nome_completo,true);
		$criteria->compare('nome_guerra',$this->nome_guerra,true);
		$criteria->compare('foto',$this->foto,true);
		$criteria->compare('antiguidade',$this->antiguidade);
		$criteria->compare('nascimento',$this->nascimento,true);
		$criteria->compare('naturalidade',$this->naturalidade);
		$criteria->compare('uf_naturalidade',$this->uf_naturalidade);
		$criteria->compare('estado_civil',$this->estado_civil);
		$criteria->compare('identidade',$this->identidade,true);
		$criteria->compare('cpf',$this->cpf);
		$criteria->compare('rc_ra',$this->rc_ra);
		$criteria->compare('pasep',$this->pasep);
		$criteria->compare('sexo',$this->sexo);
		$criteria->compare('tipo_sanguineo',$this->tipo_sanguineo);
		$criteria->compare('carteira_motorista',$this->carteira_motorista);
		$criteria->compare('cat_hab',$this->cat_hab,true);
		$criteria->compare('titulo_eleitoral',$this->titulo_eleitoral);
		$criteria->compare('secao_eleitoral',$this->secao_eleitoral);
		$criteria->compare('zona_eleitoral',$this->zona_eleitoral);
		$criteria->compare('comportamento',$this->comportamento);
		$criteria->compare('om',$this->om);
		$criteria->compare('divisao',$this->divisao);
		$criteria->compare('subdivisao',$this->subdivisao);
		$criteria->compare('secao',$this->secao);
		$criteria->compare('subsecao',$this->subsecao);
		$criteria->compare('data_inclusao',$this->data_inclusao,true);
		$criteria->compare('data_alteracao',$this->data_alteracao,true);
		$criteria->compare('data_apres_om',$this->data_apres_om,true);
		$criteria->compare('data_praca',$this->data_praca,true);

		$criteria->with=array('feriases');
		$criteria->together;

		//$criteria->order='feriases.ferias_fim DESC';

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>array(
                'defaultOrder'=>'t.ferias_fim DESC',
            ),
            'pagination' => array(
                'pageSize' => 100,
            ),
		));
	}
public function searchPromocao()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		//$criteria->compare('id',$this->id);
		$criteria->compare('saram',$this->saram);
		$criteria->compare('id_posto',$this->id_posto);
		$criteria->compare('id_quadro',$this->id_quadro);
		$criteria->compare('id_especialidade',$this->id_especialidade);
		$criteria->compare('nome_completo',$this->nome_completo,true);
		$criteria->compare('nome_guerra',$this->nome_guerra,true);
		$criteria->compare('foto',$this->foto,true);
		$criteria->compare('antiguidade',$this->antiguidade);
		$criteria->compare('nascimento',$this->nascimento,true);
		$criteria->compare('naturalidade',$this->naturalidade);
		$criteria->compare('uf_naturalidade',$this->uf_naturalidade);
		$criteria->compare('estado_civil',$this->estado_civil);
		$criteria->compare('identidade',$this->identidade,true);
		$criteria->compare('cpf',$this->cpf);
		$criteria->compare('rc_ra',$this->rc_ra);
		$criteria->compare('pasep',$this->pasep);
		$criteria->compare('sexo',$this->sexo);
		$criteria->compare('tipo_sanguineo',$this->tipo_sanguineo);
		$criteria->compare('carteira_motorista',$this->carteira_motorista);
		$criteria->compare('cat_hab',$this->cat_hab,true);
		$criteria->compare('titulo_eleitoral',$this->titulo_eleitoral);
		$criteria->compare('secao_eleitoral',$this->secao_eleitoral);
		$criteria->compare('zona_eleitoral',$this->zona_eleitoral);
		$criteria->compare('comportamento',$this->comportamento);
		$criteria->compare('om',$this->om);
		$criteria->compare('divisao',$this->divisao);
		$criteria->compare('subdivisao',$this->subdivisao);
		$criteria->compare('secao',$this->secao);
		$criteria->compare('subsecao',$this->subsecao);
		$criteria->compare('data_inclusao',$this->data_inclusao,true);
		$criteria->compare('data_alteracao',$this->data_alteracao,true);
		$criteria->compare('data_apres_om',$this->data_apres_om,true);
		$criteria->compare('data_praca',$this->data_praca,true);

		$criteria->with=array('promocaos');
		$criteria->together;

		//$criteria->order='feriases.ferias_fim DESC';

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			//'sort'=>array(
            //    'defaultOrder'=>'t.ferias_fim DESC',
            //),
            'pagination' => array(
                'pageSize' => 100,
            ),
		));
	}

    public function getMenuPosto(){
    		$lista=Posto::model()->findAll(array('order' => 'ordem ASC'), 'id','nome');
    		return CHtml::listData($lista, 'id', 'nome');
    }

    public function getMenuQuadro(){
    		$lista=Quadro::model()->findAll();
    		return CHtml::listData($lista, 'id', 'sigla');
    }

    public function getMenuEspecialidade(){
    		$lista=Especialidade::model()->findAll(array('order' => 'nome ASC'));
    		return CHtml::listData($lista, 'id', 'concatened');
    }

    public function getMenuEstados(){
    		$estados=Estado::model()->findAll();
    		return CHtml::listData($estados, 'id', 'nome');
    }

    public function getMenuCidades($id_estado){
    		$cidades=Cidade::model()->findAll('estado='.$id_estado);
    		return CHtml::listData($cidades, 'id', 'nome');
    }

    public function getMenuEstadoCivil(){
    		$estadoCivil=EstadoCivil::model()->findAll();
    		return CHtml::listData($estadoCivil, 'id', 'tipo');
    }

    public function getSexo(){
    		$sexo=Sexo::model()->findAll();
    		return CHtml::listData($sexo, 'id', 'nome');
    }

    public function getSangue(){
    		$sangue=Sangue::model()->findAll();
    		return CHtml::listData($sangue, 'id', 'nome');
    }

    public function getComportamento(){
    		$comp=Comportamento::model()->findAll();
    		return CHtml::listData($comp, 'id', 'nome');
    }

    public function getOm(){
    		$om=Om::model()->findAll();
    		return CHtml::listData($om, 'id', 'nome');
    }

    public function getDivisao(){
    		$divisao=Divisao::model()->findAll();
    		return CHtml::listData($divisao, 'id', 'nome');
    }

    public function getSubDivisao(){
    		$subdivisao=Subdivisao::model()->findAll();
    		return CHtml::listData($subdivisao, 'id', 'nome');
    }

    public function getSecao(){
    		$secao=Secao::model()->findAll();
    		return CHtml::listData($secao, 'id', 'nome');
    }

    public function getSubSecao(){
    		$subsecao=Subsecao::model()->findAll();
    		return CHtml::listData($subsecao, 'id', 'nome');
    }


	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Militar the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	protected function beforeSave() {

        $this->nascimento = Func::converteDataToMysql($this->nascimento);
        $this->data_apres_om = Func::converteDataToMysql($this->data_apres_om);
        $this->data_praca = Func::converteDataToMysql($this->data_praca);
        $this->cpf = Func::limpaCPF_CNPJ($this->cpf);
        $this->data_inclusao = date("Y-m-d H:i:s");
        $this->saram = Func::limpaCPF_CNPJ($this->saram);
		$this->resp_alteracao = Yii::app()->user->id;


        return parent::beforeSave();
    }

    protected function afterFind() {

        $this->nascimento = Func::converteDataFromMysql($this->nascimento);
        $this->data_apres_om = Func::converteDataFromMysql($this->data_apres_om);
        $this->data_praca = Func::converteDataFromMysql($this->data_praca);
        
        $this->data_inclusao = Func::converteDateTimeFromMysql($this->data_inclusao);
        $this->data_alteracao = Func::converteDateTimeFromMysql($this->data_alteracao);

        $this->cpf = Func::mask($this->cpf,'###.###.###-##');
        //$this->saram = Func::mask($this->saram,'######-#');

        return parent::afterFind();
    }

}