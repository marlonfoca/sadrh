<?php
/* @var $this DivisaoController */
/* @var $model Divisao */

$this->breadcrumbs=array(
	'Divisaos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Divisao', 'url'=>array('index')),
	array('label'=>'Create Divisao', 'url'=>array('create')),
	array('label'=>'Update Divisao', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Divisao', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Divisao', 'url'=>array('admin')),
);
?>

<h1>View Divisao #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		'sigla',
		'id_om',
	),
)); ?>
