<?php
/* @var $this SangueController */
/* @var $model Sangue */

$this->breadcrumbs=array(
	'Sangues'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Sangue', 'url'=>array('index')),
	array('label'=>'Manage Sangue', 'url'=>array('admin')),
);
?>

<h1>Create Sangue</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>