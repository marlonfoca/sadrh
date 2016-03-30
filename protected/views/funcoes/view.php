<?php
/* @var $this FuncoesController */
/* @var $model Funcoes */

$this->breadcrumbs=array(
	'Funcoes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Funcoes', 'url'=>array('index')),
	array('label'=>'Create Funcoes', 'url'=>array('create')),
	array('label'=>'Update Funcoes', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Funcoes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Funcoes', 'url'=>array('admin')),
);
?>

<h1>View Funcoes #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
	),
)); ?>
