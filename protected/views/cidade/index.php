<?php
/* @var $this CidadeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cidades',
);

$this->menu=array(
	array('label'=>'Create Cidade', 'url'=>array('create')),
	array('label'=>'Manage Cidade', 'url'=>array('admin')),
);
?>

<h1>Cidades</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
