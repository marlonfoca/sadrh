<?php
/* @var $this FuncaoController */
/* @var $model Funcao */

$this->breadcrumbs=array(
	'Funcaos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Funcao', 'url'=>array('index')),
	array('label'=>'Manage Funcao', 'url'=>array('admin')),
);
?>

<h1>Create Funcao</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>