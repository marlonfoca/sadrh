<?php
/* @var $this EnderecoTipoController */
/* @var $model EnderecoTipo */

$this->breadcrumbs=array(
	'Endereco Tipos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EnderecoTipo', 'url'=>array('index')),
	array('label'=>'Manage EnderecoTipo', 'url'=>array('admin')),
);
?>

<h1>Create EnderecoTipo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>