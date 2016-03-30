<?php
/* @var $this SubsecaoController */
/* @var $model Subsecao */

$this->breadcrumbs=array(
	'Subsecaos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Subsecao', 'url'=>array('index')),
	array('label'=>'Manage Subsecao', 'url'=>array('admin')),
);
?>

<h1>Create Subsecao</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>