<?php
/* @var $this TelefoneController */
/* @var $model Telefone */

$this->breadcrumbs=array(
	'Telefones'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Telefone', 'url'=>array('index')),
	array('label'=>'Create Telefone', 'url'=>array('create')),
	array('label'=>'View Telefone', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Telefone', 'url'=>array('admin')),
);
?>

<h1>Update Telefone <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>