

<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <h2>Edit Data Alumni</h2>

    <form action="<?php echo e(route('admin.updateAlumni', $alumni->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" value="<?php echo e($alumni->nama); ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" value="<?php echo e($alumni->email); ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Angkatan</label>
            <input type="text" name="angkatan" value="<?php echo e($alumni->angkatan); ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Jurusan</label>
            <input type="text" name="jurusan" value="<?php echo e($alumni->jurusan); ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Pekerjaan</label>
            <input type="text" name="pekerjaan" value="<?php echo e($alumni->pekerjaan); ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Alamat</label>
            <input type="text" name="alamat" value="<?php echo e($alumni->alamat); ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Motivasi</label>
            <input type="text" name="motivasi" value="<?php echo e($alumni->motivasi); ?>" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="<?php echo e(route('admin.dataAlumni')); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\projekukk_MRafiAssidiqi_XIIRPL1\resources\views/admin/editAlumni.blade.php ENDPATH**/ ?>