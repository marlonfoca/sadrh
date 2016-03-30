<?php Func::isAjaxRequest(); ?>

<?php
/* @var $this MilitarController */
/* @var $model Militar */

$this->breadcrumbs=array(
	'Militars'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Militar', 'url'=>array('index')),
	array('label'=>'Create Militar', 'url'=>array('create')),
	array('label'=>'Update Militar', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Militar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Militar', 'url'=>array('admin')),
);
?>

<h2>Detalhes do Militar: <b><?php echo $model->idPosto->sigla.' '.$model->idEspecialidade->sigla.' '.$model->nome_completo; ?></b></h2>

<?php

    $get_id = $model->getAttributes();
    $id = $get_id['id'];

$this->widget('zii.widgets.jui.CJuiTabs', array(
    'tabs'=>array(

        'Detalhes'=>array('id'=>'detalhes','content'=>$this->renderPartial(
                    'tab_detalhes',
                    array('model'=>$model),TRUE
                    )),

        'Endereco'=>array('id'=>'endereco','content'=>$this->renderPartial(
                    'tab_endereco',
                    array('model_endereco'=>$model_endereco, 'id_militar'=>$id),TRUE
                    )),

        'Telefone'=>array('id'=>'telefone','content'=>$this->renderPartial(
                    'tab_telefone',
                    array('model_telefone'=>$model_telefone, 'id_militar'=>$id),TRUE
                    )),

        'Férias'=>array('id'=>'ferias','content'=>$this->renderPartial(
                    'tab_ferias',
                    array('model_ferias'=>$model_ferias, 'id_militar'=>$id),TRUE
                    )),

        'Promoção'=>array('id'=>'promocao','content'=>$this->renderPartial(
                    'tab_promocao',
                    array('model_promocao'=>$model_promocao, 'id_militar'=>$id),TRUE
                    )),

        'Engajamento'=>array('id'=>'engajamento','content'=>$this->renderPartial(
                    'tab_engajamento',
                    array('model_engajamento'=>$model_engajamento, 'id_militar'=>$id),TRUE
                    )),

        'Medalha'=>array('id'=>'medalha','content'=>$this->renderPartial(
                    'tab_medalha',
                    array('model_medalha'=>$model_medalha, 'id_militar'=>$id),TRUE
                    )),

        'Função'=>array('id'=>'funcao','content'=>$this->renderPartial(
                    'tab_funcao',
                    array('model_funcao'=>$model_funcao, 'id_militar'=>$id),TRUE
                    )),

        'Inspeção de Saúde'=>array('id'=>'inspsaude','content'=>$this->renderPartial(
                    'tab_insp_saude',
                    array('model_insp_saude'=>$model_insp_saude, 'id_militar'=>$id),TRUE
                    )),
    ),
    'options'=>array(
              'collapsible'=>true,
          ),
    'id'=>'nav-tabs'
))?>