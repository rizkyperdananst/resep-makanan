@extends('layouts.dashboard')
@section('title', 'Admin | Dashboard')
    
@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>

<!-- Content Row -->
<div class="row">
    <div class="alert text-white" style="background-color: rgb(134, 117, 18)">
        <h3>Selamat Datang {{ Auth::user()->name }}</h3>
    </div>
</div>

<!-- Content Row -->
@endsection