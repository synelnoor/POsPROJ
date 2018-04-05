<!-- Nama Barang Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nama_barang', 'Nama Barang:'); ?>

    <?php echo Form::text('nama_barang', null, ['class' => 'form-control']); ?>

</div>

<!-- Harga Beli Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('harga_beli', 'Harga Beli:'); ?>

    <?php echo Form::number('harga_beli', null, ['class' => 'form-control']); ?>

</div>

<!-- Harga-Jual Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('harga_jual', 'Harga Jual:'); ?>

    <?php echo Form::number('harga_jual', null, ['class' => 'form-control']); ?>

</div>

<!-- Code Barang Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('code_barang', 'Code Barang:'); ?>

    <?php echo Form::text('code_barang', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('barangs.index'); ?>" class="btn btn-default">Cancel</a>
</div>
