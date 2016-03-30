<?php
/* @var $this TelefoneController */
/* @var $model Telefone */

$this->breadcrumbs=array(
	'Telefones'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Telefone', 'url'=>array('index')),
	array('label'=>'Create Telefone', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#telefone-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Telefones</h1>

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
	'id'=>'telefone-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'id_militar',
		'tipo',
		'numero',
		'data_criacao',
		'resp_alteracao',
		/*
		'data_alteracao',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
