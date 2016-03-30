<?php
/* @var $this TelefoneTipoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Telefone Tipos',
);

$this->menu=array(
	array('label'=>'Create TelefoneTipo', 'url'=>array('create')),
	array('label'=>'Manage TelefoneTipo', 'url'=>array('admin')),
);
?>

<h1>Telefone Tipos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
