<?php
/* @var $this EnderecoController */
/* @var $model Endereco */

$this->breadcrumbs=array(
	'Enderecos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Endereco', 'url'=>array('index')),
	array('label'=>'Manage Endereco', 'url'=>array('admin')),
);
?>

<h1>Create Endereco</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>