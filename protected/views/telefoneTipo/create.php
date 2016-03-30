<?php
/* @var $this TelefoneTipoController */
/* @var $model TelefoneTipo */

$this->breadcrumbs=array(
	'Telefone Tipos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TelefoneTipo', 'url'=>array('index')),
	array('label'=>'Manage TelefoneTipo', 'url'=>array('admin')),
);
?>

<h1>Create TelefoneTipo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>