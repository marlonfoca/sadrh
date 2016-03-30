<?php
/* @var $this FeriasController */
/* @var $model Ferias */

$this->breadcrumbs=array(
	'Feriases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ferias', 'url'=>array('index')),
	array('label'=>'Create Ferias', 'url'=>array('create')),
	array('label'=>'View Ferias', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ferias', 'url'=>array('admin')),
);
?>

<h1>Update Ferias <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>