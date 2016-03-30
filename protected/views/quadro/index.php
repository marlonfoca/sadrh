<?php
/* @var $this QuadroController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Quadros',
);

$this->menu=array(
	array('label'=>'Create Quadro', 'url'=>array('create')),
	array('label'=>'Manage Quadro', 'url'=>array('admin')),
);
?>

<h1>Quadros</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
