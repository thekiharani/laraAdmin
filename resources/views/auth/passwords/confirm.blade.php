@extends('layouts.guest')

@section('content')
<!-- /.login-logo -->
  <div class="card">
      <p class="card-header h3 text-center">{{ __('Confirm Password') }}</p>
    <div class="card-body login-card-body">
        <p>{{ __('Please confirm your password before continuing.') }}</p>
      <form method="POST" action="{{ route('password.confirm') }}">
          @csrf

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

         <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">{{ __('Confirm Password') }}</button>
          </div>

      </form>

{{--        @if (Route::has('password.request'))--}}
{{--            <hr>--}}
{{--            <div class="form-group">--}}
{{--                <a class="btn btn-danger btn-block btn-customized" href="{{ route('password.request') }}">--}}
{{--                    {{ __('Forgot Your Password?') }}--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        @endif--}}

    </div>
    <!-- /.login-card-body -->
  </div>
@endsection
