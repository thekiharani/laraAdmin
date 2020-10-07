@extends('layouts.guest')

@section('content')
<!-- /.login-logo -->
  <div class="card">
      <p class="card-header h3 text-center">{{ __('Login') }}</p>
    <div class="card-body login-card-body">
      <form method="POST" action="{{ route('login') }}">
          @csrf

        <div class="input-group mb-3">
          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email Address" value="{{ old('email') }}" required autocomplete="email" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="input-group mb-3">
          <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

        @if (Route::has('password.request'))
            <hr>
            <div class="form-group">
                <a class="btn btn-danger btn-block btn-customized" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            </div>
        @endif

        @if (Route::has('register'))
            <hr>
            <div class="form-group">
                <a class="btn btn-success btn-block btn-customized" href="{{ route('register') }}">
                    {{ __('Have no Account? Register') }}
                </a>
            </div>
        @endif

    </div>
    <!-- /.login-card-body -->
  </div>
@endsection
