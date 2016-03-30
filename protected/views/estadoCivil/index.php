<?php
/* @var $this EstadoCivilController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estado Civils',
);

$this->menu=array(
	array('label'=>'Create EstadoCivil', 'url'=>array('create')),
	array('label'=>'Manage EstadoCivil', 'url'=>array('admin')),
);
?>

<h1>Estado Civils</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
