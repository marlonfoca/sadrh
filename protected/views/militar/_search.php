<?php
/* @var $this MilitarController */
/* @var $model Militar */
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
		<?php echo $form->label($model,'saram'); ?>
		<?php echo $form->textField($model,'saram'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_posto'); ?>
		<?php echo $form->textField($model,'id_posto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_quadro'); ?>
		<?php echo $form->textField($model,'id_quadro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_especialidade'); ?>
		<?php echo $form->textField($model,'id_especialidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nome_completo'); ?>
		<?php echo $form->textField($model,'nome_completo',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nome_guerra'); ?>
		<?php echo $form->textField($model,'nome_guerra',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'foto'); ?>
		<?php echo $form->textField($model,'foto',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'antiguidade'); ?>
		<?php echo $form->textField($model,'antiguidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nascimento'); ?>
		<?php echo $form->textField($model,'nascimento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'naturalidade'); ?>
		<?php echo $form->textField($model,'naturalidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'uf_naturalidade'); ?>
		<?php echo $form->textField($model,'uf_naturalidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado_civil'); ?>
		<?php echo $form->textField($model,'estado_civil'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'identidade'); ?>
		<?php echo $form->textField($model,'identidade',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cpf'); ?>
		<?php echo $form->textField($model,'cpf'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rc_ra'); ?>
		<?php echo $form->textField($model,'rc_ra'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pasep'); ?>
		<?php echo $form->textField($model,'pasep'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sexo'); ?>
		<?php echo $form->textField($model,'sexo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_sanguineo'); ?>
		<?php echo $form->textField($model,'tipo_sanguineo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'carteira_motorista'); ?>
		<?php echo $form->textField($model,'carteira_motorista'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cat_hab'); ?>
		<?php echo $form->textField($model,'cat_hab',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'titulo_eleitoral'); ?>
		<?php echo $form->textField($model,'titulo_eleitoral'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'secao_eleitoral'); ?>
		<?php echo $form->textField($model,'secao_eleitoral'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'zona_eleitoral'); ?>
		<?php echo $form->textField($model,'zona_eleitoral'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comportamento'); ?>
		<?php echo $form->textField($model,'comportamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'om'); ?>
		<?php echo $form->textField($model,'om'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'divisao'); ?>
		<?php echo $form->textField($model,'divisao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subdivisao'); ?>
		<?php echo $form->textField($model,'subdivisao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'secao'); ?>
		<?php echo $form->textField($model,'secao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subsecao'); ?>
		<?php echo $form->textField($model,'subsecao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_inclusao'); ?>
		<?php echo $form->textField($model,'data_inclusao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_alteracao'); ?>
		<?php echo $form->textField($model,'data_alteracao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_apres_om'); ?>
		<?php echo $form->textField($model,'data_apres_om'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_praca'); ?>
		<?php echo $form->textField($model,'data_praca'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->