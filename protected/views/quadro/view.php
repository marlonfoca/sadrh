<?php
/* @var $this QuadroController */
/* @var $model Quadro */

$this->breadcrumbs=array(
	'Quadros'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Quadro', 'url'=>array('index')),
	array('label'=>'Create Quadro', 'url'=>array('create')),
	array('label'=>'Update Quadro', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Quadro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Quadro', 'url'=>array('admin')),
);
?>

<h1>View Quadro #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'sigla',
		'quadro',
	),
)); ?>
