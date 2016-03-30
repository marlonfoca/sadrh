<?php
/* @var $this EstadoCivilController */
/* @var $model EstadoCivil */

$this->breadcrumbs=array(
	'Estado Civils'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EstadoCivil', 'url'=>array('index')),
	array('label'=>'Manage EstadoCivil', 'url'=>array('admin')),
);
?>

<h1>Create EstadoCivil</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>