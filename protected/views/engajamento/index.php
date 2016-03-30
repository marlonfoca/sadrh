<?php
/* @var $this EngajamentoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Engajamentos',
);

$this->menu=array(
	array('label'=>'Create Engajamento', 'url'=>array('create')),
	array('label'=>'Manage Engajamento', 'url'=>array('admin')),
);
?>

<h1>Engajamentos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
