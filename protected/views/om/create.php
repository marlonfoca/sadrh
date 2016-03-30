<?php
/* @var $this OmController */
/* @var $model Om */

$this->breadcrumbs=array(
	'Oms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Om', 'url'=>array('index')),
	array('label'=>'Manage Om', 'url'=>array('admin')),
);
?>

<h1>Create Om</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>