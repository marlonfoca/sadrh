<?php
/* @var $this EstadoCivilController */
/* @var $model EstadoCivil */

$this->breadcrumbs=array(
	'Estado Civils'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EstadoCivil', 'url'=>array('index')),
	array('label'=>'Create EstadoCivil', 'url'=>array('create')),
	array('label'=>'View EstadoCivil', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage EstadoCivil', 'url'=>array('admin')),
);
?>

<h1>Update EstadoCivil <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>