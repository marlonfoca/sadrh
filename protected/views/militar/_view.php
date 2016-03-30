<?php
/* @var $this MilitarController */
/* @var $model Militar */

$this->breadcrumbs=array(
	'Militars'=>array('index'),
);

$this->menu=array(
	array('label'=>'Create Militar', 'url'=>array('create'), 'visible'=>Yii::app()->user->isInRole('ADMIN'))
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#militar-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'militar-grid',
	'dataProvider'=>$model->searchIndex(),
	'filter'=>$model,
	'selectableRows' => 1,
	'selectionChanged' => 'modalView',
	'htmlOptions'=>array('class'=>'form-group'),
	//'filterCssClass'=>'form-control',
	'itemsCssClass'=>'table table-striped table-hover',
	'pagerCssClass' => 'pagination',
	'pager'=>array('htmlOptions'=> array('class'=>'pagination')),
	
	'columns'=>array(
		'saram',
		array('name'=>'siglaPosto', 'value'=>'$data->idPosto->sigla'),
		array('name'=>'siglaQuadro', 'value'=>'$data->idQuadro->sigla'),
		array('name'=>'nomeEspecialidade', 'value'=>'$data->idEspecialidade->nome'),
		'nome_completo',
		'nome_guerra',
	),
));
?>

<!-- Modal -->
<div id="myModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Close</button>
      </div>
      <div id="modal-body" class="modal-body">

      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

    function modalView(grid_id) {

        var keyId = $.fn.yiiGridView.getSelection(grid_id);
        keyId  = keyId[0]; //above function returns an array with single item, so get the value of the first item
        if (keyId !== undefined) {
          $.ajax({
              url: '<?php echo $this->createUrl('/militar'); ?>/'+keyId,
              type: 'GET',
              success: function(data) {

              	$('#modal-body').html(data);              	
                $('#myModal').modal('show');
                
                  
              }
          });        	
        };
    }
</script>