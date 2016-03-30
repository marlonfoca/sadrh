<?php
/* @var $this EnderecoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Enderecos',
);

$this->menu=array(
	array('label'=>'Create Endereco', 'url'=>array('create')),
	array('label'=>'Manage Endereco', 'url'=>array('admin')),
);
?>

<h1>Enderecos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
