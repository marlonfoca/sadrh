<?php
/* @var $this SecaoController */
/* @var $model Secao */

$this->breadcrumbs=array(
	'Secaos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Secao', 'url'=>array('index')),
	array('label'=>'Create Secao', 'url'=>array('create')),
	array('label'=>'View Secao', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Secao', 'url'=>array('admin')),
);
?>

<h1>Update Secao <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>