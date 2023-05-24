
<?php $__env->startSection('title', 'Kereta'); ?>

<?php $__env->startSection('content'); ?>
    <a href="/kereta/add" class="btn btn-primary btn-sm">Add</a> <br>

    <?php if(session('Pesan')): ?>
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Success!</h4>
        <?php echo e(session('Pesan')); ?>.
    </div>
    <?php endif; ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No. KA</th>
                <th>Jadwal Keberangkatan</th>
                <th>Stasiun Asal</th>
                <th>Stasiun Tujuan</th>
                <th>Harga</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $kereta; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($data->no_ka); ?></td>
                    <td><?php echo e($data->jadwal_berangkat); ?></td>
                    <td><?php echo e($data->keberangkatan); ?></td>
                    <td><?php echo e($data->tujuan); ?></td>
                    <td><?php echo e($data->harga); ?></td>
                    <td>
                        <a href="/kereta/detail/<?php echo e($data->no_ka); ?>" class="btn btn-sm btn-success">Detail</a>
                        <a href="/kereta/edit/<?php echo e($data->no_ka); ?>" class="btn btn-sm btn-warning">Edit</a>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?php echo e($data->no_ka); ?>">
                            Delete
                        </button>
                    </td>
                    
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

<?php $__currentLoopData = $kereta; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="modal modal-danger fade" id="delete<?php echo e($data->no_ka); ?>">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><?php echo e($data->no_ka); ?></h4>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda Yakin Ingin Menghapus Data Ini?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
                    <a href="/kereta/delete/<?php echo e($data->no_ka); ?>" class="btn btn-outline">Yes</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/v_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pbd_uas\resources\views/v_kereta.blade.php ENDPATH**/ ?>