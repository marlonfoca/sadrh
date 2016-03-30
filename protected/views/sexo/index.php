<?php
/* @var $this SexoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sexos',
);

$this->menu=array(
	array('label'=>'Create Sexo', 'url'=>array('create')),
	array('label'=>'Manage Sexo', 'url'=>array('admin')),
);
?>

<h1>Sexos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
