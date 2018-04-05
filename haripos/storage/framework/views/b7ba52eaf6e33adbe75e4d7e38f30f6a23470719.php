<?php $__env->startSection('content'); ?>


<div class="content">

<h1>Laporan Harian </h1>
        <div class="clearfix"></div>

        <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
 
 <!-- OrderDetai -->
<div class="form-group col-sm-12">
    <div class="box-body table-responsive no-padding"  >
      <table class="table table-bordered" id="crud_table" border="3">
            <thead>
               
                <th>Nama Customer</th>
                <th>Kode Order</th>
                <th>QTY</th>
                <th>Subtotal</th>
                <th>Status</th>
                <th>Tanggal</th>
            </thead>
         <?php $__currentLoopData = $lapHar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr class="trbody">
           <td>
           <?php echo Form::text('nama_customer',$item->nama_customer, ['class' => 'form-control jumlah','id'=>'jumlah','readonly'] ); ?> 
            </td>
           <td>
           <?php echo Form::text('code_order',$item->code_order, ['class' => 'form-control jumlah','id'=>'jumlah','readonly'] ); ?>  
           </td>
           <td>
           <?php echo Form::text('jumlah_barang',$item->jumlah_barang, ['class' => 'form-control jumlah','id'=>'jumlah','readonly'] ); ?> 
            </td>
           <td><?php echo Form::text('total',$item->total, ['class' => 'form-control jumlah','id'=>'jumlah','readonly'] ); ?>  </td>
           <td><?php echo Form::text('status',$item->status, ['class' => 'form-control jumlah','id'=>'jumlah','readonly'] ); ?>  </td>
            <td><?php echo Form::text('tanggal',$item->tanggal, ['class' => 'form-control jumlah','id'=>'jumlah','readonly'] ); ?>  </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </table>
   </div>
 </div>


<!-- Jumlah barang  -->
<div class="form-group col-sm-6 ">
    <?php echo Form::label('totBar', 'Total Barang :'); ?>

    <?php echo Form::text('totBar',$totBar, ['class' => 'form-control jumlah','id'=>'jumlah','readonly'] ); ?>  
</div>


<!-- TOTAL Harga -->
<div class="form-group col-sm-6 ">
    <?php echo Form::label('totHar', 'Total :'); ?>

    <?php echo Form::text('totHar',number_format($totHar, 2)  , ['class' => 'form-control total','id'=>'total','readonly'] ); ?>

</div>

<div class="form-group col-sm-6">
  <a href="<?php echo e(url('excelPJH')); ?>" class="btn btn-success">Export Excel</a>
</div>




                    </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>