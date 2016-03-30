<div id='part-block-promocao'></div>

<script>
        function updatePromocaoGrid(data) {
                // display data returned from action
                $("#part-block-promocao").html(data);
                // refresh your grid
                $.fn.yiiGridView.update('promocao-grid');
        }
</script>

<?php echo CHtml::ajaxButton("Insert New",
                              array('militar/TabCreate'),
                              array('data'=>array('id_militar'=>$id_militar, 'action'=>'Promocao'), 'success'=>'updatePromocaoGrid'),
                              array('id'=>'insert-new-promocao', 'name'=>'insert-new-promocao', 'class'=>'btn btn-primary')
                              );
?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'promocao-grid',
	'dataProvider'=>$model_promocao,
  //'filter'=>$model_promocao,
	'selectableRows' => 1,
	'selectionChanged' => 'updatePromocao',
  'pager'=>array('htmlOptions'=> array('class'=>'pagination pagination-sm')),
  'itemsCssClass'=>'table table-striped table-hover',
	'columns'=>array(
		//'id',
		//'id_militar',
		array('name'=>'id_posto', 'value'=>'$data->idPosto->sigla'),
		//'id_posto',
		'data',
		array(
			'class'=>'CButtonColumn',
		),
	),
));
?>

<script type="text/javascript">
    function updatePromocao(grid_id) {

        var keyId = $.fn.yiiGridView.getSelection(grid_id);
        keyId  = keyId[0]; //above function returns an array with single item, so get the value of the first item

        if (keyId == null) {
          $('#part-block-promocao').html('');
        }
        else{
          $.ajax({
              url: '<?php echo $this->createUrl('PromocaoUpdate'); ?>',
              data: {id: keyId},
              type: 'GET',
              success: function(data) {
                  $('#part-block-promocao').html(data);
              }
          });
        }
    }
</script>