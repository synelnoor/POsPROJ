<?php $__env->startSection('css'); ?>
    <?php echo $__env->make('layouts.datatables_css', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<div class="table-responsive">
  
<?php echo $dataTable->table(['width' => '100%']); ?>

</div>
<?php $__env->startSection('scripts'); ?>
    <?php echo $__env->make('layouts.datatables_js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $dataTable->scripts(); ?>

<?php $__env->stopSection(); ?>