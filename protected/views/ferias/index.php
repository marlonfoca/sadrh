<?php
/* @var $this FeriasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Feriases',
);

$this->menu=array(
	array('label'=>'Create Ferias', 'url'=>array('create')),
	array('label'=>'Manage Ferias', 'url'=>array('admin')),
);
?>

<h1>Feriases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
