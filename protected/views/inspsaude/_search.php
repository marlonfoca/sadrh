<?php
/* @var $this InspSaudeController */
/* @var $model InspSaude */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_militar'); ?>
		<?php echo $form->textField($model,'id_militar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'letra'); ?>
		<?php echo $form->textField($model,'letra',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'secao'); ?>
		<?php echo $form->textField($model,'secao',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data'); ?>
		<?php echo $form->textField($model,'data'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'boletim'); ?>
		<?php echo $form->textField($model,'boletim',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'validade'); ?>
		<?php echo $form->textField($model,'validade'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parecer'); ?>
		<?php echo $form->textField($model,'parecer',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->