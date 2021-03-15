@extends('auth/template')

@section('title')
Register
@endsection

@section('content')
<div class="register-box">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <img src="{{asset('dist/img/logo1.png')}}" alt="" width="30%">
            <a href="/" class="h2"><b>Pilih Tempat</b></a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Register akun baru</p>

            <form action="/store_regist" method="post" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}" placeholder="Nama Lengkap">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="input-group mb-3">
                    <input type="input" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" placeholder="Email">
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
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{old('password')}}" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="input-group mb-3">
                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation"
                        value="{{old('password_confirmation')}}" placeholder="Konfirmasi password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                @error('password_confirmation')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="d-flex flex-row-reverse">
                    {{-- <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                <label for="agreeTerms">
                 I agree to the <a href="#">terms</a>
                </label>
              </div>
            </div> --}}
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            {{-- <div class="social-auth-links text-center">
          <a href="#" class="btn btn-block btn-primary">
            <i class="fab fa-facebook mr-2"></i>
            Sign up using Facebook
          </a>
          <a href="#" class="btn btn-block btn-danger">
            <i class="fab fa-google-plus mr-2"></i>
            Sign up using Google+
          </a>
        </div> --}}

            <a href="{{route('login')}}" class="text-center">Login sebagai user</a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->
@endsection