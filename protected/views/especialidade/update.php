<?php
/* @var $this EspecialidadeController */
/* @var $model Especialidade */

$this->breadcrumbs=array(
	'Especialidades'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Especialidade', 'url'=>array('index')),
	array('label'=>'Create Especialidade', 'url'=>array('create')),
	array('label'=>'View Especialidade', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Especialidade', 'url'=>array('admin')),
);
?>

<h1>Update Especialidade <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>