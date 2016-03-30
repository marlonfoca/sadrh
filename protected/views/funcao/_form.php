<?php
/* @var $this FuncaoController */
/* @var $model Funcao */
/* @var $form CActiveForm */
?>

<?php Func::isAjaxRequest(); ?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'funcao-form',
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
		<?php echo $form->labelEx($model,'id_funcoes'); ?>
		<?php echo $form->textField($model,'id_funcoes'); ?>
		<?php echo $form->error($model,'id_funcoes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_inicio'); ?>
		<?php echo $form->textField($model,'data_inicio'); ?>
		<?php echo $form->error($model,'data_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_fim'); ?>
		<?php echo $form->textField($model,'data_fim'); ?>
		<?php echo $form->error($model,'data_fim'); ?>
	</div>

	<div class="row">
		<?php
		  	echo CHtml::ajaxsubmitButton(
									      $model->isNewRecord ? 'Create' : 'Save',
									      array(),
									      array('update'=>'#part-block-funcao', 'success'=>'updateFuncaoGrid'),
									      array('id'=>'save-button-'.uniqid(), 'live'=>false, 'class'=>'btn btn-success')
									    );
		?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->