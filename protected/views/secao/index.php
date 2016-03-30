<?php
/* @var $this SecaoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Secaos',
);

$this->menu=array(
	array('label'=>'Create Secao', 'url'=>array('create')),
	array('label'=>'Manage Secao', 'url'=>array('admin')),
);
?>

<h1>Secaos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
