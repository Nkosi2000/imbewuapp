{{-- resources/views/user/dashboard.blade.php --}}
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="alert alert-success">
    <h4>Welcome, {{ Auth::user()->full_name }}!</h4>
    <p>You are logged in as a <strong>{{ Auth::user()->role->label() }}</strong>.</p>
</div>
@endsection