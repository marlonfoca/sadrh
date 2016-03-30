<?php
/* @var $this TipoFeriasController */
/* @var $model TipoFerias */

$this->breadcrumbs=array(
	'Tipo Feriases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TipoFerias', 'url'=>array('index')),
	array('label'=>'Create TipoFerias', 'url'=>array('create')),
	array('label'=>'Update TipoFerias', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TipoFerias', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoFerias', 'url'=>array('admin')),
);
?>

<h1>View TipoFerias #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
	),
)); ?>
