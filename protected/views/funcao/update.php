<?php
/* @var $this FuncaoController */
/* @var $model Funcao */

$this->breadcrumbs=array(
	'Funcaos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Funcao', 'url'=>array('index')),
	array('label'=>'Create Funcao', 'url'=>array('create')),
	array('label'=>'View Funcao', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Funcao', 'url'=>array('admin')),
);
?>

<h1>Update Funcao <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>