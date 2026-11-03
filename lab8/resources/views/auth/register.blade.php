@extends('layouts.app')
@section('title', 'Register')
@section('content')
<div class="row justify-content-center">
  <div class="col-md-6 col-lg-5">
    <div class="card shadow-sm"><div class="card-body p-4">
      <h1 class="h4 mb-3">Create an account</h1>
      <form method="POST" action="{{ route('register.store') }}">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Full name</label>
          <input id="name" name="name" type="text" class="form-control" value="{{ old('name') }}" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input id="email" name="email" type="email" class="form-control" value="{{ old('email') }}" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password (min 8 characters)</label>
          <input id="password" name="password" type="password" class="form-control" minlength="8" required>
        </div>
        <div class="mb-3">
          <label for="password_confirmation" class="form-label">Confirm password</label>
          <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" minlength="8" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Register</button>
      </form>
      <p class="mt-3 mb-0"><a href="{{ route('login') }}">Already have an account?</a></p>
    </div></div>
  </div>
</div>
@endsection
