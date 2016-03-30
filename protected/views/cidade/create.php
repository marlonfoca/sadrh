<?php
/* @var $this CidadeController */
/* @var $model Cidade */

$this->breadcrumbs=array(
	'Cidades'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cidade', 'url'=>array('index')),
	array('label'=>'Manage Cidade', 'url'=>array('admin')),
);
?>

<h1>Create Cidade</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>