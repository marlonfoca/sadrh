<?php
/* @var $this FeriasController */
/* @var $model Ferias */

$this->breadcrumbs=array(
	'Feriases'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Ferias', 'url'=>array('index')),
	array('label'=>'Create Ferias', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ferias-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Feriases</h1>

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
	'id'=>'ferias-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'aquisitivo_inicio',
		'aquisitivo_fim',
		'concessivo_inicio',
		'concessivo_fim',
		'ferias_inicio',
		/*
		'ferias_fim',
		'n_dias',
		'tipo',
		'id_militar',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
