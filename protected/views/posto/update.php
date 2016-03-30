<?php
/* @var $this PostoController */
/* @var $model Posto */

$this->breadcrumbs=array(
	'Postos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Posto', 'url'=>array('index')),
	array('label'=>'Create Posto', 'url'=>array('create')),
	array('label'=>'View Posto', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Posto', 'url'=>array('admin')),
);
?>

<h1>Update Posto <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>