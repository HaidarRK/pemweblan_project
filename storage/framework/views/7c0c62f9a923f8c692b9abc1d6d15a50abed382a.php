
<?php $__env->startSection('title', 'Add Kereta'); ?>

<?php $__env->startSection('content'); ?>

<form action="/kereta/insert" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>

    <div class="content">
        <div class="row">
            <div class="col-sm-6">

                <div class="form-group">
                    <label>No. KA</label>
                    <input name="no_ka" class="form-control" value="<?php echo e(old('no_ka')); ?>">
                    <div class="text-danger">
                        <?php $__errorArgs = ['no_ka'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <?php echo e($message); ?>

                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label>Jadwal Keberangkatan</label>
                    <input name="jadwal_berangkat" class="form-control" value="<?php echo e(old('jadwal_berangkat')); ?>">
                    <div class="text-danger">
                        <?php $__errorArgs = ['jadwal_berangkat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <?php echo e($message); ?>

                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label>Stasiun Asal</label>
                    <input name="keberangkatan" class="form-control" value="<?php echo e(old('keberangkatan')); ?>">
                    <div class="text-danger">
                        <?php $__errorArgs = ['keberangkatan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <?php echo e($message); ?>

                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label>Stasiun Tujuan</label>
                    <input name="tujuan" class="form-control" value="<?php echo e(old('tujuan')); ?>">
                    <div class="text-danger">
                        <?php $__errorArgs = ['tujuan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <?php echo e($message); ?>

                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label>Harga</label>
                    <input name="harga" class="form-control" value="<?php echo e(old('harga')); ?>">
                    <div class="text-danger">
                        <?php $__errorArgs = ['harga'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <?php echo e($message); ?>

                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary btn-sm">Simpan</button>
                </div>

                

            </div>
            
        </div>
    </div>

</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/v_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pbd_uas\resources\views/v_addkereta.blade.php ENDPATH**/ ?>