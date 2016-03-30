<?php
/* @var $this EspecialidadeController */
/* @var $model Especialidade */

$this->breadcrumbs=array(
	'Especialidades'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Especialidade', 'url'=>array('index')),
	array('label'=>'Manage Especialidade', 'url'=>array('admin')),
);
?>

<h1>Create Especialidade</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>