<?php
/* @var $this OmController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Oms',
);

$this->menu=array(
	array('label'=>'Create Om', 'url'=>array('create')),
	array('label'=>'Manage Om', 'url'=>array('admin')),
);
?>

<h1>Oms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
