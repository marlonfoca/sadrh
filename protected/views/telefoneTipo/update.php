<?php
/* @var $this TelefoneTipoController */
/* @var $model TelefoneTipo */

$this->breadcrumbs=array(
	'Telefone Tipos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TelefoneTipo', 'url'=>array('index')),
	array('label'=>'Create TelefoneTipo', 'url'=>array('create')),
	array('label'=>'View TelefoneTipo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TelefoneTipo', 'url'=>array('admin')),
);
?>

<h1>Update TelefoneTipo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>