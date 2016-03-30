<div id='part-block-ferias'></div>

<script>
        function updateFeriasGrid(data) {
                // display data returned from action
                $("#part-block-ferias").html(data);
                // refresh your grid
                $.fn.yiiGridView.update('ferias-grid');
        }
</script>

<?php echo CHtml::ajaxButton("Insert New",
                              array('militar/TabCreate'),
                              array('data'=>array('id_militar'=>$id_militar, 'action'=>'Ferias'), 'success'=>'updateFeriasGrid'),
                              array('id'=>'insert-new-ferias', 'name'=>'insert-new-ferias', 'class'=>'btn btn-primary')
                              );
?>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
  'id'=>'ferias-grid',
  'dataProvider'=>$model_ferias,
  //'filter'=>$model_ferias,
  'selectableRows' => 1,
  'selectionChanged' => 'updateFerias',
  'pager'=>array('htmlOptions'=> array('class'=>'pagination pagination-sm')),
  'itemsCssClass'=>'table table-striped table-hover',
  'columns'=>array(
    'aquisitivo_inicio',
    'aquisitivo_fim',
    'concessivo_inicio',
    'concessivo_fim',
    'ferias_inicio',
    'ferias_fim',
    'n_dias',
    array('name'=>'tipo', 'value'=>'$data->tipo0->nome'),
    array('name'=>'publicado', 'value'=>'$data->publicado0->nome'),
    array(
      'class'=>'CButtonColumn',
      'template'=> '{delete}',

      'buttons'=>array(
          'delete'=> array(
                  'url'=>'Yii::app()->createUrl("ferias/delete", array("id"=>$data->id))',
              ),
          ),
    ),
  ),
));
?>

<script type="text/javascript">
    function updateFerias(grid_id) {

        var keyId = $.fn.yiiGridView.getSelection(grid_id);
        keyId  = keyId[0]; //above function returns an array with single item, so get the value of the first item

        if (keyId == null) {
          $('#part-block-ferias').html('');
        }
        else{
          $.ajax({
              url: '<?php echo $this->createUrl('TabUpdate'); ?>',
              data: {id: keyId, action: 'Ferias'},
              type: 'GET',
              success: function(data) {
                  $('#part-block-ferias').html(data);
              }
          });
        }
    }
</script>