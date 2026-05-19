

<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <h2>Tambah Data Alumni</h2>

    <form action="<?php echo e(route('admin.simpanAlumni')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Angkatan</label>
            <input type="text" name="angkatan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Jurusan</label>
               <select name="jurusan" id="jurusan" class="form-control" required>
                    <option value="">Pilih Jurusan</option>
                    <option value="TBSM">TBSM</option>
                    <option value="TKR">TKR</option>
                    <option value="RPL">RPL</option>
                    <option value="TJKT">TJKT</option>
                    <option value="TB">TB</option>
                    
                </select>
        </div>
        <div class="mb-3">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Motivasi</label>
            <input type="text" name="motivasi" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="<?php echo e(route('admin.dataAlumni')); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\projekukk_MRafiAssidiqi_XIIRPL2\projekukk_MRafiAssidiqi_XIIRPL11\resources\views/admin/tambahAlumni.blade.php ENDPATH**/ ?>