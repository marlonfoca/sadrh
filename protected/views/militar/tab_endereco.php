<div id='part-block-endereco'></div>

<script>
        function updateEnderecoGrid(data) {
                // display data returned from action
                $("#part-block-endereco").html(data);
                // refresh your grid
                $.fn.yiiGridView.update('endereco-grid');
        }
</script>

<?php echo CHtml::ajaxButton("Insert New",
                              array('militar/TabCreate'),
                              array('data'=>array('id_militar'=>$id_militar, 'action'=>'Endereco'), 'success'=>'updateEnderecoGrid'),
                              array('id'=>'insert-new-endereco', 'name'=>'insert-new-endereco', 'class'=>'btn btn-primary')
                              );
?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
  'id'=>'endereco-grid',
  'dataProvider'=>$model_endereco,
  //'filter'=>$model,
  'selectableRows' => 1,
  'selectionChanged' => 'updateEndereco',
  'pager'=>array('htmlOptions'=> array('class'=>'pagination pagination-sm')),
  'itemsCssClass'=>'table table-striped table-hover',
  'columns'=>array(
    'id',
    'id_uf',
    'id_cidade',
    'bairro',
    'id_tipo',
    'logradouro',
    'numero',
    'complemento',
    'cep',
    'id_militar',
    'data_criacao',
    'resp_alteracao',
    'data_alteracao',
    array(
      'class'=>'CButtonColumn',
    ),
  ),
)); ?>

<script type="text/javascript">
    function updateEndereco(grid_id) {

        var keyId = $.fn.yiiGridView.getSelection(grid_id);
        keyId  = keyId[0]; //above function returns an array with single item, so get the value of the first item

        if (keyId == null) {
          $('#part-block-endereco').html('');
        }
        else{
          $.ajax({
              url: '<?php echo $this->createUrl('TabUpdate'); ?>',
              data: {id: keyId, action: 'endereco'},
              type: 'GET',
              success: function(data) {
                  $('#part-block-endereco').html(data);
              }
          });
        }
    }
</script>