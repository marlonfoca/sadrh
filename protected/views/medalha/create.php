<?php
/* @var $this MedalhaController */
/* @var $model Medalha */

$this->breadcrumbs=array(
	'Medalhas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Medalha', 'url'=>array('index')),
	array('label'=>'Manage Medalha', 'url'=>array('admin')),
);
?>

<h1>Create Medalha</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>