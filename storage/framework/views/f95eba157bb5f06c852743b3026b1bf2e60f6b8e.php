
<?php $__env->startSection('title', 'Detail Akun'); ?>
<?php $__env->startSection('content'); ?>
    
<table class="table">
    <tr>
        <th width="100px">Role</th>
        <th width="30px">:</th>
        <th><?php echo e($akun->role); ?></th>
    </tr>
    <tr>
        <th width="100px">Username</th>
        <th width="30px">:</th>
        <th><?php echo e($akun->username); ?></th>
    </tr>
    <tr>
        <th width="100px">Password</th>
        <th width="30px">:</th>
        <th><?php echo e($akun->password); ?></th>
    </tr>
    <tr>
        <th width="100px">Email</th>
        <th width="30px">:</th>
        <th><?php echo e($akun->email); ?></th>
    </tr>
    <tr>
        <th><a href="/akun" class="btn btn-success btn-sm">Kembali</a></th>
    </tr>
    
</table>






<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/v_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pbd_uas\resources\views/v_detailakun.blade.php ENDPATH**/ ?>