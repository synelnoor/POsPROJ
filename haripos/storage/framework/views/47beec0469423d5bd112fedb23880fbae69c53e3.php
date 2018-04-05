<!-- Nama Supplier Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nama_supplier', 'Nama Supplier:'); ?>

    <?php echo Form::text('nama_supplier', null, ['class' => 'form-control']); ?>

</div>

<!-- Code Supplier Field -->
<?php if($action=="edit"): ?>
<div class="form-group col-sm-6">
    <?php echo Form::label('code_supplier', 'Code Supplier:'); ?>

    <?php echo Form::text('code_supplier', null, ['class' => 'form-control']); ?>

</div>
<?php else: ?>
<div class="form-group col-sm-6">
    <?php echo Form::label('code_supplier', 'Code Supplier:'); ?>

    <?php echo Form::text('code_supplier', $codePo, ['class' => 'form-control']); ?>

</div>
<?php endif; ?>

<!-- Jumlah Barang Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('jumlah_barang', 'Jumlah Barang:'); ?>

    <?php echo Form::text('jumlah_barang', null, ['class' => 'form-control']); ?>

</div>

<!-- Total Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('total', 'Total:'); ?>

    <?php echo Form::text('total', null, ['class' => 'form-control']); ?>

</div>
<!-- deskripsi -->
<div class="form-group col-sm-6">
    <?php echo Form::label('deskripsi','Deskripsi:'); ?>

    <?php echo Form::textarea('deskripsi',null,['class'=>'form-control']); ?>

</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('status', 'Status:'); ?>

    <?php echo Form::select('cash',[ 'pending' => 'pending','cash' => 'cash'], null, ['class' => 'form-control']); ?>

</div>

<!-- Tanggal Field -->
<?php
$dt = \Carbon\Carbon::now();
?>
<?php if($action=="edit"): ?>
<div class="form-group col-sm-6">
    <?php echo Form::label('tanggal', 'Tanggal:'); ?>

    <?php echo Form::date('tanggal', $purchase->tanggal, ['class' => 'form-control']); ?>

</div>
<?php else: ?>
<div class="form-group col-sm-6">
    <?php echo Form::label('tanggal', 'Tanggal:'); ?>

    <?php echo Form::date('tanggal', $dt, ['class' => 'form-control']); ?>

</div>
<?php endif; ?>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('purchases.index'); ?>" class="btn btn-default">Cancel</a>
</div>
