<?php
/* @var $this EnderecoTipoController */
/* @var $model EnderecoTipo */

$this->breadcrumbs=array(
	'Endereco Tipos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List EnderecoTipo', 'url'=>array('index')),
	array('label'=>'Create EnderecoTipo', 'url'=>array('create')),
	array('label'=>'Update EnderecoTipo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete EnderecoTipo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EnderecoTipo', 'url'=>array('admin')),
);
?>

<h1>View EnderecoTipo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tipo',
	),
)); ?>
