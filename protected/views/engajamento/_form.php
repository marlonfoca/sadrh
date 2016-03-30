<?php
/* @var $this EngajamentoController */
/* @var $model Engajamento */
/* @var $form CActiveForm */
?>

<?php Func::isAjaxRequest(); ?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'engajamento-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_militar'); ?>
		<?php echo $form->textField($model,'id_militar'); ?>
		<?php echo $form->error($model,'id_militar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_inicio'); ?>
		<?php echo $form->textField($model,'data_inicio'); ?>
		<?php echo $form->error($model,'data_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_termino'); ?>
		<?php echo $form->textField($model,'data_termino'); ?>
		<?php echo $form->error($model,'data_termino'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observacao'); ?>
		<?php echo $form->textField($model,'observacao',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'observacao'); ?>
	</div>

	<div class="row">
		<?php
		  	echo CHtml::ajaxsubmitButton(
									      $model->isNewRecord ? 'Create' : 'Save',
									      array(),
									      array('update'=>'#part-block-engajamento', 'success'=>'updateEngajamentoGrid'),
									      array('id'=>'save-button-'.uniqid(), 'live'=>false, 'class'=>'btn btn-success')
									    );
		?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->