

<?php $__env->startSection('title', 'Tambah Pendidikan Lanjut'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <h3 class="fw-bold mb-3">Tambah Pendidikan Lanjut Alumni</h3>

    <form action="<?php echo e(route('admin.simpanPendidikan')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <select name="alumni_id" class="form-control" required>
            <option value="">-- Pilih Alumni --</option>
            <?php $__currentLoopData = $alumnis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($a->id); ?>"><?php echo e($a->nama); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <div class="mb-3">
            <label>Nama Universitas/Kampus</label>
            <input type="text" name="nama_universitas" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Jurusan/Prodi</label>
            <input type="text" name="jurusan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Tahun Masuk</label>
            <input type="number" name="tahun_masuk" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?php echo e(route('admin.pendidikan')); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\projekukk_MRafiAssidiqi_XIIRPL1\resources\views/admin/pendidikan/tambahPendidikan.blade.php ENDPATH**/ ?>