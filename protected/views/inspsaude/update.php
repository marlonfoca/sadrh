<?php
/* @var $this InspSaudeController */
/* @var $model InspSaude */

$this->breadcrumbs=array(
	'Insp Saudes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List InspSaude', 'url'=>array('index')),
	array('label'=>'Create InspSaude', 'url'=>array('create')),
	array('label'=>'View InspSaude', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage InspSaude', 'url'=>array('admin')),
);
?>

<h1>Update InspSaude <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>