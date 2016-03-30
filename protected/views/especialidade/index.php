<?php
/* @var $this EspecialidadeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Especialidades',
);

$this->menu=array(
	array('label'=>'Create Especialidade', 'url'=>array('create')),
	array('label'=>'Manage Especialidade', 'url'=>array('admin')),
);
?>

<h1>Especialidades</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
