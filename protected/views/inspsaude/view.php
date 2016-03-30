<?php
/* @var $this InspSaudeController */
/* @var $model InspSaude */

$this->breadcrumbs=array(
	'Insp Saudes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List InspSaude', 'url'=>array('index')),
	array('label'=>'Create InspSaude', 'url'=>array('create')),
	array('label'=>'Update InspSaude', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete InspSaude', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InspSaude', 'url'=>array('admin')),
);
?>

<h1>View InspSaude #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_militar',
		'letra',
		'secao',
		'data',
		'boletim',
		'validade',
		'parecer',
	),
)); ?>
