<?php
/* @var $this InspSaudeController */
/* @var $data InspSaude */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_militar')); ?>:</b>
	<?php echo CHtml::encode($data->id_militar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('letra')); ?>:</b>
	<?php echo CHtml::encode($data->letra); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('secao')); ?>:</b>
	<?php echo CHtml::encode($data->secao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data')); ?>:</b>
	<?php echo CHtml::encode($data->data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('boletim')); ?>:</b>
	<?php echo CHtml::encode($data->boletim); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('validade')); ?>:</b>
	<?php echo CHtml::encode($data->validade); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('parecer')); ?>:</b>
	<?php echo CHtml::encode($data->parecer); ?>
	<br />

	*/ ?>

</div>