<?php
/* @var $this MilitarController */
/* @var $model Militar */

$this->breadcrumbs=array(
	'Militars'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Militar', 'url'=>array('index')),
	array('label'=>'Create Militar', 'url'=>array('create')),
	array('label'=>'View Militar', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Militar', 'url'=>array('admin')),
);
?>

<h1>Update Militar <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>