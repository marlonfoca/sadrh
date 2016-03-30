<?php
/* @var $this FeriasController */
/* @var $data Ferias */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aquisitivo_inicio')); ?>:</b>
	<?php echo CHtml::encode($data->aquisitivo_inicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aquisitivo_fim')); ?>:</b>
	<?php echo CHtml::encode($data->aquisitivo_fim); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('concessivo_inicio')); ?>:</b>
	<?php echo CHtml::encode($data->concessivo_inicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('concessivo_fim')); ?>:</b>
	<?php echo CHtml::encode($data->concessivo_fim); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ferias_inicio')); ?>:</b>
	<?php echo CHtml::encode($data->ferias_inicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ferias_fim')); ?>:</b>
	<?php echo CHtml::encode($data->ferias_fim); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('n_dias')); ?>:</b>
	<?php echo CHtml::encode($data->n_dias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_militar')); ?>:</b>
	<?php echo CHtml::encode($data->id_militar); ?>
	<br />

	*/ ?>

</div>