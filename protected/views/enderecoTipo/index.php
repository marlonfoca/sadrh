<?php
/* @var $this EnderecoTipoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Endereco Tipos',
);

$this->menu=array(
	array('label'=>'Create EnderecoTipo', 'url'=>array('create')),
	array('label'=>'Manage EnderecoTipo', 'url'=>array('admin')),
);
?>

<h1>Endereco Tipos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
