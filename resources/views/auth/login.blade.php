@extends('layouts.app')
@section('content')
@section('title', 'تسجيل دخول')


<body class="login-dark" style="background-image: url({{url('/img/خلفيه%20البرنامج%205%20شفاف.png')}});">
    <div class="login-dark" style="background-image: url({{url('/img/خلفيه%20البرنامج%205%20شفاف.png')}});">
        <form method="post" action="{{ route('login') }}"><a class="d-flex justify-content-center" href=""><img class="mx-auto" src="{{('/img/شعار%20شفاف.png')}}" width="100px" height="100px"></a>
            @csrf
            <p class="login mt-5">تسجيل دخول</p>
            <div class="form-group">
                <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="البريد الالكتروني" required>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                <div class="invalid-feedback">
                    <p>Paragraph</p>
                </div>
            </div>
            <div class="form-group">
                <div class="invalid-feedback"></div>
            </div>
            
            <div class="form-group">
                <input class="form-control input--style-6  @error('password') is-invalid @enderror" type="password" name="password" placeholder="كلمة المرور" required>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                <div class="invalid-feedback"></div>
            </div>
            <div class="form-group">
                <div class="invalid-feedback"></div>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block mt-5" type="submit">تسجيل</button>
            </div>
            <div>
                @if (Route::has('password.request'))
                    <a class="linkform" href="{{ route('password.request') }}">{{ __('هل نسيت كلمة المرور؟') }}</a>
                @endif
                <a class="linkform" href="{{ route('committee.index') }}">تسجيل دخول عضو لجنة أو باحث</a>
            </div>
        </form>
    </div>
@endsection
@section('footer')
    @include('footer')
@endsection