@extends('layouts.app')
@section('content')
@section('title', 'إعادة تعيين كلمة المرور')

<body class="login-dark" >
    <div class="login-dark" style="background-image: url({{url('/img/خلفيه%20البرنامج%205%20شفاف.png')}});">

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="post" action="{{ route('password.email') }}"><a class="d-flex justify-content-center" href=""><img class="mx-auto" src="{{('/img/شعار%20شفاف.png')}}" width="100px" height="100px"></a>
            <p class="login mt-5">إعادة تعيين كلمة المرور</p>
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
            <div class="empty"></div>                     

            <div class="form-group">
                <button class="btn btn-primary btn-block mt-5" type="submit">{{ __('ارسال رابط اعادة تعيين الرقم السري') }}</button>
            </div>
          
        </form>
    </div>
@endsection
@section('footer')
    @include('footer')
@endsection