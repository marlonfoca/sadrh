<?php
/* @var $this SexoController */
/* @var $model Sexo */

$this->breadcrumbs=array(
	'Sexos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Sexo', 'url'=>array('index')),
	array('label'=>'Manage Sexo', 'url'=>array('admin')),
);
?>

<h1>Create Sexo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>