<?php
/* @var $this PostoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Postos',
);

$this->menu=array(
	array('label'=>'Create Posto', 'url'=>array('create')),
	array('label'=>'Manage Posto', 'url'=>array('admin')),
);
?>

<h1>Postos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
