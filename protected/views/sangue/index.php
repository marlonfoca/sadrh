<?php
/* @var $this SangueController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sangues',
);

$this->menu=array(
	array('label'=>'Create Sangue', 'url'=>array('create')),
	array('label'=>'Manage Sangue', 'url'=>array('admin')),
);
?>

<h1>Sangues</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
