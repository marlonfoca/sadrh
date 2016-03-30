<?php
/* @var $this TelefoneController */
/* @var $model Telefone */

$this->breadcrumbs=array(
	'Telefones'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Telefone', 'url'=>array('index')),
	array('label'=>'Create Telefone', 'url'=>array('create')),
	array('label'=>'Update Telefone', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Telefone', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Telefone', 'url'=>array('admin')),
);
?>

<h1>View Telefone #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_militar',
		'tipo',
		'numero',
		'data_criacao',
		'resp_alteracao',
		'data_alteracao',
	),
)); ?>
