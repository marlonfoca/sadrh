<?php
/* @var $this SecaoController */
/* @var $model Secao */

$this->breadcrumbs=array(
	'Secaos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Secao', 'url'=>array('index')),
	array('label'=>'Create Secao', 'url'=>array('create')),
	array('label'=>'Update Secao', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Secao', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Secao', 'url'=>array('admin')),
);
?>

<h1>View Secao #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		'sigla',
		'id_subdivisao',
	),
)); ?>
