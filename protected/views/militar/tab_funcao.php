<div id='part-block-funcao'></div>

<script>
        function updateFuncaoGrid(data) {
                // display data returned from action
                $("#part-block-funcao").html(data);
                // refresh your grid
                $.fn.yiiGridView.update('funcao-grid');
        }
</script>

<?php echo CHtml::ajaxButton("Insert New",
                              array('militar/TabCreate'),
                              array('data'=>array('id_militar'=>$id_militar, 'action'=>'Funcao'), 'success'=>'updateFuncaoGrid'),
                              array('id'=>'insert-new-funcao', 'name'=>'insert-new-funcao', 'class'=>'btn btn-primary')
                              );
?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'funcao-grid',
	'dataProvider'=>$model_funcao,
	//'filter'=>$model,
	'selectableRows' => 1,
	'selectionChanged' => 'updateFuncao',
  'pager'=>array('htmlOptions'=> array('class'=>'pagination pagination-sm')),
  'itemsCssClass'=>'table table-striped table-hover',
	'columns'=>array(
		'id',
		'id_militar',
		'id_funcoes',
		'data_inicio',
		'data_fim',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

<script type="text/javascript">
    function updateFuncao(grid_id) {

        var keyId = $.fn.yiiGridView.getSelection(grid_id);
        keyId  = keyId[0]; //above function returns an array with single item, so get the value of the first item

        if (keyId == null) {
          $('#part-block-funcao').html('');
        }
        else{
          $.ajax({
              url: '<?php echo $this->createUrl('TabUpdate'); ?>',
              data: {id: keyId},
              type: 'GET',
              success: function(data) {
                  $('#part-block-funcao').html(data);
              }
          });
        }
    }
</script>