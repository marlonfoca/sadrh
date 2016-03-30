<?php
/* @var $this SubsecaoController */
/* @var $model Subsecao */

$this->breadcrumbs=array(
	'Subsecaos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Subsecao', 'url'=>array('index')),
	array('label'=>'Create Subsecao', 'url'=>array('create')),
	array('label'=>'Update Subsecao', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Subsecao', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Subsecao', 'url'=>array('admin')),
);
?>

<h1>View Subsecao #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		'sigla',
		'id_secao',
	),
)); ?>
