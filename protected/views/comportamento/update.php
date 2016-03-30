<?php
/* @var $this ComportamentoController */
/* @var $model Comportamento */

$this->breadcrumbs=array(
	'Comportamentos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Comportamento', 'url'=>array('index')),
	array('label'=>'Create Comportamento', 'url'=>array('create')),
	array('label'=>'View Comportamento', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Comportamento', 'url'=>array('admin')),
);
?>

<h1>Update Comportamento <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>