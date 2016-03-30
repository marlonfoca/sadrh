<?php
/* @var $this DivisaoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Divisaos',
);

$this->menu=array(
	array('label'=>'Create Divisao', 'url'=>array('create')),
	array('label'=>'Manage Divisao', 'url'=>array('admin')),
);
?>

<h1>Divisaos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
