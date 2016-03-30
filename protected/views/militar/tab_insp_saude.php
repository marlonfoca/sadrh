<div id='part-block-inspSaude'></div>

<script>
        function updateinspSaudeGrid(data) {
                // display data returned from action
                $("#part-block-inspSaude").html(data);
                // refresh your grid
                $.fn.yiiGridView.update('inspSaude-grid');
        }
</script>

<?php echo CHtml::ajaxButton("Insert New",
                              array('militar/TabCreate'),
                              array('data'=>array('id_militar'=>$id_militar, 'action'=>'InspSaude'), 'success'=>'updateinspSaudeGrid'),
                              array('id'=>'insert-new-inspSaude', 'name'=>'insert-new-inspSaude', 'class'=>'btn btn-primary')
                              );
?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'inspSaude-grid',
	'dataProvider'=>$model_insp_saude,
	//'filter'=>$model,
	'selectableRows' => 1,
	'selectionChanged' => 'updateInspSaude',
  'pager'=>array('htmlOptions'=> array('class'=>'pagination pagination-sm')),
  'itemsCssClass'=>'table table-striped table-hover',
	'columns'=>array(
		'id',
		'id_militar',
		'letra',
		'secao',
		'data',
		'boletim',
		/*
		'validade',
		'parecer',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

<script type="text/javascript">
    function updateInspSaude(grid_id) {

        var keyId = $.fn.yiiGridView.getSelection(grid_id);
        keyId  = keyId[0]; //above function returns an array with single item, so get the value of the first item

        if (keyId == null) {
          $('#part-block-inspSaude').html('');
        }
        else{
          $.ajax({
              url: '<?php echo $this->createUrl('InspSaudeUpdate'); ?>',
              data: {id: keyId},
              type: 'GET',
              success: function(data) {
                  $('#part-block-inspSaude').html(data);
              }
          });
        }
    }
</script>