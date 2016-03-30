<?php
/* @var $this PromocaoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Promocaos',
);

$this->menu=array(
	array('label'=>'Create Promocao', 'url'=>array('create')),
	array('label'=>'Manage Promocao', 'url'=>array('admin')),
);
?>

<h1>Promocaos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
