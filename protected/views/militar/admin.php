<?php
/* @var $this MilitarController */
/* @var $model Militar */

$this->breadcrumbs=array(
	'Militars'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Militar', 'url'=>array('index')),
	array('label'=>'Create Militar', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#militar-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Militars</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'militar-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'pager'=>array('htmlOptions'=> array('class'=>'pagination pagination-sm')),
	'itemsCssClass'=>'table table-striped table-hover',
	'columns'=>array(
		'id',
		'saram',
		'id_posto',
		'id_quadro',
		'id_especialidade',
		'nome_completo',
		/*
		'nome_guerra',
		'foto',
		'antiguidade',
		'nascimento',
		'naturalidade',
		'uf_naturalidade',
		'estado_civil',
		'identidade',
		'cpf',
		'rc_ra',
		'pasep',
		'sexo',
		'tipo_sanguineo',
		'carteira_motorista',
		'cat_hab',
		'titulo_eleitoral',
		'secao_eleitoral',
		'zona_eleitoral',
		'comportamento',
		'om',
		'divisao',
		'subdivisao',
		'secao',
		'subsecao',
		'data_inclusao',
		'data_alteracao',
		'data_apres_om',
		'data_praca',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
