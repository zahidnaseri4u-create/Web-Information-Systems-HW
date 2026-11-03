@extends('layouts.app')
@section('title', 'Login')
@section('content')
<div class="row justify-content-center">
  <div class="col-md-6 col-lg-5">
    <div class="card shadow-sm"><div class="card-body p-4">
      <h1 class="h4 mb-3">Log in</h1>
      <form method="POST" action="{{ route('login.store') }}">
        @csrf
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input id="email" name="email" type="email" class="form-control" value="{{ old('email') }}" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input id="password" name="password" type="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Login</button>
      </form>
      <p class="mt-3 mb-0"><a href="{{ route('register') }}">Create a new account</a></p>
    </div></div>
  </div>
</div>
@endsection
