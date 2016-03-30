<?php
/* @var $this EngajamentoController */
/* @var $model Engajamento */

$this->breadcrumbs=array(
	'Engajamentos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Engajamento', 'url'=>array('index')),
	array('label'=>'Create Engajamento', 'url'=>array('create')),
	array('label'=>'Update Engajamento', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Engajamento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Engajamento', 'url'=>array('admin')),
);
?>

<h1>View Engajamento #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_militar',
		'tipo',
		'data_inicio',
		'data_termino',
		'observacao',
	),
)); ?>
