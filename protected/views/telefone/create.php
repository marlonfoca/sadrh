<?php
/* @var $this TelefoneController */
/* @var $model Telefone */

$this->breadcrumbs=array(
	'Telefones'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Telefone', 'url'=>array('index')),
	array('label'=>'Manage Telefone', 'url'=>array('admin')),
);
?>

<h1>Create Telefone</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>