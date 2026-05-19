

<?php $__env->startSection('title', 'Prestasi'); ?>
<?php $__env->startSection('content'); ?>
<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="fw-bold">Data Prestasi Alumni</h3>
        <a href="<?php echo e(route('admin.tambahPrestasi')); ?>" class="btn btn-primary">
            + Tambah Prestasi
        </a>
    </div>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr class="text-center">
                <th>No</th>
                <th>Nama Prestasi</th>
                <th>Deskripsi</th>
                <th>Tahun</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php $no = 1; ?>

            <?php $__currentLoopData = $prestasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="text-center"><?php echo e($no++); ?></td>
                <td><?php echo e($p->nama); ?></td>
                <td><?php echo e($p->deskripsi); ?></td>
                <td class="text-center"><?php echo e($p->tahun); ?></td>
                <td class="text-center">
                    <a href="<?php echo e(route('admin.editPrestasi', $p->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="<?php echo e(route('admin.hapusPrestasi', $p->id)); ?>"
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('Yakin ingin menghapus?')">
                       Hapus
                    </a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php if($prestasi->isEmpty()): ?>
            <tr>
                <td colspan="5" class="text-center text-muted">Belum ada data prestasi</td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\projekukk_MRafiAssidiqi_XIIRPL1\resources\views/admin/prestasi.blade.php ENDPATH**/ ?>