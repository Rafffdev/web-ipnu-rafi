

<?php $__env->startSection('title', 'Edit Pendidikan Lanjut'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <h3 class="fw-bold mb-3">Edit Pendidikan Lanjut Alumni</h3>

    <form action="<?php echo e(route('admin.updatePendidikan', $pendidikan->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label>Nama Alumni</label>
            <input type="text" name="nama_alumni" class="form-control" value="<?php echo e($pendidikan->nama_alumni); ?>" required>
        </div>
        <div class="mb-3">
            <label>Nama Universitas/Kampus</label>
            <input type="text" name="nama_universitas" class="form-control" value="<?php echo e($pendidikan->nama_universitas); ?>" required>
        </div>
        <div class="mb-3">
            <label>Jurusan/Prodi</label>
            <input type="text" name="jurusan" class="form-control" value="<?php echo e($pendidikan->jurusan); ?>" required>
        </div>
        <div class="mb-3">
            <label>Tahun Masuk</label>
            <input type="number" name="tahun_masuk" class="form-control" value="<?php echo e($pendidikan->tahun_masuk); ?>" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="<?php echo e(route('admin.pendidikan')); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\projekukk_MRafiAssidiqi_XIIRPL1\resources\views/admin/pendidikan/editPendidikan.blade.php ENDPATH**/ ?>