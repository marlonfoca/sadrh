<?php
/* @var $this InspSaudeController */
/* @var $model InspSaude */

$this->breadcrumbs=array(
	'Insp Saudes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List InspSaude', 'url'=>array('index')),
	array('label'=>'Manage InspSaude', 'url'=>array('admin')),
);
?>

<h1>Create InspSaude</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>