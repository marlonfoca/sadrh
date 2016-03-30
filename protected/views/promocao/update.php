<?php
/* @var $this PromocaoController */
/* @var $model Promocao */

$this->breadcrumbs=array(
	'Promocaos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Promocao', 'url'=>array('index')),
	array('label'=>'Create Promocao', 'url'=>array('create')),
	array('label'=>'View Promocao', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Promocao', 'url'=>array('admin')),
);
?>

<h1>Update Promocao <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>