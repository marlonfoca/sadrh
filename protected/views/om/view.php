<?php
/* @var $this OmController */
/* @var $model Om */

$this->breadcrumbs=array(
	'Oms'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Om', 'url'=>array('index')),
	array('label'=>'Create Om', 'url'=>array('create')),
	array('label'=>'Update Om', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Om', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Om', 'url'=>array('admin')),
);
?>

<h1>View Om #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		'sigla',
	),
)); ?>
