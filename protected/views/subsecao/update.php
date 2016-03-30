<?php
/* @var $this SubsecaoController */
/* @var $model Subsecao */

$this->breadcrumbs=array(
	'Subsecaos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Subsecao', 'url'=>array('index')),
	array('label'=>'Create Subsecao', 'url'=>array('create')),
	array('label'=>'View Subsecao', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Subsecao', 'url'=>array('admin')),
);
?>

<h1>Update Subsecao <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>