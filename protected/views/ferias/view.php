<?php
/* @var $this FeriasController */
/* @var $model Ferias */

$this->breadcrumbs=array(
	'Feriases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Ferias', 'url'=>array('index')),
	array('label'=>'Create Ferias', 'url'=>array('create')),
	array('label'=>'Update Ferias', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Ferias', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ferias', 'url'=>array('admin')),
);
?>

<h1>View Ferias #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'aquisitivo_inicio',
		'aquisitivo_fim',
		'concessivo_inicio',
		'concessivo_fim',
		'ferias_inicio',
		'ferias_fim',
		'n_dias',
		'tipo',
		'id_militar',
	),
)); ?>
