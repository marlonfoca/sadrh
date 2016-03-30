<?php
/* @var $this TipoFeriasController */
/* @var $model TipoFerias */

$this->breadcrumbs=array(
	'Tipo Feriases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipoFerias', 'url'=>array('index')),
	array('label'=>'Create TipoFerias', 'url'=>array('create')),
	array('label'=>'View TipoFerias', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TipoFerias', 'url'=>array('admin')),
);
?>

<h1>Update TipoFerias <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>