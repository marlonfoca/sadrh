<?php
/* @var $this PostoController */
/* @var $model Posto */

$this->breadcrumbs=array(
	'Postos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Posto', 'url'=>array('index')),
	array('label'=>'Create Posto', 'url'=>array('create')),
	array('label'=>'Update Posto', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Posto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Posto', 'url'=>array('admin')),
);
?>

<h1>View Posto #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'ordem',
		'sigla',
		'nome',
	),
)); ?>
