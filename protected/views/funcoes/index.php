<?php
/* @var $this FuncoesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Funcoes',
);

$this->menu=array(
	array('label'=>'Create Funcoes', 'url'=>array('create')),
	array('label'=>'Manage Funcoes', 'url'=>array('admin')),
);
?>

<h1>Funcoes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
