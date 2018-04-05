<?php $__env->startSection('content'); ?>


<div class="content">

<h1>Laporan Pengeluaran </h1>
        <div class="clearfix"></div>

        <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
 
 <!-- OrderDetai -->
<div class="form-group col-sm-12">
    <div class="box-body table-responsive no-padding"  >
      <table class="table table-bordered" id="crud_table" border="3">
            <thead  style="background-color:#999966">
               
                <th>Nama Supplier</th>
                <th>Kode Supplier</th>
                <th>QTY</th>
                <th>Status</th>
                <th>Tanggal</th>
                <th>Deskripsi</th>
                <th>Total</th>
            </thead>
         <?php $__currentLoopData = $lapPG; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       
          <tr class="trbody">
           <td style="background-color:#222d32">
           <?php echo Form::text('nama_supplier',$item->nama_supplier, ['class' => 'form-control jumlah','id'=>'jumlah','readonly'] ); ?> 
            </td>
           <td style="background-color:#222d32">
           <?php echo Form::text('code_supplier',$item->code_supplier, ['class' => 'form-control jumlah','id'=>'jumlah','readonly'] ); ?>  
           </td>
           <td style="background-color:#222d32">
           <?php echo Form::text('jumlah_barang',$item->jumlah_barang, ['class' => 'form-control jumlah','id'=>'jumlah','readonly'] ); ?> 
            </td>
           <td style="background-color:#222d32"><?php echo Form::text('status',$item->status, ['class' => 'form-control jumlah','id'=>'jumlah','readonly'] ); ?>  </td>
            <td style="background-color:#222d32"><?php echo Form::text('tanggal',$item->tanggal, ['class' => 'form-control jumlah','id'=>'jumlah','readonly'] ); ?>  </td>
            <td style="background-color:#222d32"><?php echo Form::textarea('deskripsi',$item->deskripsi, ['class' => 'form-control','readonly'] ); ?>  </td>
            <td style="background-color:#222d32"><?php echo Form::text('total',$item->total, ['class' => 'form-control jumlah','id'=>'jumlah','readonly'] ); ?>  </td>
           
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



  
  <?php echo Form::open(['route'=>'reports.lapPGSheet']); ?>

<div class="form-group col-sm-6">
    <?php echo Form::hidden('start',$start,['class'=>'form-control']); ?>

    <?php echo Form::hidden('end',$end,['class'=>'form-control']); ?>

  <!-- <a  class="btn btn-success">Export Excel</a> -->
  <?php echo Form::submit('Export', ['class' => 'btn btn-success']); ?>


</div>

<?php echo Form::close(); ?>

                    </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>