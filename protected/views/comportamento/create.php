<?php
/* @var $this ComportamentoController */
/* @var $model Comportamento */

$this->breadcrumbs=array(
	'Comportamentos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Comportamento', 'url'=>array('index')),
	array('label'=>'Manage Comportamento', 'url'=>array('admin')),
);
?>

<h1>Create Comportamento</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>