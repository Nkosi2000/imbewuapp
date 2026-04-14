{{-- resources/views/admin/dashboard.blade.php --}}
@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="alert alert-info">
    <h4>Admin Panel</h4>
    <p>Welcome back, {{ Auth::user()->full_name }}. You have administrative privileges.</p>
</div>
@endsection