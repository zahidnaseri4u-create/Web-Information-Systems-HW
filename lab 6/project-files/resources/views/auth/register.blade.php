@extends('layouts.app')

@section('title', 'Create account | IT Student Portal')

@section('content')
<section class="hero">
    <div class="hero-copy">
        <span class="eyebrow">● Student access portal</span>
        <h1>Your next chapter<br>starts here.</h1>
        <p class="lead">Create your student portal account to access your personal dashboard. A simple, secure place to begin your learning journey.</p>
        <div class="feature-list"><span>Secure sign-up</span><span>Personal dashboard</span><span>Protected access</span></div>
    </div>
    <div class="panel">
        <h2>Create an account</h2>
        <p class="sub">Enter your details below to get started.</p>
        @if ($errors->any())
            <div class="alert error"><ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
        @endif
        @if (session('success'))<div class="alert success">{{ session('success') }}</div>@endif
        <form method="POST" action="{{ route('register.store') }}">
            @csrf
            <div class="field"><label for="name">Full name</label><input id="name" name="name" type="text" value="{{ old('name') }}" autocomplete="name" required></div>
            <div class="field"><label for="email">Email address</label><input id="email" name="email" type="email" value="{{ old('email') }}" autocomplete="email" required></div>
            <div class="field"><label for="password">Password</label><input id="password" name="password" type="password" minlength="8" autocomplete="new-password" required></div>
            <div class="field"><label for="password_confirmation">Confirm password</label><input id="password_confirmation" name="password_confirmation" type="password" minlength="8" autocomplete="new-password" required></div>
            <button class="btn" type="submit">Create account&nbsp; →</button>
        </form>
        <p class="below">Already have an account? <a href="{{ route('login') }}">Sign in</a></p>
    </div>
</section>
@endsection
