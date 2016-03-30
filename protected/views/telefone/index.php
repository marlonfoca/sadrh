<?php
/* @var $this TelefoneController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Telefones',
);

$this->menu=array(
	array('label'=>'Create Telefone', 'url'=>array('create')),
	array('label'=>'Manage Telefone', 'url'=>array('admin')),
);
?>

<h1>Telefones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
