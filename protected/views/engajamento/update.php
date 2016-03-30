<?php
/* @var $this EngajamentoController */
/* @var $model Engajamento */

$this->breadcrumbs=array(
	'Engajamentos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Engajamento', 'url'=>array('index')),
	array('label'=>'Create Engajamento', 'url'=>array('create')),
	array('label'=>'View Engajamento', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Engajamento', 'url'=>array('admin')),
);
?>

<h1>Update Engajamento <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>