<?php
/* @var $this PostoController */
/* @var $model Posto */

$this->breadcrumbs=array(
	'Postos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Posto', 'url'=>array('index')),
	array('label'=>'Manage Posto', 'url'=>array('admin')),
);
?>

<h1>Create Posto</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>