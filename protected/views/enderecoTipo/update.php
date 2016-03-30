<?php
/* @var $this EnderecoTipoController */
/* @var $model EnderecoTipo */

$this->breadcrumbs=array(
	'Endereco Tipos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EnderecoTipo', 'url'=>array('index')),
	array('label'=>'Create EnderecoTipo', 'url'=>array('create')),
	array('label'=>'View EnderecoTipo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage EnderecoTipo', 'url'=>array('admin')),
);
?>

<h1>Update EnderecoTipo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>