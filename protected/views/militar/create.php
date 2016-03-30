<?php
/* @var $this MilitarController */
/* @var $model Militar */

$this->breadcrumbs=array(
	'Militars'=>array('index'),
	'Create',
);

?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>