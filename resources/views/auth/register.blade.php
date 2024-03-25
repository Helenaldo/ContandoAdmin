<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contando | Registro</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="text-center card-header">
      <a href="/" class="h1"><b>CONTANDO</b>+</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Registrar</p>

      <form method="POST" action="{{ route('register') }}">
        @csrf
        {{-- PAREI AQUI --}}
        {{-- PAREI AQUI --}}
        {{-- PAREI AQUI --}}
        {{-- PAREI AQUI --}}
        <div class="mb-3 input-group">
          <input type="text" id="name" name="name" class="form-control" placeholder="Nome" :value="old('name')" required autocomplete="name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
        </div>
    </div>
    <x-input-error :messages="$errors->get('name')" />
        <div class="mb-3 input-group">
          <input type="email" id="email" name="email" class="form-control" placeholder="E-mail" :value="old('email')" required autocomplete="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <x-input-error :messages="$errors->get('email')" />
        <div class="mb-3 input-group">
          <input type="password" id="password" name="password" class="form-control" placeholder="Senha" autocomplete="new-password" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <x-input-error :messages="$errors->get('password')"/>
        <div class="mb-3 input-group">
          <input type="password" id="password_confirmation" class="form-control" placeholder="Repetir senha" name="password_confirmation" required autocomplete="new-password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <x-input-error :messages="$errors->get('password_confirmation')"/>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               Eu acerto os <a href="#">termos</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Registrar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      {{-- <div class="text-center social-auth-links">
        <a href="#" class="btn btn-block btn-primary">
          <i class="mr-2 fab fa-facebook"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="mr-2 fab fa-google-plus"></i>
          Sign up using Google+
        </a>
      </div> --}}

      <a href="{{ route('login') }}" class="text-center">Eu já sou registrado</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>
</body>
</html>
