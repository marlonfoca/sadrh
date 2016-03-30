<?php
/* @var $this MilitarController */
/* @var $model Militar */
/* @var $form CActiveForm */
?>

<?php Func::isAjaxRequest(); ?>

<div class="form-group">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'militar-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal')
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php //echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'saram', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
			<?php echo $form->textField($model,'saram', array('class'=>'form-control')); ?>
			<?php 
			echo $form->error($model,'saram'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'id_posto', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
			<?php echo $form->dropdownlist($model,
										'id_posto', 
										$model->getMenuPosto(),
										array('empty'=>'Selecione',
											  'class'=>'form-control')); ?>
			<?php echo $form->error($model,'id_posto'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'id_quadro', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
			<?php echo $form->dropdownlist($model,
											'id_quadro',
											$model->getMenuQuadro(),
											array('empty'=>'Selecione', 'class'=>'form-control')
											); ?>
			<?php echo $form->error($model,'id_quadro'); ?>		
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'id_especialidade', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
			<?php echo $form->dropdownlist($model,'id_especialidade', $model->getMenuEspecialidade(), array('empty'=>'Selecione', 'class'=>'form-control')); ?>
			<?php echo $form->error($model,'id_especialidade'); ?>
		</div>
		
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'nome_completo', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
			<?php echo $form->textField($model,'nome_completo',array('size'=>60,'maxlength'=>300, 'class'=>'form-control')); ?>
			<?php echo $form->error($model,'nome_completo'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'nome_guerra', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
			<?php echo $form->textField($model,'nome_guerra',array('size'=>60,'maxlength'=>300, 'class'=>'form-control')); ?>
			<?php echo $form->error($model,'nome_guerra'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'foto', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
			<?php echo $form->textField($model,'foto',array('size'=>60,'maxlength'=>300, 'class'=>'form-control')); ?>
			<?php echo $form->error($model,'foto'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'antiguidade', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
			<?php echo $form->textField($model,'antiguidade', array('class'=>'form-control')); ?>
			<?php echo $form->error($model,'antiguidade'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'nascimento', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
			<?php
				$this->widget('CMaskedTextField', array(
				'model' => $model,
				'attribute' => 'nascimento',
				'mask' => '99/99/9999',
				'htmlOptions' => array('size' => 10, 'class'=>'form-control')
				));
			?>
			<?php echo $form->error($model,'nascimento'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php 
			$htmlOptions=array(
				'ajax'=>array(
					'url'=>$this->createUrl('militar/cidade'),
					'type'=>'post',
					'update'=>'#Militar_naturalidade',
					),'prompt'=>'Selecione',
					'class'=>'form-control'
				);
		?>
		<?php echo $form->labelEx($model,'uf_naturalidade', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
			<?php echo $form->dropdownlist($model,'uf_naturalidade',$model->getMenuEstados(), $htmlOptions); ?>
			<?php echo $form->error($model,'uf_naturalidade'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'naturalidade', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
			<?php

			$lista_cidade = array();
			if (isset($model->naturalidade)) {
				$lista_cidade = $model->getMenuCidades($model->uf_naturalidade);
			}			

			echo $form->dropdownlist($model,'naturalidade', $lista_cidade, array('class'=>'form-control')); ?>
			<?php echo $form->error($model,'naturalidade'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'estado_civil', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
			<?php echo $form->dropdownlist($model,'estado_civil', $model->getMenuEstadoCivil(), array('prompt'=>'Selecione', 'class'=>'form-control')); ?>
			<?php echo $form->error($model,'estado_civil'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'identidade', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
			<?php echo $form->textField($model,'identidade',array('size'=>50,'maxlength'=>50, 'class'=>'form-control')); ?>
			<?php echo $form->error($model,'identidade'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'cpf', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
			<?php
				$this->widget('CMaskedTextField', array(
				'model' => $model,
				'attribute' => 'cpf',
				'mask' => '999.999.999-99',
				'htmlOptions' => array('size' => 15, 'class'=>'form-control')
				));
			?>
			<?php echo $form->error($model,'cpf'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'rc_ra', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
			<?php echo $form->textField($model,'rc_ra', array('class'=>'form-control')); ?>
			<?php echo $form->error($model,'rc_ra'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'pasep', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
			<?php echo $form->textField($model,'pasep', array('class'=>'form-control')); ?>
			<?php echo $form->error($model,'pasep'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'sexo', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
			<?php echo $form->dropdownlist($model,'sexo', $model->getSexo(), array('empty'=>'Selecione', 'class'=>'form-control')); ?>
			<?php echo $form->error($model,'sexo'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'tipo_sanguineo', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
			<?php echo $form->dropdownlist($model,'tipo_sanguineo', $model->getSangue(), array('empty'=>'Selecione', 'class'=>'form-control')); ?>
			<?php echo $form->error($model,'tipo_sanguineo'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'carteira_motorista', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
			<?php echo $form->textField($model,'carteira_motorista', array('class'=>'form-control')); ?>
			<?php echo $form->error($model,'carteira_motorista'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'cat_hab', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
			<?php echo $form->textField($model,'cat_hab',array('size'=>2,'maxlength'=>2, 'class'=>'form-control')); ?>
			<?php echo $form->error($model,'cat_hab'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'titulo_eleitoral', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
			<?php echo $form->textField($model,'titulo_eleitoral', array('class'=>'form-control')); ?>
			<?php echo $form->error($model,'titulo_eleitoral'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'secao_eleitoral', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
			<?php echo $form->textField($model,'secao_eleitoral', array('class'=>'form-control')); ?>
			<?php echo $form->error($model,'secao_eleitoral'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'zona_eleitoral', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
			<?php echo $form->textField($model,'zona_eleitoral', array('class'=>'form-control')); ?>
			<?php echo $form->error($model,'zona_eleitoral'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'comportamento', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
			<?php echo $form->dropdownlist($model,'comportamento', $model->getComportamento(), array('empty'=>'Selecione', 'class'=>'form-control')); ?>
			<?php echo $form->error($model,'comportamento'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php 
			$htmlOptions=array(
				'ajax'=>array(
					'url'=>$this->createUrl('militar/divisao'),
					'type'=>'post',
					'update'=>'#Militar_divisao',
					'beforeSend'=>'function(){
						$("#Militar_divisao").find("option").remove();
						$("#Militar_subdivisao").find("option").remove();
						$("#Militar_secao").find("option").remove();
						$("#Militar_subsecao").find("option").remove();
					}',
					),'prompt'=>'Selecione',
					'class'=>'form-control'
				);
		?>
		<?php echo $form->labelEx($model,'om', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
			<?php echo $form->dropdownlist($model,'om', $model->getOm(), $htmlOptions); ?>
			<?php echo $form->error($model,'om'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php 
			$htmlOptions=array(
				'ajax'=>array(
					'url'=>$this->createUrl('militar/subdivisao'),
					'type'=>'post',
					'update'=>'#Militar_subdivisao',
					'beforeSend'=>'function(){
						$("#Militar_subdivisao").find("option").remove();
						$("#Militar_secao").find("option").remove();
						$("#Militar_subsecao").find("option").remove();
					}',
					),'prompt'=>'Selecione',
					'class'=>'form-control'
				);
		?>
		<?php echo $form->labelEx($model,'divisao', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
			<?php 

			$lista_divisao = array();
			if (isset($model->divisao)) {
				$lista_divisao = $model->getDivisao();
			}

			echo $form->dropdownlist($model,'divisao', $lista_divisao, $htmlOptions); ?>
			<?php echo $form->error($model,'divisao'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php 
			$htmlOptions=array(
				'ajax'=>array(
					'url'=>$this->createUrl('militar/secao'),
					'type'=>'post',
					'update'=>'#Militar_secao',
					'beforeSend'=>'function(){
						$("#Militar_secao").find("option").remove();
						$("#Militar_subsecao").find("option").remove();
					}',
					),'prompt'=>'Selecione',
					'class'=>'form-control'
				);
		?>
		<?php echo $form->labelEx($model,'subdivisao', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
			<?php 
			
			$lista_subdivisao = array();
			if (isset($model->subdivisao)) {
				$lista_subdivisao = $model->getsubDivisao();
			}
			
			echo $form->dropdownlist($model,'subdivisao', $lista_subdivisao, $htmlOptions); ?>
			<?php echo $form->error($model,'subdivisao'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php 
			$htmlOptions=array(
				'ajax'=>array(
					'url'=>$this->createUrl('militar/subsecao'),
					'type'=>'post',
					'update'=>'#Militar_subsecao',
					),'prompt'=>'Selecione',
					'class'=>'form-control'
				);
		?>
		<?php echo $form->labelEx($model,'secao', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
			<?php 

			$lista_secao = array();
			if (isset($model->secao)) {
				$lista_secao = $model->getSecao();
			}

			echo $form->dropdownlist($model,'secao', $lista_secao, $htmlOptions); ?>
			<?php echo $form->error($model,'secao'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'subsecao', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
			<?php 
			
			$lista_subsecao = array();
			if (isset($model->subsecao)) {
				$lista_subsecao = $model->getSubsecao();
			}

			echo $form->dropdownlist($model,'subsecao', $lista_subsecao, array('empty'=>'Selecione', 'class'=>'form-control')); ?>
			<?php echo $form->error($model,'subsecao'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'data_apres_om', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
			<?php 
				$this->widget('zii.widgets.jui.CJuiDatePicker', array(
								'attribute'=>'data_apres_om',
								'model'=>$model,
								'language'=>'pt',
								'options'=>array(
									'dateFormat'=>'dd/mm/yy',									
									),
								'htmlOptions' => array('class'=>'form-control'),
				));
			?>
			<?php echo $form->error($model,'data_apres_om'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'data_praca', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
			<?php
				$this->widget('CMaskedTextField', array(
				'model' => $model,
				'attribute' => 'data_praca',
				'mask' => '99/99/9999',
				'htmlOptions' => array('size' => 10, 'class'=>'form-control')
				));
			?>
			<?php echo $form->error($model,'data_praca'); ?>
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-success')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script type="text/javascript">
	$("input").keyup(function(){
	    this.value = this.value.toUpperCase();
	});
</script>