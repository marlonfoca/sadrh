<?php
/* @var $this FuncaoController */
/* @var $data Funcao */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_militar')); ?>:</b>
	<?php echo CHtml::encode($data->id_militar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_funcoes')); ?>:</b>
	<?php echo CHtml::encode($data->id_funcoes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_inicio')); ?>:</b>
	<?php echo CHtml::encode($data->data_inicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_fim')); ?>:</b>
	<?php echo CHtml::encode($data->data_fim); ?>
	<br />


</div>