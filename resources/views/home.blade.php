@extends('layouts.app')
@section('content')
@section('title', 'الصفحة الرئيسية')

<body style="background-image: url({{url('/img/خلفيه%20البرنامج%205%20شفاف.png')}}); font-family:Cairo;">  
    <div class="login-dark" style="background: url(&quot;assets/img/خلفيه%20البرنامج%205%20شفاف.png&quot;);">
    <form method="post" action="{{ route('login') }}"><a class="d-flex justify-content-center" href="">
        <img class="mx-auto" src="{{('/img/moeen111.png')}}" width="117px" height="63px"></a>
            <p class="login mt-5">الصفحة الرئيسية</p>

            <div class="form-group">
                <div class="invalid-feedback"></div>
            </div>
           
            <div class="form-group">
                <div class="invalid-feedback"></div>
            </div>
                <div class="form-group"><a href="{{ route('checkLocation') }}" class="btn btn-primary btn-block mt-5" type="button">تسجيل الببانات</a></div>
            <div>
            </div>
                <div class="form-group"><a href="{{ route('profile.index') }}" class="btn btn-primary btn-block mt-5" type="button">عرض الأهلية</a></div>
            <div>
            </div>
        </form>
    </div>
@endsection
@section('footer')
    @include('footer')
@endsection