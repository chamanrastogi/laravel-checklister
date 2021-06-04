@extends('layouts.auth')

@section('content')
<div class="col-md-6">
  <div class="card mx-4">
    <div class="card-body p-4">
      <h1>{{ __('Register') }}</h1>
      <p class="text-muted">Create your account</p>
      <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="input-group mb-3">
          <div class="input-group-prepend"><span class="input-group-text"> <svg class="c-icon">
            <use xlink:href="{{asset('vendors/@coreui/icons/svg/free.svg#cil-user')}}"></use>
            </svg></span></div>
          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
          @error('name') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend"><span class="input-group-text"> <svg class="c-icon">
            <use xlink:href="{{asset('vendors/@coreui/icons/svg/free.svg#cil-envelope-open')}}"></use>
            </svg></span></div>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
          @error('email') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend"><span class="input-group-text"> <svg class="c-icon">
            <use xlink:href="{{asset('vendors/@coreui/icons/svg/free.svg#cil-lock-locked')}}"></use>
            </svg></span></div>
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
          @error('password') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror </div>
        <div class="input-group mb-4">
          <div class="input-group-prepend"><span class="input-group-text"> <svg class="c-icon">
            <use xlink:href="{{asset('vendors/@coreui/icons/svg/free.svg#cil-lock-locked')}}"></use>
            </svg></span></div>
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>
        <div class="card-footer p-4">
            <div class="row">
            <div class="col-6">
                <button type="submit" class="btn btn-block btn-success"> {{ __('Register') }} </button>
            </div>
            <div class="col-6">
            <a class="btn btn-block btn-info" href="{{ route('login') }}"><span>Login</span></a>
            </div>
            </div>
            </div>
        
      </form>
      
    </div>
  </div>
</div>
@endsection 