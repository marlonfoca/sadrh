<?php
/* @var $this SangueController */
/* @var $model Sangue */

$this->breadcrumbs=array(
	'Sangues'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Sangue', 'url'=>array('index')),
	array('label'=>'Create Sangue', 'url'=>array('create')),
	array('label'=>'Update Sangue', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Sangue', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sangue', 'url'=>array('admin')),
);
?>

<h1>View Sangue #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
	),
)); ?>
