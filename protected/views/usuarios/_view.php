<?php
/* @var $this UsuariosController */
/* @var $data Usuarios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_pessoal')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_pessoal), array('view', 'id'=>$data->cod_pessoal)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('antig')); ?>:</b>
	<?php echo CHtml::encode($data->antig); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pt_gd')); ?>:</b>
	<?php echo CHtml::encode($data->pt_gd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('especialidade')); ?>:</b>
	<?php echo CHtml::encode($data->especialidade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomeguerra')); ?>:</b>
	<?php echo CHtml::encode($data->nomeguerra); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('secao')); ?>:</b>
	<?php echo CHtml::encode($data->secao); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ramal')); ?>:</b>
	<?php echo CHtml::encode($data->ramal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nivel')); ?>:</b>
	<?php echo CHtml::encode($data->nivel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SENHA')); ?>:</b>
	<?php echo CHtml::encode($data->SENHA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idt')); ?>:</b>
	<?php echo CHtml::encode($data->idt); ?>
	<br />

	*/ ?>

</div>