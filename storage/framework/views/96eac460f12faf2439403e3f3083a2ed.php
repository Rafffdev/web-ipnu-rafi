<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php echo $__env->yieldContent('title'); ?></title>

  <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
  
  
  
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #e6f0ff;
      overflow-x: hidden;
    }

    /* Sidebar */
    #sidebar {
      position: fixed;
      top: 0; left: 0;
      height: 100vh;
      width: 260px;
      background: linear-gradient(145deg, #003f8a, #1a65d1);
      box-shadow: 4px 0 15px rgba(0, 0, 0, 0.2);
      padding-top: 1.8rem;
      transition: all 0.35s ease-in-out;
      z-index: 1030;
    }

    #sidebar .sidebar-header {
      text-align: center;
      margin-bottom: 1.8rem;
      color: #e0e7ff;
      user-select: none;
    }
    #sidebar .sidebar-header h4 {
      font-weight: 700;
      letter-spacing: 1.3px;
      margin-bottom: 0.2rem;
    }
    #sidebar .sidebar-header small {
      color: #a3bffa;
      font-size: 0.85rem;
      font-weight: 500;
    }

    /* Sidebar links */
    .sidebar-link {
      display: block;
      padding: 14px 28px;
      font-weight: 600;
      color: #cbd5e1;
      text-decoration: none;
      font-size: 1rem;
      border-left: 4px solid transparent;
      transition: all 0.3s ease;
      position: relative;
    }
    .sidebar-link:hover {
      background: #274690;
      color: #dbe9ff;
      border-left-color: #82aaff;
      padding-left: 32px;
    }
    .sidebar-link.active {
      background: #1a3c82;
      color: #a9c0ff;
      border-left-color: #82aaff;
      font-weight: 700;
    }

    /* Sidebar ikons */
    .sidebar-link i {
      margin-right: 12px;
      font-size: 1.1rem;
      vertical-align: middle;
    }

    /* Logout Button */
    .logout-btn {
      margin: 1.5rem 1.8rem 0 1.8rem;
      width: calc(100% - 3.6rem);
      padding: 12px 0;
      font-weight: 700;
      font-size: 1rem;
      color: #dbe9ff;
      background: #264de4;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      box-shadow: 0 6px 12px rgba(38, 77, 228, 0.4);
      transition: background 0.3s ease, box-shadow 0.3s ease;
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 8px;
    }
    .logout-btn:hover {
      background: #1a3c82;
      box-shadow: 0 10px 20px rgba(26, 60, 130, 0.7);
      color: #cbd5e1;
    }

    #page-content-wrapper {
      margin-left: 260px;
      transition: margin-left 0.35s ease-in-out;
      min-height: 100vh;
      background: #f9fbff;
      padding-bottom: 50px;
    }

    /* Navbar */
    nav.navbar {
      background: #ffffffcc;
      backdrop-filter: saturate(180%) blur(10px);
      border-bottom: 1px solid #a3bffa;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      padding: 0.5rem 1.5rem;
      position: sticky;
      top: 0;
      z-index: 1020;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    nav.navbar .btn-menu-toggle {
      background: transparent;
      border: none;
      font-size: 1.4rem;
      color: #1a3c82;
      cursor: pointer;
      transition: color 0.3s ease;
    }
    nav.navbar .btn-menu-toggle:hover {
      color: #274690;
    }

    nav.navbar h5 {
      font-weight: 700;
      font-size: 1.25rem;
      color: #274690;
      user-select: none;
      margin: 0;
    }

    .navbar-nav {
      display: flex;
      align-items: center;
      gap: 1.2rem;
      color: #274690;
      font-weight: 600;
      font-size: 1rem;
    }
    .navbar-nav .nav-item span {
      display: flex;
      align-items: center;
      gap: 6px;
      color: #1a3c82;
    }
    .navbar-nav .btn-logout {
      background: #d72631;
      color: white;
      border: none;
      padding: 6px 16px;
      border-radius: 6px;
      font-weight: 700;
      font-size: 0.9rem;
      transition: background 0.3s ease;
      cursor: pointer;
    }
    .navbar-nav .btn-logout:hover {
      background: #a71d24;
    }

    #wrapper.toggled #sidebar {
      margin-left: -260px;
      box-shadow: none;
    }
    #wrapper.toggled #page-content-wrapper {
      margin-left: 0;
    }

    .container-fluid.py-4 {
      padding-top: 2rem !important;
      padding-bottom: 2rem !important;
    }

    .card-stat {
      background: white;
      border-radius: 12px;
      padding: 1.6rem;
      box-shadow: 0 6px 20px rgb(38 77 228 / 0.2);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card-stat:hover {
      transform: translateY(-6px);
      box-shadow: 0 15px 40px rgb(38 77 228 / 0.35);
    }

    /* Responsive adjustments */
    @media (max-width: 992px) {
      #sidebar {
        margin-left: -260px;
      }
      #page-content-wrapper {
        margin-left: 0;
      }
      #wrapper.toggled #sidebar {
        margin-left: 0;
        box-shadow: 4px 0 15px rgba(0,0,0,0.25);
      }
      #wrapper.toggled #page-content-wrapper {
        margin-left: 260px;
      }
    }

  </style>
</head>
<body>

<div id="wrapper" class="d-flex">
  <!-- Sidebar -->
  <nav id="sidebar" aria-label="Sidebar Navigation">
    <div class="sidebar-header">
      <h4>Sistem Alumni</h4>
      <small>Admin Panel</small>
    </div>

    <ul class="list-unstyled">
      <li>
        <a href="<?php echo e(route('admin.dashboard')); ?>" class="sidebar-link <?php echo e(request()->routeIs('admin.dashboard') ? 'active' : ''); ?>">
          <i class="fa-solid fa-chart-line"></i> Dashboard
        </a>
      </li>
      <li>
        <a href="<?php echo e(route('admin.dataAlumni')); ?>" class="sidebar-link <?php echo e(request()->routeIs('admin.dataAlumni') ? 'active' : ''); ?>">
          <i class="fa-solid fa-user-graduate"></i> Data Alumni
        </a>
      </li>
      <li>
        <a href="<?php echo e(route('admin.prestasi')); ?>" class="sidebar-link <?php echo e(request()->routeIs('admin.prestasi') ? 'active' : ''); ?>">
          <i class="fa-solid fa-bullhorn"></i> Prestasi
        </a>
      </li>
      <li>
        <a href="<?php echo e(route('admin.pekerjaan')); ?>" class="sidebar-link <?php echo e(request()->routeIs('admin.pekerjaan') ? 'active' : ''); ?>">
          <i class="fa-solid fa-bullhorn"></i> Pekerjaan
        </a>
      </li>
      <li>
        <a href="<?php echo e(route('admin.pendidikan')); ?>" class="sidebar-link <?php echo e(request()->routeIs('admin.pendidikan') ? 'active' : ''); ?>">
          <i class="fa-solid fa-bullhorn"></i> Pendidikan lanjut
        </a>
      </li>
    </ul>

    <form method="GET" action="<?php echo e(route('logout')); ?>">
      <?php echo csrf_field(); ?>
      <button type="submit" class="logout-btn" aria-label="Logout">
        <i class="fa-solid fa-right-from-bracket"></i> Logout
      </button>
    </form>
  </nav>

  <div id="page-content-wrapper" class="flex-grow-1">
    <!-- Navbar -->
    <nav class="navbar">
      <button class="btn-menu-toggle" id="menu-toggle" aria-label="Toggle Sidebar">
        <i class="fa fa-bars"></i>
      </button>
      <h5>Sistem Informasi Data Alumni</h5>
      <ul class="navbar-nav">
        <li class="nav-item">
          <span style="margin-top: 10px"><i class="fa-solid fa-user-circle"></i> Admin</span>
        </li>
        <li class="nav-item">
          
        </li>
      </ul>
    </nav>

    <div class="container-fluid py-4">
      <?php echo $__env->yieldContent('content'); ?>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const toggleBtn = document.getElementById('menu-toggle');
    const wrapper = document.getElementById('wrapper');

    toggleBtn.addEventListener('click', () => {
      wrapper.classList.toggle('toggled');
    });
  });
</script>

</body>
</html>
<?php /**PATH C:\projekukk_MRafiAssidiqi_XIIRPL2\projekukk_MRafiAssidiqi_XIIRPL11\resources\views/layouts/admin.blade.php ENDPATH**/ ?>