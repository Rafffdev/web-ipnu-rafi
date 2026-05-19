<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Admin</title>

  <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo e(asset('fontawesome/css/all.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>" />
  
</head>
<body>
<div class="bg-shape"></div>
  <div class="login-card">
    <img src="<?php echo e(asset('gambar/logo-removebg-preview.png')); ?>" alt="Logo" />
    <h3>Login Admin</h3>

    <form method="POST" action="<?php echo e(route('login.post')); ?>">
      <?php echo csrf_field(); ?>
      <input type="text" name="username" class="form-control" placeholder="Username" required />
      <input type="password" name="password" class="form-control" placeholder="Password" required />

      <button type="submit" class="btn-login">
        <i class="fa-solid fa-right-to-bracket me-2"></i> Login
      </button>

      <?php $__errorArgs = ['login_error'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="alert alert-danger mt-3"><?php echo e($message); ?></div>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

      <a href="<?php echo e(route('user.index')); ?>">← Kembali ke Dashboard</a>
    </form>
   </div>

</body>
</html>
<?php /**PATH C:\projekukk_MRafiAssidiqi_XIIRPL2\projekukk_MRafiAssidiqi_XIIRPL11\resources\views/login.blade.php ENDPATH**/ ?>