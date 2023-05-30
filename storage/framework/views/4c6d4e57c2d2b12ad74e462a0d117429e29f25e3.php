
<?php $__env->startSection('title', 'Detail Kereta'); ?>
<?php $__env->startSection('content'); ?>
    
<table class="table">
    <tr>
        <th width="100px">No. KA</th>
        <th width="30px">:</th>
        <th><?php echo e($kereta->no_ka); ?></th>
    </tr>
    <tr>
        <th width="100px">Jadwal Keberangkatan</th>
        <th width="30px">:</th>
        <th><?php echo e($kereta->jadwal_berangkat); ?></th>
    </tr>
    <tr>
        <th width="100px">Stasiun Asal</th>
        <th width="30px">:</th>
        <th><?php echo e($kereta->keberangkatan); ?></th>
    </tr>
    <tr>
        <th width="100px">Stasiun Tujuan</th>
        <th width="30px">:</th>
        <th><?php echo e($kereta->tujuan); ?></th>
    </tr>
    <tr>
        <th width="100px">Harga</th>
        <th width="30px">:</th>
        <th><?php echo e($kereta->harga); ?></th>
    </tr>
    <tr>
        <th><a href="/kereta" class="btn btn-success btn-sm">Kembali</a></th>
    </tr>
    
</table>






<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/v_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pbd_uas\resources\views/v_detailkereta.blade.php ENDPATH**/ ?>