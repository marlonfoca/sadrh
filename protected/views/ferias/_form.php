<?php
/* @var $this FeriasController */
/* @var $model Ferias */
/* @var $form CActiveForm */
?>

<?php Func::isAjaxRequest(); ?>

<div class="form-group">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ferias-form',
	//'action'=>CController::createUrl('FeriasSave'),
	//'method'=>'GET',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	//'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-danger')); ?>

	<?php //echo $form->hiddenField($model,'id'); ?>

<div class="row">
	<div >
		<?php echo $form->labelEx($model,'aquisitivo_inicio'); ?>
		<?php 
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
							'attribute'=>'aquisitivo_inicio',
							'model'=>$model,
							'language'=>'pt',
							'options'=>array(
								'dateFormat'=>'dd/mm/yy',
								),
			));
		?>
		<?php echo $form->error($model,'aquisitivo_inicio'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'aquisitivo_fim'); ?>
		<?php //echo $form->textField($model,'aquisitivo_fim'); ?>
		<?php
			$this->widget('CMaskedTextField', array(
			'model' => $model,
			'attribute' => 'aquisitivo_fim',
			'mask' => '99/99/9999',
			'htmlOptions' => array('size' => 10)
			));
		?>
		<?php echo $form->error($model,'aquisitivo_fim'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'concessivo_inicio'); ?>
		<?php //echo $form->textField($model,'concessivo_inicio'); ?>
		<?php
			$this->widget('CMaskedTextField', array(
			'model' => $model,
			'attribute' => 'concessivo_inicio',
			'mask' => '99/99/9999',
			'htmlOptions' => array('size' => 10)
			));
		?>
		<?php echo $form->error($model,'concessivo_inicio'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'concessivo_fim'); ?>
		<?php //echo $form->textField($model,'concessivo_fim'); ?>
		<?php
			$this->widget('CMaskedTextField', array(
			'model' => $model,
			'attribute' => 'concessivo_fim',
			'mask' => '99/99/9999',
			'htmlOptions' => array('size' => 10)
			));
		?>
		<?php echo $form->error($model,'concessivo_fim'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'ferias_inicio'); ?>
		<?php
			$this->widget('CMaskedTextField', array(
			'model' => $model,
			'attribute' => 'ferias_inicio',
			'mask' => '99/99/9999',
			'htmlOptions' => array('size' => 10)
			));
		?>
		<?php echo $form->error($model,'ferias_inicio'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'ferias_fim'); ?>
		<?php
			$this->widget('CMaskedTextField', array(
			'model' => $model,
			'attribute' => 'ferias_fim',
			'mask' => '99/99/9999',
			'htmlOptions' => array('size' => 10)
			));
		?>
		<?php echo $form->error($model,'ferias_fim'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'n_dias'); ?>
		<?php echo $form->textField($model,'n_dias', array('size' => 2)); ?>
		<?php echo $form->error($model,'n_dias'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php //echo $form->textField($model,'tipo'); ?>
		<?php echo $form->dropdownlist($model,'tipo', CHtml::listData(TipoFerias::model()->findAll(), 'id','nome'), array('empty'=>'Selecione')); ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>

	<div >
		<?php //echo $form->labelEx($model,'id_militar'); ?>
		<?php echo $form->hiddenField($model,'id_militar'); ?>
		<?php //echo $form->textField($model,'id_militar'); ?>
		<?php //echo $form->error($model,'id_militar'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'publicado'); ?>
		<?php echo $form->dropdownlist($model,'publicado', CHtml::listData(Simnao::model()->findAll(), 'id','nome')); ?>
		<?php echo $form->error($model,'publicado'); ?>
	</div>

	<div class="">
		<?php $myclass = get_class($model); ?>

		<?php
		  	echo CHtml::ajaxsubmitButton(
									      $model->isNewRecord ? 'Create' : 'Save',
									      array(),
									      array('update'=>'#part-block-ferias', 'success'=>'updateFeriasGrid'),
									      array('id'=>'save-button-'.uniqid(), 'live'=>false, 'class'=>'btn btn-success')
									    );
		?>
	</div>
</div>
<?php $this->endWidget(); ?>

</div><!-- form -->