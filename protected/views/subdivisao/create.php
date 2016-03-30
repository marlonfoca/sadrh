<?php
/* @var $this SubdivisaoController */
/* @var $model Subdivisao */

$this->breadcrumbs=array(
	'Subdivisaos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Subdivisao', 'url'=>array('index')),
	array('label'=>'Manage Subdivisao', 'url'=>array('admin')),
);
?>

<h1>Create Subdivisao</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>