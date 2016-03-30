<?php
/* @var $this MilitarController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Militars',
);

$this->menu=array(
	array('label'=>'Create Militar', 'url'=>array('create')),
	array('label'=>'Manage Militar', 'url'=>array('admin')),
);
?>

<h1>Militars</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'pager'=>array('htmlOptions'=> array('class'=>'pagination pagination-sm')),
	'itemsCssClass'=>'table table-striped table-hover',
)); ?>