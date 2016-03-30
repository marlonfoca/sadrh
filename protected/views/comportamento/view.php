<?php
/* @var $this ComportamentoController */
/* @var $model Comportamento */

$this->breadcrumbs=array(
	'Comportamentos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Comportamento', 'url'=>array('index')),
	array('label'=>'Create Comportamento', 'url'=>array('create')),
	array('label'=>'Update Comportamento', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Comportamento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Comportamento', 'url'=>array('admin')),
);
?>

<h1>View Comportamento #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
	),
)); ?>
