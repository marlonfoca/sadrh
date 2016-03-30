<div id='part-block-engajamento'></div>

<script>
        function updateEngajamentoGrid(data) {
                // display data returned from action
                $("#part-block-engajamento").html(data);
                // refresh your grid
                $.fn.yiiGridView.update('engajamento-grid');
        }
</script>

<?php echo CHtml::ajaxButton("Insert New",
                              array('militar/TabCreate'),
                              array('data'=>array('id_militar'=>$id_militar, 'action'=>'Engajamento'), 'success'=>'updateEngajamentoGrid'),
                              array('id'=>'insert-new-engajamento', 'name'=>'insert-new-engajamento', 'class'=>'btn btn-primary')
                              );
?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'engajamento-grid',
	'dataProvider'=>$model_engajamento,
	'selectableRows' => 1,
	'selectionChanged' => 'updateEngajamento',
  'pager'=>array('htmlOptions'=> array('class'=>'pagination pagination-sm')),
  'itemsCssClass'=>'table table-striped table-hover',
	'columns'=>array(
		'id',
		'id_militar',
		'tipo',
		'data_inicio',
		'data_termino',
		'observacao',
		//'id',
		//'id_militar',
		//array('name'=>'id_posto', 'value'=>'$data->idPosto->sigla'),
		//'id_posto',
		//'data',
		array(
			'class'=>'CButtonColumn',
		),
	),
));
?>

<script type="text/javascript">
    function updateEngajamento(grid_id) {

        var keyId = $.fn.yiiGridView.getSelection(grid_id);
        keyId  = keyId[0]; //above function returns an array with single item, so get the value of the first item

        if (keyId == null) {
          $('#part-block-engajamento').html('');
        }
        else{
          $.ajax({
              url: '<?php echo $this->createUrl('TabUpdate'); ?>',
              data: {id: keyId},
              type: 'GET',
              success: function(data) {
                  $('#part-block-engajamento').html(data);
              }
          });
        }
    }
</script>