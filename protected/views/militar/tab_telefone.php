<div id='part-block-telefone'></div>

<script>
        function updateTelefoneGrid(data) {
                // display data returned from action
                $("#part-block-telefone").html(data);
                // refresh your grid
                $.fn.yiiGridView.update('telefone-grid');
        }
</script>

<?php echo CHtml::ajaxButton("Insert New",
                              array('militar/TabCreate'),
                              array('data'=>array('id_militar'=>$id_militar, 'action'=>'Telefone'), 'success'=>'updateTelefoneGrid'),
                              array('id'=>'insert-new-telefone', 'name'=>'insert-new-telefone', 'class'=>'btn btn-primary')
                              );
?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
  'id'=>'telefone-grid',
  'dataProvider'=>$model_telefone,
  //'filter'=>$model,
  'selectableRows' => 1,
  'selectionChanged' => 'updateTelefone',
  'pager'=>array('htmlOptions'=> array('class'=>'pagination pagination-sm')),
  'itemsCssClass'=>'table table-striped table-hover',
  'columns'=>array(
    'id',
    'id_militar',
    'tipo',
    'numero',
    'data_criacao',
    'resp_alteracao',
    'data_alteracao',
    array(
      'class'=>'CButtonColumn',
    ),
  ),
)); ?>

<script type="text/javascript">
    function updateTelefone(grid_id) {

        var keyId = $.fn.yiiGridView.getSelection(grid_id);
        keyId  = keyId[0]; //above function returns an array with single item, so get the value of the first item

        if (keyId == null) {
          $('#part-block-telefone').html('');
        }
        else{
          $.ajax({
              url: '<?php echo $this->createUrl('TabUpdate'); ?>',
              data: {id: keyId, action: 'telefone'},
              type: 'GET',
              success: function(data) {
                  $('#part-block-telefone').html(data);
              }
          });
        }
    }
</script>