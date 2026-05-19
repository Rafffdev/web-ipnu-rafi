<?php $__env->startSection('title', 'Dashboard Admin'); ?>

<?php $__env->startSection('content'); ?>
<div class="container" style="margin:auto;">
    <h4 class="fw-bold mb-3 text-primary">
        <i class="fa-solid fa-gauge-high me-2"></i>Dashboard
    </h4>

    <div class="row g-3">
        <!-- Jumlah Alumni -->
        <div class="col-md-3">
            <div class="card card-stat shadow-sm border-0 text-center">
                <div class="card-body">
                    <h6 class="text-muted">Jumlah Alumni</h6>
                    <h3 class="fw-bold text-success"><?php echo e($jumlahAlumni); ?></h3>
                </div>
            </div>
        </div>
        <!-- Jumlah Berita -->
        <div class="col-md-3">
            <div class="card card-stat shadow-sm border-0 text-center">
                <div class="card-body">
                    <h6 class="text-muted">Jumlah Prestasi</h6>
                    <h3 class="fw-bold text-primary"><?php echo e($jumlahPrestasi); ?></h3>
                </div>
            </div>
        </div>

        

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\projekukk_MRafiAssidiqi_XIIRPL1\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>