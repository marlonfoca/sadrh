<?php
/* @var $this InspSaudeController */
/* @var $model InspSaude */
/* @var $form CActiveForm */
?>

<?php Func::isAjaxRequest(); ?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'insp-saude-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_militar'); ?>
		<?php echo $form->textField($model,'id_militar'); ?>
		<?php echo $form->error($model,'id_militar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'letra'); ?>
		<?php echo $form->textField($model,'letra',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'letra'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'secao'); ?>
		<?php echo $form->textField($model,'secao',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'secao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data'); ?>
		<?php echo $form->textField($model,'data'); ?>
		<?php echo $form->error($model,'data'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'boletim'); ?>
		<?php echo $form->textField($model,'boletim',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'boletim'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'validade'); ?>
		<?php echo $form->textField($model,'validade'); ?>
		<?php echo $form->error($model,'validade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parecer'); ?>
		<?php echo $form->textField($model,'parecer',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'parecer'); ?>
	</div>

	<div class="row buttons">
		<?php
		  	echo CHtml::ajaxsubmitButton(
									      $model->isNewRecord ? 'Create' : 'Save',
									      array(),
									      array('update'=>'#part-block-inspSaude', 'success'=>'updateinspSaudeGrid'),
									      array('id'=>'save-button-'.uniqid(), 'live'=>false, 'class'=>'btn btn-success')
									    );
		?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->