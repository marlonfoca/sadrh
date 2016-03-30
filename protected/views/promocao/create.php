<?php
/* @var $this PromocaoController */
/* @var $model Promocao */

$this->breadcrumbs=array(
	'Promocaos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Promocao', 'url'=>array('index')),
	array('label'=>'Manage Promocao', 'url'=>array('admin')),
);
?>

<h1>Create Promocao</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>