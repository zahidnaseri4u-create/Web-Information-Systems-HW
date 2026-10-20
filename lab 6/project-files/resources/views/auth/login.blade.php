@extends('layouts.app')

@section('title', 'Sign in | IT Student Portal')

@section('content')
<section class="hero">
    <div class="hero-copy">
        <span class="eyebrow">● Welcome back</span>
        <h1>Good to see<br>you again.</h1>
        <p class="lead">Sign in to continue to your IT Student Portal dashboard and pick up where your learning journey left off.</p>
        <div class="feature-list"><span>Private student access</span><span>Session-based login</span><span>Simple and secure</span></div>
    </div>
    <div class="panel">
        <h2>Sign in</h2>
        <p class="sub">Use the email and password you registered with.</p>
        @if ($errors->any())
            <div class="alert error"><ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
        @endif
        @if (session('success'))<div class="alert success">{{ session('success') }}</div>@endif
        <form method="POST" action="{{ route('login.store') }}">
            @csrf
            <div class="field"><label for="email">Email address</label><input id="email" name="email" type="email" value="{{ old('email') }}" autocomplete="email" required></div>
            <div class="field"><label for="password">Password</label><input id="password" name="password" type="password" autocomplete="current-password" required></div>
            <button class="btn" type="submit">Sign in&nbsp; →</button>
        </form>
        <p class="below">New to the portal? <a href="{{ route('register') }}">Create an account</a></p>
    </div>
</section>
@endsection
