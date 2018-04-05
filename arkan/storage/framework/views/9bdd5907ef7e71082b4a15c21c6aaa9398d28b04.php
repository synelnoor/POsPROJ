<!-- Id Field -->
<div class="form-group">
    <?php echo Form::label('id', 'Id:'); ?>

    <p><?php echo $order->id; ?></p>
</div>

<!-- Nama Customer Field -->
<div class="form-group">
    <?php echo Form::label('nama_customer', 'Nama Customer:'); ?>

    <p><?php echo $order->nama_customer; ?></p>
</div>

<!-- Code Order Field -->
<div class="form-group">
    <?php echo Form::label('code_order', 'Code Order:'); ?>

    <p><?php echo $order->code_order; ?></p>
</div>

<!-- Jumlah Barang Field -->
<div class="form-group">
    <?php echo Form::label('jumlah_barang', 'Jumlah Barang:'); ?>

    <p><?php echo $order->jumlah_barang; ?></p>
</div>

<!-- Total Field -->
<div class="form-group">
    <?php echo Form::label('total', 'Total:'); ?>

    <p><?php echo $order->total; ?></p>
</div>

<!-- Status Field -->
<div class="form-group">
    <?php echo Form::label('status', 'Status:'); ?>

    <p><?php echo $order->status; ?></p>
</div>

<!-- Tanggal Field -->
<div class="form-group">
    <?php echo Form::label('tanggal', 'Tanggal:'); ?>

    <p><?php echo $order->tanggal; ?></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Created At:'); ?>

    <p><?php echo $order->created_at; ?></p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Updated At:'); ?>

    <p><?php echo $order->updated_at; ?></p>
</div>

