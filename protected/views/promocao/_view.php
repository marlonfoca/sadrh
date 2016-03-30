<?php
/* @var $this PromocaoController */
/* @var $data Promocao */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_militar')); ?>:</b>
	<?php echo CHtml::encode($data->id_militar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_posto')); ?>:</b>
	<?php echo CHtml::encode($data->id_posto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data')); ?>:</b>
	<?php echo CHtml::encode($data->data); ?>
	<br />


</div>