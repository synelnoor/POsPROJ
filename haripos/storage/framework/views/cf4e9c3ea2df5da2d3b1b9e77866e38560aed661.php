<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1 class="pull-left">Reports</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="<?php echo route('reports.create'); ?>">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                        <div class="row">
                            <div class="form-group col-sm-12">
                            <h1>Cek Laporan Harian Penjualan</h1>
                         <?php echo Form::open(['url' => 'cekPJ']); ?>

                         <?php
                            $dt = \Carbon\Carbon::now();
                            ?>
                            <div class="form-group col-sm-6">
                                <?php echo Form::label('tanggal', 'Tanggal:'); ?>

                                <?php echo Form::date('tanggal', $dt, ['class' => 'form-control']); ?>

                            </div>
                                <div class="form-group col-sm-12">
                                  <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

                                </div>
                         <?php echo Form::close(); ?>

                               <!--  <?php echo $__env->make('admin.reports.table', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> -->
                        </div>
                        </div>


                    </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>