<?php $__env->startSection('title', 'Data alumni'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <h2>Data Alumni</h2>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <a href="<?php echo e(route('admin.tambahAlumni')); ?>" class="btn btn-primary mb-3">+ Tambah Alumni</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Angkatan</th>
                <th>Jurusan</th>
                <th>Pekerjaan</th>
                <th>Pendidikan</th>
                <th>Alamat</th>
                <th>Motivasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $alumni; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($a->nama); ?></td>
                    <td><?php echo e($a->email); ?></td>
                    <td><?php echo e($a->angkatan); ?></td>
                    <td><?php echo e($a->jurusan); ?></td>

                    <!-- PEKERJAAN -->
                    <td>
                        <?php $__empty_2 = true; $__currentLoopData = $a->pekerjaans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                            <?php echo e($p->nama_perusahaan); ?> (<?php echo e($p->posisi); ?>) <br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                            -
                        <?php endif; ?>
                    </td>

                    <!-- PENDIDIKAN -->
                    <td>
                        <?php $__empty_2 = true; $__currentLoopData = $a->pendidikans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                            <?php echo e($pd->nama_universitas); ?> (<?php echo e($pd->jurusan); ?>) <br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                            -
                        <?php endif; ?>
                    </td>

                    <td><?php echo e($a->alamat); ?></td>
                    <td><?php echo e($a->motivasi); ?></td>

                    <td>
                        <a href="<?php echo e(route('admin.editAlumni', $a->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?php echo e(route('admin.hapusAlumni', $a->id)); ?>" class="btn btn-danger btn-sm"
                           onclick="return confirm('Yakin mau hapus data ini?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="10" class="text-center">Belum ada data alumni</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\projekukk_MRafiAssidiqi_XIIRPL1\resources\views/admin/dataAlumni.blade.php ENDPATH**/ ?>