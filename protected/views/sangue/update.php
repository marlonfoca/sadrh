<?php
/* @var $this SangueController */
/* @var $model Sangue */

$this->breadcrumbs=array(
	'Sangues'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sangue', 'url'=>array('index')),
	array('label'=>'Create Sangue', 'url'=>array('create')),
	array('label'=>'View Sangue', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Sangue', 'url'=>array('admin')),
);
?>

<h1>Update Sangue <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>