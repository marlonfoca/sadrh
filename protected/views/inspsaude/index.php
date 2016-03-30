<?php
/* @var $this InspSaudeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Insp Saudes',
);

$this->menu=array(
	array('label'=>'Create InspSaude', 'url'=>array('create')),
	array('label'=>'Manage InspSaude', 'url'=>array('admin')),
);
?>

<h1>Insp Saudes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
