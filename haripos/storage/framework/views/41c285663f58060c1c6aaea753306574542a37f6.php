<!-- Order Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::hidden('order_id', 'Order Id:'); ?>

    <?php echo Form::hidden('order_id', $order->id, ['class' => 'form-control']); ?>

    <?php echo Form::label('code_order', 'Code Order:'); ?>

    <?php echo Form::text('code_order', $order->code_order, ['class' => 'form-control','readonly']); ?>

</div>

<!-- Tanggal Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('tanggal', 'Tanggal:'); ?>

    <?php echo Form::date('tanggal', $now, ['class' => 'form-control']); ?>

</div>

<!-- Tanggal Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nama_customer', 'Nama Customer:'); ?>

    <?php echo Form::text('nama_customer', $order->nama_customer, ['class' => 'form-control']); ?>

</div>


<!-- OrderDetai -->
<div class="form-group col-sm-12">
    <div class="box-body table-responsive no-padding"  >
      <table class="table table-bordered" id="crud_table" border="3">
            <thead>
               
                <th>Nama Barang</th>
                <th>Kode Barang</th>
                <th>Qty</th>
                <th>Harga Satuan</th>
                <th>total</th>
              <!--   <th>Aksi</th> -->
            </thead>
         <?php $__currentLoopData = $orderDetail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr class="trbody">
           <td><?php echo Form::text('nama_barang',$item->nama_barang, ['class' => 'form-control jumlah','id'=>'jumlah','readonly'] ); ?>  </td>
           <td><?php echo Form::text('code_barang',$item->code_barang, ['class' => 'form-control jumlah','id'=>'jumlah','readonly'] ); ?>  </td>
           <td><?php echo Form::text('qty',$item->qty, ['class' => 'form-control jumlah','id'=>'jumlah','readonly'] ); ?>  </td>
           <td><?php echo Form::text('harga',$item->harga, ['class' => 'form-control jumlah','id'=>'jumlah','readonly'] ); ?>  </td>
           <td><?php echo Form::text('subtotal',$item->subtotal, ['class' => 'form-control jumlah','id'=>'jumlah','readonly'] ); ?>  </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </table>


           <div class="form-group col-sm-8 pull-right">
  
            <!-- Jumlah barang  -->
            <div class="form-group col-sm-6 ">
                <?php echo Form::label('jumlah_barang', 'Jumlah Barang:'); ?>

                <?php echo Form::text('jumlah_barang',$order->jumlah_barang, ['class' => 'form-control jumlah','id'=>'jumlah','readonly'] ); ?>  
            </div>


            <!-- TOTAL Harga -->
            <div class="form-group col-sm-6 ">
                <?php echo Form::label('total', 'Total Harga:'); ?>

                <?php echo Form::text('total',$order->total, ['class' => 'form-control total','id'=>'total','readonly'] ); ?>

            </div>


            </div>

     <div>
    
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('tipe_pembayaran', 'Tipe Pembayaran:'); ?>

    <?php echo Form::select('tipe_pembayaran', [ 'tunai' => 'tunai','debet' => 'debet'], null, ['class' => 'form-control']); ?>

</div>

<!-- Bayar Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('bayar', 'Bayar:'); ?>

    <?php echo Form::text('bayar', null, ['class' => 'form-control','id'=>'num1']); ?>

</div>

<!-- Kembalian Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('kembalian', 'Kembalian:'); ?>

    <?php echo Form::text('kembalian', null, ['class' => 'form-control','id'=>'kembalian','readonly']); ?>

</div>

<!-- Total Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('total', 'Total:'); ?>

    <?php echo Form::text('total', $order->total, ['class' => 'form-control','id'=>'num2','readonly']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>



    <a href="<?php echo route('pembayarans.index'); ?>" class="btn btn-default">Cancel</a>
</div>

<?php 

$listOrder = json_encode(@$orderDetail);
?>


<?php $__env->startSection('scripts'); ?>
<script>
   $(document).ready(function() {
    //this calculates values automatically 
    sum();
    $("#num1, #num2").on("keydown keyup", function() {
        sum();
    });
});

   function sum() {
            var num1 = document.getElementById('num1').value;
            var num2 = document.getElementById('num2').value;
            var result = parseInt(num1) - parseInt(num2);
            // var result1 = parseInt(num2) - parseInt(num1);
            if (!isNaN(result)) {
                document.getElementById('kembalian').value = result;
                // document.getElementById('subt').value = result1;
            }
        }

</script>
<script>
$('Form').submit(function(e){
        //e.preventDefault();
        var route = "<?php echo e(URL('print')); ?>";
        var detail=<?php echo $listOrder ?>;
         console.log(detail)

        //var detData=
        var formData = {

           

           
                _token:"<?php echo e(csrf_token()); ?>",
                code_order:$('[name="code_order"]').val(),
                tanggal:$('[name="tanggal"]').val(),
                nama_customer:$('[name="nama_customer"]').val(),
                barang:detail,
                // qty:$('[name="qty"]').val(),
                // harga:$('[name="harga"]').val(),
                // nama_barang:$('[name="nama_barang"]').val(),
                kembalian:$('[name="kembalian"]').val(),
                bayar:$('[name="bayar"]').val(),
                total:$('[name="total"]').val(),
        };
        console.log(formData)
        
        $.post(route, formData, function(data){
            console.log(data)
            if(data.success == 'true')
                alert('Cetak Data Berhasil...');
            else
                alert('Cetak Data GAGAL...');
        });
    });
</script>

<?php $__env->stopSection(); ?>