<div id='part-block-medalha'></div>

<script>
        function updateMedalhaGrid(data) {
                // display data returned from action
                $("#part-block-medalha").html(data);
                // refresh your grid
                $.fn.yiiGridView.update('medalha-grid');
        }
</script>

<?php echo CHtml::ajaxButton("Insert New",
                              array('militar/TabCreate'),
                              array('data'=>array('id_militar'=>$id_militar, 'action'=>'Medalha'), 'success'=>'updateMedalhaGrid'),
                              array('id'=>'insert-new-medalha', 'name'=>'insert-new-medalha', 'class'=>'btn btn-primary')
                              );
?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'medalha-grid',
	'dataProvider'=>$model_medalha,
	'selectableRows' => 1,
	'selectionChanged' => 'updateMedalha',
  'pager'=>array('htmlOptions'=> array('class'=>'pagination pagination-sm')),
  'itemsCssClass'=>'table table-striped table-hover',
	'columns'=>array(
		'id',
		'id_militar',
		'tipo',
		'data',
		'boletim',
		array(
			'class'=>'CButtonColumn',
		),
	),
));
?>

<script type="text/javascript">
    function updateMedalha(grid_id) {

        var keyId = $.fn.yiiGridView.getSelection(grid_id);
        keyId  = keyId[0]; //above function returns an array with single item, so get the value of the first item

        if (keyId == null) {
          $('#part-block-medalha').html('');
        }
        else{
          $.ajax({
              url: '<?php echo $this->createUrl('TabUpdate'); ?>',
              data: {id: keyId},
              type: 'GET',
              success: function(data) {
                  $('#part-block-medalha').html(data);
              }
          });
        }
    }
</script>