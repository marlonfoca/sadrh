<?php
/* @var $this FeriasController */
/* @var $model Ferias */

$this->breadcrumbs=array(
	'Feriases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ferias', 'url'=>array('index')),
	array('label'=>'Manage Ferias', 'url'=>array('admin')),
);
?>

<h1>Create Ferias</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>