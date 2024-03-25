<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contando | Login</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap CSS -->
  {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}

  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="text-center card-header">
      <a href="/" class="h1"><b>CONTANDO</b>+</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Entre com suas credenciais</p>
      <x-auth-session-status class="mb-4" :status="session('status')" />

      <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-3 input-group">
          <input type="email" id="email" name="email" class="form-control" placeholder="E-mail":value="old('email')" required autocomplete="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mb-3 input-group">
          <input type="password" id="password" name="password" class="form-control" placeholder="Senha">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember_me" name="remember">
              <label for="remember_me">
                Lembrar
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">Esqueci minha senha</a>
        @endif
      </p>
      <p class="mb-0">
        <a href="{{ route('register') }}" class="text-center">Registrar</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>
</body>
</html>
