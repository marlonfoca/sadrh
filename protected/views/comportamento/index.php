<?php
/* @var $this ComportamentoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Comportamentos',
);

$this->menu=array(
	array('label'=>'Create Comportamento', 'url'=>array('create')),
	array('label'=>'Manage Comportamento', 'url'=>array('admin')),
);
?>

<h1>Comportamentos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
