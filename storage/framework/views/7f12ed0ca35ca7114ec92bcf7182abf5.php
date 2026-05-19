

<?php $__env->startSection('title', 'Edit Pekerjaan'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <h3 class="fw-bold mb-3">Edit Pekerjaan Alumni</h3>

    <form action="<?php echo e(route('admin.updatePekerjaan', $pekerjaan->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label>Nama Alumni</label>
            <input type="text" name="nama_alumni" class="form-control" value="<?php echo e($pekerjaan->nama_alumni); ?>" required>
        </div>
        <div class="mb-3">
            <label>Nama Perusahaan</label>
            <input type="text" name="nama_perusahaan" class="form-control" value="<?php echo e($pekerjaan->nama_perusahaan); ?>" required>
        </div>
        <div class="mb-3">
            <label>Posisi/Jabatan</label>
            <input type="text" name="posisi" class="form-control" value="<?php echo e($pekerjaan->posisi); ?>" required>
        </div>
        <div class="mb-3">
            <label>Tahun Mulai</label>
            <input type="number" name="tahun_mulai" class="form-control" value="<?php echo e($pekerjaan->tahun_mulai); ?>" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="<?php echo e(route('admin.pekerjaan')); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\projekukk_MRafiAssidiqi_XIIRPL1\resources\views/admin/pekerjaan/editPekerjaan.blade.php ENDPATH**/ ?>