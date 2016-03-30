<?php
/* @var $this SecaoController */
/* @var $model Secao */

$this->breadcrumbs=array(
	'Secaos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Secao', 'url'=>array('index')),
	array('label'=>'Manage Secao', 'url'=>array('admin')),
);
?>

<h1>Create Secao</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>