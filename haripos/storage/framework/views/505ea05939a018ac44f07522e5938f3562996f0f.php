<?php $__env->startSection('content'); ?>
    
    <div class="content">
        <div class="clearfix"></div>

        <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- Laporan Harian Penjualan -->
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
        <!-- endLHPJ -->
         <!-- Laporan Bulanan Penjualan  -->
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                        <div class="row">
                                <div class="form-group col-sm-12">
                                <h1>Cek Laporan Penjualan Bulanan</h1>
                                <?php echo Form::open(['url' => 'cekPJB']); ?>

                                <?php
                                $dt = \Carbon\Carbon::now();
                                ?>
                                <div class="form-group col-sm-8">
                                    <div class="form-group col-sm-4 ">
                                        <label for="start">Dari Tanggal :</label>
                                        <input type="date" name="start" class="form-control" id="start" value="<?php echo e(old('start', date('Y-m-d'))); ?>" >
                                        <?php if($errors->has('start')): ?>
                                        <div class="alert text-danger"><?php echo e($errors->first('start')); ?></div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="form-group col-sm-4 ">
                                        <label for="end">Sampai Tanggal :</label>
                                        <input type="date" name="end" class="form-control" id="end" value="<?php echo e(old('end', date('Y-m-d'))); ?>" >
                                        <?php if($errors->has('end')): ?>
                                        <div class="alert text-danger"><?php echo e($errors->first('end')); ?></div>
                                        <?php endif; ?>
                                    </div>
                                    
                                </div>
                                    <div class="form-group col-sm-12">
                                      <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

                                    </div>
                                <?php echo Form::close(); ?>

                
                                </div>
                        </div>


            </div>
        </div>
        <!-- endLHPG -->
         <!-- Laporan Harian Pengeluaran -->
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                        <div class="row">
                                <div class="form-group col-sm-12">
                                <h1>Cek Laporan Pengeluaran</h1>
                                <?php echo Form::open(['url' => 'cekPG']); ?>

                                <?php
                                $dt = \Carbon\Carbon::now();
                                ?>
                                <div class="form-group col-sm-8">
                                    <div class="form-group col-sm-4 ">
                                        <label for="start">Dari Tanggal :</label>
                                        <input type="date" name="start" class="form-control" id="start" value="<?php echo e(old('start', date('Y-m-d'))); ?>" >
                                        <?php if($errors->has('start')): ?>
                                        <div class="alert text-danger"><?php echo e($errors->first('start')); ?></div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="form-group col-sm-4 ">
                                        <label for="end">Sampai Tanggal :</label>
                                        <input type="date" name="end" class="form-control" id="end" value="<?php echo e(old('end', date('Y-m-d'))); ?>" >
                                        <?php if($errors->has('end')): ?>
                                        <div class="alert text-danger"><?php echo e($errors->first('end')); ?></div>
                                        <?php endif; ?>
                                    </div>
                                    
                                </div>
                                    <div class="form-group col-sm-12">
                                      <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

                                    </div>
                                <?php echo Form::close(); ?>

                
                                </div>
                        </div>


            </div>
        </div>
        <!-- endLHPG -->


        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>