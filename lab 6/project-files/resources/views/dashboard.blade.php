@extends('layouts.app')

@section('title', 'Dashboard | IT Student Portal')

@section('content')
<section class="dash-wrap">
    <div class="dash-head">
        <div>
            <span class="eyebrow">● Your private space</span>
            <h1>Student dashboard</h1>
        </div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn logout" type="submit">Logout&nbsp; ↗</button>
        </form>
    </div>
    <div class="welcome">
        <span class="eyebrow" style="color:#dbe4ff">IT STUDENT PORTAL</span>
        <h2>Welcome, {{ auth()->user()->name }}.</h2>
        <p>You are signed in successfully. This page is protected by Laravel's <strong>auth</strong> middleware.</p>
    </div>
    <div class="info-grid">
        <div class="info-card"><small>Student name</small><p>{{ auth()->user()->name }}</p></div>
        <div class="info-card"><small>Registered email</small><p>{{ auth()->user()->email }}</p></div>
    </div>
</section>
@endsection
