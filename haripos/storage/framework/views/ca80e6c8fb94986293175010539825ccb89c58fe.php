<!-- Id Field -->
<div class="form-group">
    <?php echo Form::label('id', 'Id:'); ?>

    <p><?php echo $purchase->id; ?></p>
</div>

<!-- Nama Supplier Field -->
<div class="form-group">
    <?php echo Form::label('nama_supplier', 'Nama Supplier:'); ?>

    <p><?php echo $purchase->nama_supplier; ?></p>
</div>

<!-- Code Supplier Field -->
<div class="form-group">
    <?php echo Form::label('code_supplier', 'Code Supplier:'); ?>

    <p><?php echo $purchase->code_supplier; ?></p>
</div>

<!-- Jumlah Barang Field -->
<div class="form-group">
    <?php echo Form::label('jumlah_barang', 'Jumlah Barang:'); ?>

    <p><?php echo $purchase->jumlah_barang; ?></p>
</div>

<!-- Total Field -->
<div class="form-group">
    <?php echo Form::label('total', 'Total:'); ?>

    <p><?php echo $purchase->total; ?></p>
</div>

<!-- Status Field -->
<div class="form-group">
    <?php echo Form::label('status', 'Status:'); ?>

    <p><?php echo $purchase->status; ?></p>
</div>

<!-- Tanggal Field -->
<div class="form-group">
    <?php echo Form::label('tanggal', 'Tanggal:'); ?>

    <p><?php echo $purchase->tanggal; ?></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Created At:'); ?>

    <p><?php echo $purchase->created_at; ?></p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Updated At:'); ?>

    <p><?php echo $purchase->updated_at; ?></p>
</div>

