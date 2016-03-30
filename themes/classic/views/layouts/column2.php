<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

	<div class="row-fluid">
		<div class="span text-right">
			<?php 
				$this->widget('zii.widgets.CMenu', array(
					'items'=>$this->menu,
					'htmlOptions'=>array('class'=>'nav nav-pills navbar-right'),
				));
			 ?>
		</div>
	</div>

	<div class="span">
		<div id="content">
			<?php echo $content; ?>
		</div><!-- content -->
	</div>

<?php $this->endContent(); ?>