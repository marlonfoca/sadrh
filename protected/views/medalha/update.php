<?php
/* @var $this MedalhaController */
/* @var $model Medalha */

$this->breadcrumbs=array(
	'Medalhas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Medalha', 'url'=>array('index')),
	array('label'=>'Create Medalha', 'url'=>array('create')),
	array('label'=>'View Medalha', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Medalha', 'url'=>array('admin')),
);
?>

<h1>Update Medalha <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>