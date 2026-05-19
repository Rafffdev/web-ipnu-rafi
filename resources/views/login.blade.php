<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Admin</title>

  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
  
</head>
<body>
<div class="bg-shape"></div>
  <div class="login-card">
    <img src="{{ asset('gambar/logo-removebg-preview.png') }}" alt="Logo" />
    <h3>Login Admin</h3>

    <form method="POST" action="{{ route('login.post') }}">
      @csrf
      <input type="text" name="username" class="form-control" placeholder="Username" required />
      <input type="password" name="password" class="form-control" placeholder="Password" required />

      <button type="submit" class="btn-login">
        <i class="fa-solid fa-right-to-bracket me-2"></i> Login
      </button>

      @error('login_error')
        <div class="alert alert-danger mt-3">{{ $message }}</div>
      @enderror

      <a href="{{ route('user.index') }}">← Kembali ke Dashboard</a>
    </form>
   </div>

</body>
</html>
