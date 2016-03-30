<?php
/* @var $this QuadroController */
/* @var $model Quadro */

$this->breadcrumbs=array(
	'Quadros'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Quadro', 'url'=>array('index')),
	array('label'=>'Manage Quadro', 'url'=>array('admin')),
);
?>

<h1>Create Quadro</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>