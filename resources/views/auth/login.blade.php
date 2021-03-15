@extends('auth/template')

@section('title')
Login
@endsection

@section('content')
<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header">
            <img src="{{asset('dist/img/logo1.png')}}" alt="" width="30%">
            <a href="/" class="h2"><b>Pilih Tempat</b></a>
        </div>
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @elseif (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="card-body">
            <p class="login-box-msg">Silahkan Login</p>

            <form action="/store_login" method="post" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-3">
                    <input type="input" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="input-group mb-3">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="d-flex flex-row-reverse">
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <p class="mb-0">
                <a href="{{route('regist')}}" class="text-center">Register akun baru</a>
            </p>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.login-box -->
@endsection