<div class="row print-pdf">
    <div class="report-page">
        <div class="col-md-12">
            <h2 class="text-center" colspan="6"  style="text-transform: uppercase; margin: 30px; text-align: center;">LAPORAN PENJUALAN HARIAN</h2>
      <tr>
        <td colspan="3">Penerimaan dari Tanggal <?php echo e($tgl); ?></td>
      </tr>
       <table class="table table-bordered" >
            <tr>
            <th colspan="1"  style="background-color: #d1e0e0; border:1px solid "><b>No</b></th>
            <th colspan="1"  style="background-color: #d1e0e0; border:1px solid ">Nama Customer</th>
            <th colspan="1"  style="background-color: #d1e0e0; border:1px solid ">Kode Order</th>
            <th colspan="1"  style="background-color: #d1e0e0; border:1px solid ">QTY</th>
            <th colspan="1"  style="background-color: #d1e0e0; border:1px solid ">Status</th>
            <th colspan="1"  style="background-color: #d1e0e0; border:1px solid ">Tanggal</th>
            <th colspan="1"  style="background-color: #d1e0e0; border:1px solid ">Tipe</th>
            <th colspan="1"  style="background-color: #d1e0e0; border:1px solid ">Total</th>
            <th colspan="1"  style="background-color: #d1e0e0; border:1px solid ">Total Laba</th>
            <th colspan="1"  style="background-color: #d1e0e0; border:1px solid ">code barang</th> 
            <th colspan="1"  style="background-color: #d1e0e0; border:1px solid ">nama barang</th> 
            <th colspan="1"  style="background-color: #d1e0e0; border:1px solid ">qty</th> 
            <th colspan="1"  style="background-color: #d1e0e0; border:1px solid ">harga </th>
            <th colspan="1"  style="background-color: #d1e0e0; border:1px solid ">subtotal </th>
            <th colspan="1"  style="background-color: #d1e0e0; border:1px solid ">laba</th> 
            </tr>

            <?php $__currentLoopData = $lapHarEx; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td colspan="1" style="border:1px solid "><?php echo e($key+1); ?></td>
            <td colspan="1" style="border:1px solid "><?php echo e($item->nama_customer); ?></td>
            <td colspan="1" style="border:1px solid "><?php echo e($item->code_order); ?></td>
            <td colspan="1" style="border:1px solid "><?php echo e($item->jumlah_barang); ?></td>
            <td colspan="1" style="border:1px solid "><?php echo e($item->status); ?></td>
            <td colspan="1" style="border:1px solid "><?php echo e($item->tanggal); ?></td>
            <td colspan="1" style="border:1px solid "><?php echo e($item->Pembayaran->tipe_pembayaran); ?></td>
            <td colspan="1" style="border:1px solid "><?php echo e($item->total); ?></td>
            <td colspan="1" style="border:1px solid "><?php echo e($item->total_laba); ?></td>

            <?php $__currentLoopData = $item->OrderItem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cek=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($cek == 0): ?>
              <td colspan="1"  style="border:1px solid " ><?php echo e($val->code_barang); ?></td>
              <td colspan="1"  style="border:1px solid " ><?php echo e($val->nama_barang); ?></td>
              <td colspan="1"  style="border:1px solid " ><?php echo e($val->qty); ?></td>
              <td colspan="1"  style="border:1px solid " ><?php echo e($val->harga); ?></td>
              <td colspan="1"  style="border:1px solid " ><?php echo e($val->subtotal); ?></td>
              <td colspan="1"  style="border:1px solid " ><?php echo e($val->laba); ?></td>

              

              <?php elseif($cek > 0): ?>

                <tr>

                    <td colspan="1"  style="border:1px solid "></td>
                    <td colspan="1" style="border:1px solid "></td>
                    <td colspan="1" style="border:1px solid "></td>
                    <td colspan="1" style="border:1px solid "></td>
                    <td colspan="1" style="border:1px solid "></td>
                    <td colspan="1" style="border:1px solid "></td>
                    <td colspan="1" style="border:1px solid "></td>
                    <td colspan="1" style="border:1px solid "></td>
                    <td colspan="1" style="border:1px solid "></td>
                    <td colspan="1"  style="border:1px solid " ><?php echo e($val->code_barang); ?></td>
                    <td colspan="1"  style="border:1px solid " ><?php echo e($val->nama_barang); ?></td>
                    <td colspan="1"  style="border:1px solid " ><?php echo e($val->qty); ?></td>
                    <td colspan="1"  style="border:1px solid " ><?php echo e($val->harga); ?></td>
                    <td colspan="1"  style="border:1px solid " ><?php echo e($val->subtotal); ?></td>
                    <td colspan="1"  style="border:1px solid " ><?php echo e($val->laba); ?></td>
                    
                  </tr>
                  <?php endif; ?>
                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <th  colspan="1"  style="background-color: #d1e0e0; border:1px solid ">Jumlah</th>
                  <th  colspan="1"  style="background-color: #d1e0e0; border:1px solid ">Total</th>
                  <th  colspan="1"  style="background-color: #d1e0e0; border:1px solid ">Total Laba</th>
                </tr>
                <tr>
                  <td colspan="1"  style=" border:1px solid "><?php echo e($totBar); ?></td>
                  <td colspan="1"  style=" border:1px solid "><?php echo e(number_format($totHar, 2)); ?></td>
                  <td colspan="1"  style=" border:1px solid "><?php echo e(number_format($totLab, 2)); ?></td>
                </tr>

           </table>
         </div>
    </div>
</div>