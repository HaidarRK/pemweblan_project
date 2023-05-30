
<?php $__env->startSection('title', 'Tiket'); ?>

<?php $__env->startSection('content'); ?>
<a href="/tiket/print" target="_blank" class="btn btn-primary">Print To Printer</a>
<a href="/tiket/printpdf" target="_blank" class="btn btn-success">Print To PDF</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID Tiket</th>
            <th>Total Harga</th>
            <th>Kuantitas</th>
            <th>No. KA</th>
            <th>No. KTP</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; ?>
        <?php $__currentLoopData = $tiket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($no++); ?></td>
                <td><?php echo e($data->total_harga); ?></td>
                <td><?php echo e($data->kuantitas); ?></td>
                <td><?php echo e($data->no_ka); ?></td>
                <td><?php echo e($data->no_ktp); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/v_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pbd_uas\resources\views/v_tiket.blade.php ENDPATH**/ ?>