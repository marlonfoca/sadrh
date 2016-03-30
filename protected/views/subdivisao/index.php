<?php
/* @var $this SubdivisaoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Subdivisaos',
);

$this->menu=array(
	array('label'=>'Create Subdivisao', 'url'=>array('create')),
	array('label'=>'Manage Subdivisao', 'url'=>array('admin')),
);
?>

<h1>Subdivisaos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
