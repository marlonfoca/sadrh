<?php
/* @var $this TipoFeriasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo Feriases',
);

$this->menu=array(
	array('label'=>'Create TipoFerias', 'url'=>array('create')),
	array('label'=>'Manage TipoFerias', 'url'=>array('admin')),
);
?>

<h1>Tipo Feriases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
