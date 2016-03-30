<?php
/* @var $this SubdivisaoController */
/* @var $model Subdivisao */

$this->breadcrumbs=array(
	'Subdivisaos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Subdivisao', 'url'=>array('index')),
	array('label'=>'Create Subdivisao', 'url'=>array('create')),
	array('label'=>'Update Subdivisao', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Subdivisao', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Subdivisao', 'url'=>array('admin')),
);
?>

<h1>View Subdivisao #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		'sigla',
		'id_divisao',
	),
)); ?>
