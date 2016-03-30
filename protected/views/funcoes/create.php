<?php
/* @var $this FuncoesController */
/* @var $model Funcoes */

$this->breadcrumbs=array(
	'Funcoes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Funcoes', 'url'=>array('index')),
	array('label'=>'Manage Funcoes', 'url'=>array('admin')),
);
?>

<h1>Create Funcoes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>