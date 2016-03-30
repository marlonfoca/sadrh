<?php
/* @var $this DivisaoController */
/* @var $model Divisao */

$this->breadcrumbs=array(
	'Divisaos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Divisao', 'url'=>array('index')),
	array('label'=>'Manage Divisao', 'url'=>array('admin')),
);
?>

<h1>Create Divisao</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>