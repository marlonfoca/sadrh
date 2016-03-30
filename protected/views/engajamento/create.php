<?php
/* @var $this EngajamentoController */
/* @var $model Engajamento */

$this->breadcrumbs=array(
	'Engajamentos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Engajamento', 'url'=>array('index')),
	array('label'=>'Manage Engajamento', 'url'=>array('admin')),
);
?>

<h1>Create Engajamento</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>