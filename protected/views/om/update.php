<?php
/* @var $this OmController */
/* @var $model Om */

$this->breadcrumbs=array(
	'Oms'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Om', 'url'=>array('index')),
	array('label'=>'Create Om', 'url'=>array('create')),
	array('label'=>'View Om', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Om', 'url'=>array('admin')),
);
?>

<h1>Update Om <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>