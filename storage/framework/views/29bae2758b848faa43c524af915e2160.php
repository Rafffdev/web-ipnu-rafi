<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Alumni SMK SA - Portal Alumni Sekolah</title>
  <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo e(asset('fontawesome/css/all.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/user/user.css')); ?>" />
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm ">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">
        <img src="<?php echo e(asset('gambar/smksa.png')); ?>" alt="SMK SA" style="height: 35px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu"
              aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navMenu">
        <ul class="navbar-nav fw-semibold">
          <li class="nav-item"><a class="nav-link" href="#home">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="#alumni">Data Alumni</a></li>
          <li class="nav-item"><a class="nav-link" href="#stories">Motivasi</a></li>
          <li class="nav-item"><a class="nav-link" href="#prestasi">Prestasi</a></li>
          <li class="nav-item" style="margin left:70px;"><a class="nav-link" href="<?php echo e(route('login')); ?>">Login Admin</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <header id="home" class="hero d-flex align-items-center text-center text-dark" style="margin-bottom: 13rem">
    <video autoplay muted loop id="bg-video">
    <source src="<?php echo e(asset('gambar/Home.mp4')); ?>" type="video/mp4">
    Your browser does not support HTML5 video.
  </video> 
    <div class="container">
      <h1 class="display-4 fw-bold mb-3 " style="color: rgba(255, 255, 255, 0.637)">Selamat Datang di Portal Alumni SMK SA</h1>
      <p class="lead mb-4" style="color: rgba(255, 255, 255, 0.637)">Terhubung, Berbagi motivasi, dan merayakan prestasi alumni.</p>
      <a href="#alumni" class="btn btn-outline-primary btn-lg shadow-sm">
        <i class="fa fa-users me-2"></i>Lihat Data Alumni
      </a>
    </div>
  </header>

 <!-- Data Alumni -->
<section id="alumni" class="py-5" style="background-color: #0d6efd;">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold text-light" style=" padding-top:5rem;">Data Alumni Terbaru</h2>
            <p class="text-light fs-5">Informasi alumni yang telah terverifikasi.</p>
        </div>

        <div class="table-responsive shadow-sm rounded">
            <table class="table table-hover align-middle text-center">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Angkatan</th>
                        <th>Jurusan</th>
                        <th>Status</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $alumni; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e(($alumni->currentPage() - 1) * $alumni->perPage() + $loop->iteration); ?></td>
                            <td><?php echo e($a->nama); ?></td>
                            <td><?php echo e($a->angkatan); ?></td>
                            <td><?php echo e($a->jurusan); ?></td>
                            <td>
                                <?php if($a->pekerjaans->count() > 0): ?>
                                    Kerja di <?php echo e($a->pekerjaans->first()->nama_perusahaan); ?>

                                <?php elseif($a->pendidikans->count() > 0): ?>
                                    Kuliah di <?php echo e($a->pendidikans->first()->nama_universitas); ?>

                                <?php else: ?>
                                    -
                                <?php endif; ?>
                            </td>
                            <td><?php echo e($a->alamat); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>

          </div>
          

          <nav aria-label="...">
            <ul class="pagination">
              <?php if(!$alumni->onFirstPage()): ?>
              <li class="page-item"><a href="<?php echo e($alumni->previousPageUrl()); ?>#alumni" class="page-link">Previous</a></li>
              <?php endif; ?>
              
              <?php if($alumni->hasMorePages()): ?>
                <li class="page-item"><a class="page-link" href="<?php echo e($alumni->nextPageUrl()); ?>#alumni">Next</a></li>
              <?php endif; ?>
            </ul>
          </nav>

    </div>
</section>


  

  <!-- Motivasi  -->
  <section id="stories" class="py-5 bg-white" >
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark" style="padding-top: 5rem;">Motivasi Alumni</h2>
            <p class="text-secondary fs-5">Motivasi yang menginspirasi dari alumni kami.</p>
        </div>

        <div id="motivasiCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">
                <?php $__currentLoopData = $motivasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="carousel-item <?php echo e($index === 0 ? 'active' : ''); ?>">
                    <div class="d-flex justify-content-center">
                        <div class="card shadow-sm border-0 story-card p-4 text-center" style="max-width: 500px;">
                            <div class="card-body">
                                <h4 class="text-primary fw-bold"><?php echo e($m->nama); ?></h4>
                                <p class="text-secondary small mb-2">Angkatan <?php echo e($m->angkatan); ?> • <?php echo e($m->jurusan); ?></p>
                                <p class="card-text fs-5 fst-italic" style="padding-bottom: 5rem;">“<?php echo e($m->motivasi); ?>”</p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#motivasiCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded-circle p-2"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#motivasiCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded-circle p-2"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<section id="prestasi" class="py-5 bg-primary">
  <div class="container">

    <div class="text-center mb-5">
      <h2 class="fw-bold text-light">Prestasi Alumni</h2>
      <p class="text-light fs-5">Penghargaan, sertifikasi, dan pencapaian alumni terbaik kami.</p>
    </div>

    <div class="row g-4">
      <?php $__empty_1 = true; $__currentLoopData = $prestasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="card shadow-lg border-0 rounded-4 h-100">
          <div class="card-body text-center p-4">
            <div class="mb-3">
              <i class="fa fa-trophy fa-3x text-warning"></i>
            </div>

            <h5 class="fw-bold mb-2"><?php echo e($p->nama); ?></h5>
            <p class="text-secondary small mb-1">Tahun <?php echo e($p->tahun); ?></p>

            <p class="card-text" style="min-height: 70px;">
              <?php echo e(Str::limit($p->deskripsi, 100)); ?>

            </p>

            
          </div>
        </div>
      </div>

      <!-- Detail -->
      <div class="modal fade" id="modalPrestasi<?php echo e($p->id); ?>" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content rounded-4 shadow">
            <div class="modal-header">
              <h5 class="modal-title fw-bold"><?php echo e($p->nama); ?></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
              <p class="text-secondary small">Tahun: <?php echo e($p->tahun); ?></p>
              <p><?php echo e($p->deskripsi); ?></p>
            </div>
          </div>
        </div>
      </div>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
      <div class="text-center text-light fw-semibold">Belum ada prestasi ditambahkan.</div>
      <?php endif; ?>
    </div>

  </div>
</section>

<!-- Footer  -->
<footer class="footer-modern pt-5 pb-3 text-white">
  <div class="container">
    <div class="row">

      <!-- Logo & Deskripsi -->
      <div class="col-md-4 mb-4">
        <h5 class="fw-bold mb-3">
          <img src="<?php echo e(asset('gambar/smksa.png')); ?>" alt="SMK SA" style="height: 35px">
          
        </h5>
        <p class="small text-white-50">
          Portal alumni SMK SA Kota Pekalongan. Menghubungkan alumni, berbagi kisah inspiratif, dan menampilkan prestasi.
        </p>
      </div>

      
      
      <div class="col-md-4 mb-4 ms-md-auto">
        <h6 class="fw-bold mb-3">Kontak</h6>
        <p class="small mb-2"><i class="fa fa-envelope me-2"></i> AdminSMK@gmail.com</p>
        <p class="small mb-2"><i class="fa fa-phone me-2"></i> +62 896 6616 6110</p>
        <div class="social-icons mt-2">
          <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
          <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
          <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>

    </div>

    <hr class="border-light">

    <div class="text-center small text-white-50">
      © 2025 SMK SA Kota Pekalongan. All rights reserved.
    </div>
  </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Ambil semua link navbar
  const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

  // Ambil semua section yang punya id
  const sections = document.querySelectorAll('section, header');

  window.addEventListener('scroll', () => {
    let current = '';

    sections.forEach(section => {
      const sectionTop = section.offsetTop - 80; // offset untuk navbar tinggi
      const sectionHeight = section.offsetHeight;
      if (pageYOffset >= sectionTop && pageYOffset < sectionTop + sectionHeight) {
        current = section.getAttribute('id');
      }
    });

    navLinks.forEach(link => {
      link.classList.remove('active');
      if (link.getAttribute('href') === '#' + current) {
        link.classList.add('active');
      }
    });
  });
</script>

</body>
</html>
<?php /**PATH C:\projekukk_MRafiAssidiqi_XIIRPL1\resources\views/user/index.blade.php ENDPATH**/ ?>