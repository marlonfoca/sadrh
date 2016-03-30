<?php
/* @var $this SubsecaoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Subsecaos',
);

$this->menu=array(
	array('label'=>'Create Subsecao', 'url'=>array('create')),
	array('label'=>'Manage Subsecao', 'url'=>array('admin')),
);
?>

<h1>Subsecaos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
