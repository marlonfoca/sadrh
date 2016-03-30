<?php
/* @var $this EspecialidadeController */
/* @var $model Especialidade */

$this->breadcrumbs=array(
	'Especialidades'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Especialidade', 'url'=>array('index')),
	array('label'=>'Create Especialidade', 'url'=>array('create')),
	array('label'=>'Update Especialidade', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Especialidade', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Especialidade', 'url'=>array('admin')),
);
?>

<h1>View Especialidade #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'sigla',
		'nome',
	),
)); ?>
