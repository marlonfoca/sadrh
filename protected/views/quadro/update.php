<?php
/* @var $this QuadroController */
/* @var $model Quadro */

$this->breadcrumbs=array(
	'Quadros'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Quadro', 'url'=>array('index')),
	array('label'=>'Create Quadro', 'url'=>array('create')),
	array('label'=>'View Quadro', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Quadro', 'url'=>array('admin')),
);
?>

<h1>Update Quadro <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>