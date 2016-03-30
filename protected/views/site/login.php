<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */
?>

<head>
    <!-- Custom styles for this template -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/signin.css" rel="stylesheet">
  </head>


<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'htmlOptions'=>array('class'=>'form-signin'),
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

<h2 class="form-signin-heading">Login</h2>

	<div>
		<?php echo $form->labelEx($model,'username', array('class'=>'sr-only')); ?>
		<?php echo $form->textField($model,'username', array('class'=>'form-control', 'placeholder'=>'login da rede')); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'password', array('class'=>'sr-only')); ?>
		<?php echo $form->passwordField($model,'password', array('class'=>'form-control', 'placeholder'=>'senha da rede')); ?>
		<?php echo $form->error($model,'password'); ?>
		<p class="hint">
			Obs: Usuario e senha são os mesmos usados na REDE do PAMA LS.
		</p>
	</div>

	<div>
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div>
		<?php echo CHtml::submitButton('Login', array('class'=>'btn btn-lg btn-primary btn-block')); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->