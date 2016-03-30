<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css" rel="stylesheet">

        <!-- CSS add por Marlon -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/master.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/starter-template.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/sticky-footer-navbar.css" rel="stylesheet">

</head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo Yii::app()->baseUrl; ?>"><?php echo CHtml::encode(Yii::app()->name); ?></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <?php $this->widget('zii.widgets.CMenu',array(
              'htmlOptions'=>array('class' => 'nav navbar-nav'),
              'items'=>array(
                //array('label'=>'Home', 'url'=>array('/site/index')),
                array('label'=>'Pessoal', 'url'=>array('/militar/index'), 'visible'=>!Yii::app()->user->isGuest),
                
                //array('label'=>'Cidade', 'url'=>array('/cidade/index'), 'visible'=>Yii::app()->user->isInRole('ADMIN')),
                //array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                //array('label'=>'Contact', 'url'=>array('/site/contact')),
                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
              ),
            ));
          ?>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <?php if(($msgs=Yii::app()->user->getFlashes()) !==null):?>
      <?php foreach ($msgs as $type => $message):?>
        <div class="alert alert-<?php echo $type?>">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4><?php echo ucfirst($type)?>!</h4>
            <?php echo $message?>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>

    <?php if(isset($this->breadcrumbs)):?>
        <div class="container">
          <div class="breadcrumbs">
            <h5>
              <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                'links'=>$this->breadcrumbs,
              )); ?><!-- breadcrumbs -->
            </h5>
          </div>
        </div>
    <?php endif?>

    <div class="container">

        <?php echo $content; ?>

    </div><!-- /.container -->


    <footer class="footer">
      <div class="container">
        Copyright &copy; <?php echo date('Y'); ?> by PAMA LS.<br/>
        All Rights Reserved.<br/>
        Powered by 3S Marlon.
      </div>
    </footer>

<?php 
    Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/bootstrap.js',CClientScript::POS_END);
    //Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/spin.js',CClientScript::POS_END);
?>
    
</body></html>