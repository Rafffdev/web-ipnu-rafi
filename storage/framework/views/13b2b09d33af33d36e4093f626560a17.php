

<?php $__env->startSection('title', 'Data Pendidikan Lanjut'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="fw-bold">Data Pendidikan Lanjut Alumni</h3>
        <a href="<?php echo e(route('admin.tambahPendidikan')); ?>" class="btn btn-primary">+ Tambah Pendidikan</a>
    </div>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr class="text-center">
                <th>No</th>
                <th>Nama Alumni</th>
                <th>Nama Universitas</th>
                <th>Jurusan</th>
                <th>Tahun Masuk</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $pendidikan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td class="text-center"><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($p->nama_alumni); ?></td>
                <td><?php echo e($p->nama_universitas); ?></td>
                <td><?php echo e($p->jurusan); ?></td>
                <td class="text-center"><?php echo e($p->tahun_masuk); ?></td>
                <td class="text-center">
                    <a href="<?php echo e(route('admin.editPendidikan', $p->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="<?php echo e(route('admin.hapusPendidikan', $p->id)); ?>" class="btn btn-danger btn-sm"
                       onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <td colspan="6" class="text-center text-muted">Belum ada data pendidikan lanjut</td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\projekukk_MRafiAssidiqi_XIIRPL2\projekukk_MRafiAssidiqi_XIIRPL11\resources\views/admin/pendidikan/pendidikan.blade.php ENDPATH**/ ?>