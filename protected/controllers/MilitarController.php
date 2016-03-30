<?php

class MilitarController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array(),
				'users'=>array('@'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index','view', 'create','update', 
									'TabCreate', 'TabUpdate', 'cidade',
									'divisao', 'subdivisao', 'secao', 'subsecao'
									),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		Yii::log('Mensagem de Informação ', 'info', 'user-activit');

		$model = Militar::model()->with(
										'idPosto', 'idQuadro', 'idEspecialidade',
										'subdivisao0','secao0','subsecao0','ufNaturalidade',
										'naturalidade0','sexo0','tipoSanguineo','om0','divisao0',
										'estadoCivil', 'comportamento0'
									)->findByPk($id);

		$model_ferias = Ferias::model()->searchFerias($id);
		$model_promocao = Promocao::model()->searchPromocao($id);
		$model_engajamento = Engajamento::model()->searchEngajamento($id);
		$model_medalha = Medalha::model()->searchMedalha($id);
		$model_funcao = Funcao::model()->searchFuncao($id);
		$model_insp_saude = InspSaude::model()->searchInspSaude($id);
		$model_endereco = Endereco::model()->searchEndereco($id);
		$model_telefone = Telefone::model()->searchTelefone($id);

		$this->renderPartial('view',array(
			'model'=>$model,
			'model_ferias'=>$model_ferias,
			'model_promocao'=>$model_promocao,
			'model_engajamento'=>$model_engajamento,
			'model_medalha'=>$model_medalha,
			'model_funcao'=>$model_funcao,
			'model_insp_saude'=>$model_insp_saude,
			'model_endereco'=>$model_endereco,
			'model_telefone'=>$model_telefone,			
		),false,true);
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Militar;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Militar']))
		{
			$model->attributes=$_POST['Militar'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Militar']))
		{
			$model->attributes=$_POST['Militar'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	/*
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Militar');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
	*/
	public function actionIndex()
	{

		Yii::log('Mensagem de Informação ', 'info', 'user-activit');

		$model=new Militar('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Militar']))
			$model->attributes=$_GET['Militar'];

		$this->render('_view',array(
			'model'=>$model,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Militar('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Militar']))
			$model->attributes=$_GET['Militar'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Militar the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Militar::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Militar $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='militar-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

    public function actionTabCreate() {
			
			$action = $_GET['action'];

	        $model = new $action;

	        if(isset($_POST[$action])){

				$model->attributes=$_POST[$action];

				if($model->save()){
	            	Yii::app()->user->setFlash('success', "Data saved!");
	            	Yii::app()->end();
				}else{
					Yii::app()->user->setFlash('error', "Data2 failed!");
					sleep(1);
					$this->renderPartial('//'.strtolower($action).'/_form', array('model' => $model), false, true);
	            	Yii::app()->end();
				}
			}else{
				
				$model->id_militar = $_GET['id_militar'];

		        $this->renderPartial('//'.strtolower($action).'/_form', array('model' => $model), false, true);

		        Yii::app()->end();
			}
	}

	public function actionTabUpdate($id = null, $action) {
	        
	        $model = $action::model()->findByPk($id);
	        
	        if ($model === null)
	            throw new CHttpException(404, 'The requested page does not exist.');

	        if(isset($_POST[$action])){

				$model->attributes=$_POST[$action];

				if($model->save())
	            	Yii::app()->user->setFlash('success', "Data saved!");
	            	//$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array($model->id_militar.'#tab2'));
	            	Yii::app()->end();

			}else{

				$this->renderPartial('//'.strtolower($action).'/_form', array('model' => $model), false, true);
		        Yii::app()->end();
			}


	}

	public function actionCidade(){
		
		$lista_cidades=Cidade::model()->findAll('estado=?', array($_POST["Militar"]['uf_naturalidade']));

		echo "<option value=\"\">Selecione</option>";
		
		foreach ($lista_cidades as $data) {
			echo "<option value=\"{$data->id}\">{$data->nome}</option>";
		}
	}

	public function actionDivisao(){
		
		$lista_divisao=Divisao::model()->findAll('id_om=?', array($_POST["Militar"]['om']));

		echo "<option value=\"\">Selecione</option>";
		
		foreach ($lista_divisao as $data) {
			echo "<option value=\"{$data->id}\">{$data->nome}</option>";
		}
	}

	public function actionSubDivisao(){
		
		$lista=Subdivisao::model()->findAll('id_divisao=?', array($_POST["Militar"]['divisao']));

		echo "<option value=\"\">Selecione</option>";
		
		foreach ($lista as $data) {
			echo "<option value=\"{$data->id}\">{$data->nome}</option>";
		}
	}

	public function actionSecao(){
		
		$lista=Secao::model()->findAll('id_subdivisao=?', array($_POST["Militar"]['subdivisao']));

		echo "<option value=\"\">Selecione</option>";
		
		foreach ($lista as $data) {
			echo "<option value=\"{$data->id}\">{$data->nome}</option>";
		}
	}

	public function actionSubSecao(){
		
		$lista=Subsecao::model()->findAll('id_secao=?', array($_POST["Militar"]['secao']));

		echo "<option value=\"\">Selecione</option>";
		
		foreach ($lista as $data) {
			echo "<option value=\"{$data->id}\">{$data->nome}</option>";
		}
	}

}//end class