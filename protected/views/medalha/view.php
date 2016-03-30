<?php
/* @var $this MedalhaController */
/* @var $model Medalha */

$this->breadcrumbs=array(
	'Medalhas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Medalha', 'url'=>array('index')),
	array('label'=>'Create Medalha', 'url'=>array('create')),
	array('label'=>'Update Medalha', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Medalha', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Medalha', 'url'=>array('admin')),
);
?>

<h1>View Medalha #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_militar',
		'tipo',
		'data',
		'boletim',
	),
)); ?>
