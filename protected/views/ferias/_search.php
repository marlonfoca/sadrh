<?php
/* @var $this FeriasController */
/* @var $model Ferias */
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
		<?php echo $form->label($model,'aquisitivo_inicio'); ?>
		<?php echo $form->textField($model,'aquisitivo_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'aquisitivo_fim'); ?>
		<?php echo $form->textField($model,'aquisitivo_fim'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'concessivo_inicio'); ?>
		<?php echo $form->textField($model,'concessivo_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'concessivo_fim'); ?>
		<?php echo $form->textField($model,'concessivo_fim'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ferias_inicio'); ?>
		<?php echo $form->textField($model,'ferias_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ferias_fim'); ?>
		<?php echo $form->textField($model,'ferias_fim'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'n_dias'); ?>
		<?php echo $form->textField($model,'n_dias'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_militar'); ?>
		<?php echo $form->textField($model,'id_militar'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->