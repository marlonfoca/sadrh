<?php
/* @var $this MedalhaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Medalhas',
);

$this->menu=array(
	array('label'=>'Create Medalha', 'url'=>array('create')),
	array('label'=>'Manage Medalha', 'url'=>array('admin')),
);
?>

<h1>Medalhas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
