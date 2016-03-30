<?php
/* @var $this DivisaoController */
/* @var $model Divisao */

$this->breadcrumbs=array(
	'Divisaos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Divisao', 'url'=>array('index')),
	array('label'=>'Create Divisao', 'url'=>array('create')),
	array('label'=>'View Divisao', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Divisao', 'url'=>array('admin')),
);
?>

<h1>Update Divisao <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>