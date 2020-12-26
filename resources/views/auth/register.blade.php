@extends('layouts.app')
@section('content')
@section('title', 'تسجيل ')


<br>
<body class="login-dark" style="background-image: url({{url('/img/خلفيه%20البرنامج%205%20شفاف.png')}}); font-family:Cairo;">
    <div class="login-dark" style="background-image: url({{url('/img/خلفيه%20البرنامج%205%20شفاف.png')}});">
        <form method="POST" action="{{ route('register') }}"><a class="d-flex justify-content-center" href=""><img class="mx-auto" src="{{{'/img/شعار%20شفاف.png'}}}" width="100px" height="100px"></a>
            @csrf
            <p class="login mt-5">انشاء حساب</p>
            <div class="form-group">
                <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" placeholder="الاسم" required>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="البريد الالكتروني" required>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="كلمة المرور" required>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        
                <input class="form-control" type="password" name="password_confirmation" placeholder="تأكيد كلمة المرور" required></div>

                <p class="text-dark text-right" style="font-weight: bold;">الجنسية</p>
                    <div class="text-right">
                        <label style="color:black;" class="radio-inline">
                            <input type="radio" name="user_type" value="saudi" checked>{{ __('سعودي') }}
                        </label>
                        <label style="color:black;" class="radio-inline">
                            <input type="radio" name="user_type" value="non_saudi">{{ __('غير سعودي') }}
                        </label>
                    </div>
            <div>
                <div class="form-group"><a class="linkform" href="#"><br>بالضفط على "تسجيل" انت توافق على&nbsp;الشروط و الأحكام.<br></a></div>
            </div>
            <div class="form-group"><button class="btn btn-primary btn-block mt-0" type="submit">{{ __(' تسجيل') }}</button></div>
        </form>
    </div>

@endsection
@section('footer')
    @include('footer')
@endsection
