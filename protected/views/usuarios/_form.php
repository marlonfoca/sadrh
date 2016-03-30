<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuarios-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_pessoal'); ?>
		<?php echo $form->textField($model,'cod_pessoal',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'cod_pessoal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'antig'); ?>
		<?php echo $form->textField($model,'antig'); ?>
		<?php echo $form->error($model,'antig'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pt_gd'); ?>
		<?php echo $form->textField($model,'pt_gd',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'pt_gd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'especialidade'); ?>
		<?php echo $form->textField($model,'especialidade',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'especialidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nomeguerra'); ?>
		<?php echo $form->textField($model,'nomeguerra',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'nomeguerra'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'secao'); ?>
		<?php echo $form->textField($model,'secao',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'secao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ramal'); ?>
		<?php echo $form->textField($model,'ramal',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'ramal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nivel'); ?>
		<?php echo $form->textField($model,'nivel',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'nivel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SENHA'); ?>
		<?php echo $form->textField($model,'SENHA',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'SENHA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idt'); ?>
		<?php echo $form->textField($model,'idt',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->error($model,'idt'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->