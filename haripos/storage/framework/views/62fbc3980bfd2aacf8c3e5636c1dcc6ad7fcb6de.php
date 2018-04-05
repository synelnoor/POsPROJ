<li class="<?php echo e(Request::is('barangs*') ? 'active' : ''); ?>">
    <a href="<?php echo route('barangs.index'); ?>"><i class="fa fa-edit"></i><span>Barang</span></a>
</li>



<li class="<?php echo e(Request::is('orders*') ? 'active' : ''); ?>">
    <a href="<?php echo route('orders.index'); ?>"><i class="fa fa-edit"></i><span>Pemesanan</span></a>
</li>

<li class="<?php echo e(Request::is('pembayarans*') ? 'active' : ''); ?>">
    <a href="<?php echo route('pembayarans.index'); ?>"><i class="fa fa-edit"></i><span>Pembayaran</span></a>
</li>

<li class="<?php echo e(Request::is('purchases*') ? 'active' : ''); ?>">
    <a href="<?php echo route('purchases.index'); ?>"><i class="fa fa-edit"></i><span>Pengeluaran</span></a>
</li>


<li class="<?php echo e(Request::is('reports*') ? 'active' : ''); ?>">
    <a href="<?php echo route('reports.index'); ?>"><i class="fa fa-edit"></i><span>Laporan</span></a>
</li>



<!-- 
<li class="<?php echo e(Request::is('orderItems*') ? 'active' : ''); ?>">
    <a href="<?php echo route('orderItems.index'); ?>"><i class="fa fa-edit"></i><span>Order Items</span></a>
</li>
 -->