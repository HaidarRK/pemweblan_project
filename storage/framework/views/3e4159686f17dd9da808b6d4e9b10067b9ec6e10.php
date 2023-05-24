
<?php $__env->startSection('title', 'Detail Penumpang'); ?>
<?php $__env->startSection('content'); ?>
    
<table class="table">
    <tr>
        <th width="100px">No. KTP</th>
        <th width="30px">:</th>
        <th><?php echo e($penumpang->no_ktp); ?></th>
    </tr>
    <tr>
        <th width="100px">Nama</th>
        <th width="30px">:</th>
        <th><?php echo e($penumpang->nama); ?></th>
    </tr>
    <tr>
        <th width="100px">Alamat</th>
        <th width="30px">:</th>
        <th><?php echo e($penumpang->alamat); ?></th>
    </tr>
    <tr>
        <th width="100px">No. HP</th>
        <th width="30px">:</th>
        <th><?php echo e($penumpang->no_telp); ?></th>
    </tr>
    <tr>
        <th width="100px">Gender</th>
        <th width="30px">:</th>
        <th><?php echo e($penumpang->gender); ?></th>
    </tr>
    <tr>
        <th width="100px">Umur</th>
        <th width="30px">:</th>
        <th><?php echo e($penumpang->umur); ?></th>
    </tr>
    <tr>
        <th><a href="/penumpang" class="btn btn-success btn-sm">Kembali</a></th>
    </tr>
    
</table>






<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/v_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pbd_uas\resources\views/v_detailpenumpang.blade.php ENDPATH**/ ?>