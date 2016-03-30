<?php
/* @var $this SexoController */
/* @var $model Sexo */

$this->breadcrumbs=array(
	'Sexos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sexo', 'url'=>array('index')),
	array('label'=>'Create Sexo', 'url'=>array('create')),
	array('label'=>'View Sexo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Sexo', 'url'=>array('admin')),
);
?>

<h1>Update Sexo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>