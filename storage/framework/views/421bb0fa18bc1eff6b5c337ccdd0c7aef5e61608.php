<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bicopy Admin Login</title>

  <link rel="icon" href="<?php echo e(asset('logo.png')); ?>" type="image/x-icon">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="/lte/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="/lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="/lte/dist/css/adminlte.min.css">

  <style>
    body.login-page {
      background-image: url('<?php echo e(asset('assets/img/AtapBicopi.jpg')); ?>'); /* Your background image path */
      background-size: cover;
      background-position: center center;
      background-repeat: no-repeat;
      background-attachment: fixed;
      position: relative;
    }

    /* Optional: Add an overlay for better readability of the login box */
    .card-outline::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.3);
        z-index: -1;
        border-radius: .25rem;
    }
    .card-outline {
        position: relative;
        z-index: 1;
    }

    /* Logo Positioning */
    .top-left-logo {
        position: absolute;
        top: 20px;
        left: 20px;
        z-index: 1050;
        display: flex;
        align-items: center;
        text-decoration: none;
    }
    .top-left-logo img {
        height: 60px;
        margin-right: 15px;
        border-radius: 50%;
    }
    .top-left-logo .brand-text {
        color: white;
        font-weight: bold;
        font-size: 1.5rem;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
    }

    /* Make the login card transparent */
    .card {
        background-color: rgba(255, 255, 255, 0.7) !important;
        border: none !important;
    }

    /* Adjust card header for transparency and text color */
    .card-header {
        background-color: rgba(30, 150, 60, 0.8) !important;
        color: white;
        border-bottom: 1px solid rgba(0, 0, 0, 0.125);
    }

    /* Change Login text hover color to black */
    .card-header a {
        color: white !important; /* Pastikan warna default teks Login tetap putih */
    }
    .card-header a:hover {
        color: black !important; /* UBAH DI SINI: Warna hitam saat di-hover */
    }

    /* Ensure text within the card body is readable */
    .card-body p, .card-body a {
        color: #333;
    }
  </style>
</head>
<body class="hold-transition login-page">

<a href="/" class="top-left-logo">
  <img src="<?php echo e(asset('assets/img/logo_bikopi.jpg')); ?>" alt="Bicopi Logo" class="img-fluid">
  <span class="brand-text">Bicopi.com</span>
</a>

<div class="login-box">
  <div class="card card-outline card-success">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>Masuk</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Masuk untuk memulai sesi Anda</p>

      <?php $__errorArgs = ['loginError'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="alert alert-danger">
            <strong>Kesalahan</strong>
            <p><?php echo e($message); ?></p>
        </div>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

      <form method="post">
          <?php echo csrf_field(); ?>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo e(old('email')); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <small style="color:red"><?php echo e($message); ?></small>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Kata Sandi" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <small style="color:red"><?php echo e($message); ?></small>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-success btn-block">Masuk</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="/lte/plugins/jquery/jquery.min.js"></script>
<script src="/lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/lte/dist/js/adminlte.min.js"></script>
</body>
</html><?php /**PATH D:\Projek_Web\laragon\www\Website Bicopi\resources\views/auth/login.blade.php ENDPATH**/ ?>