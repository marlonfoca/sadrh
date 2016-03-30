<?php
/* @var $this TipoFeriasController */
/* @var $model TipoFerias */

$this->breadcrumbs=array(
	'Tipo Feriases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TipoFerias', 'url'=>array('index')),
	array('label'=>'Manage TipoFerias', 'url'=>array('admin')),
);
?>

<h1>Create TipoFerias</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>