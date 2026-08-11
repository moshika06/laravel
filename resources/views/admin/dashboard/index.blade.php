@extends('layouts.admin_template')

@section('tittle')
@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Dashboard</h1>
            <p>Welcome to the admin dashboard!</p>
        </div>
        <div class="row g-4 col-12">
            @if (session('role') === 'admin')
                <a href="{{ route('student') }}" class="col-md-4">
                    <div class="card text-white text-center bg-success pt-3 mb-3 bg-s">
                        <i class="fa-solid fa-user graduate fa-3x"></i>
                        <div class="card-body">
                            <h5 class="card-title">Student Management</h5>
                        </div>
                    </div>
                </a>
            @endif
            <a href="{{ route('student') }}" class="col-md-3">
                <div class="card text-white text-center bg-primary pt-3 mb-3">
                    <i class="fa-solid fa-user graduate fa-3x"></i>
                    <div class="card-body">
                        <h5 class="card-title">Student Management</h5>
                    </div>
                </div>
            </a>
            <a href="{{ route('blog.index') }}" class="col-md-3">
                <div class="card text-white text-center bg-primary pt-3 mb-3">
                    <i class="fa-solid fa-blog fa-3x"></i>
                    <div class="card-body">
                        <h5 class="card-title">Blog Management</h5>
                    </div>
                </div>
            </a>
            <a href="{{ route('user.index') }}" class="col-md-3">
                <div class="card text-white text-center bg-primary pt-3 mb-3">
                    <i class="fa-solid fa-user graduate fa-3x"></i>
                    <div class="card-body">
                        <h5 class="card-title">User Management</h5>
                    </div>
                </div>
            </a>
            <a href="{{ route('mata_pelajaran.index') }}" class="col-md-3">
                <div class="card text-white text-center bg-primary pt-3 mb-3">
                    <i class="fa-solid fa-user graduate fa-3x"></i>
                    <div class="card-body">
                        <h5 class="card-title">Mata Pelajaran</h5>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection