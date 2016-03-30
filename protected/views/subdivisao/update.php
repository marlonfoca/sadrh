<?php
/* @var $this SubdivisaoController */
/* @var $model Subdivisao */

$this->breadcrumbs=array(
	'Subdivisaos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Subdivisao', 'url'=>array('index')),
	array('label'=>'Create Subdivisao', 'url'=>array('create')),
	array('label'=>'View Subdivisao', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Subdivisao', 'url'=>array('admin')),
);
?>

<h1>Update Subdivisao <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>