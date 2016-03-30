<?php
/* @var $this FuncoesController */
/* @var $model Funcoes */

$this->breadcrumbs=array(
	'Funcoes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Funcoes', 'url'=>array('index')),
	array('label'=>'Create Funcoes', 'url'=>array('create')),
	array('label'=>'View Funcoes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Funcoes', 'url'=>array('admin')),
);
?>

<h1>Update Funcoes <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>