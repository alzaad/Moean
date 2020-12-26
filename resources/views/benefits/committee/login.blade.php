@extends('layouts.app')
@section('content')
@section('title', 'تسجيل دخول عضو اللجنة')

<body class="login-dark" >
    <div class="login-dark" style="background-image: url({{url('/img/خلفيه%20البرنامج%205%20شفاف.png')}});">

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="post" action="{{ route('committee.check') }}">
            @csrf
            <a class="d-flex justify-content-center" href=""><img class="mx-auto" src="{{('/img/شعار%20شفاف.png')}}" width="100px" height="100px"></a>
            <p class="login mt-5"> تسجيل دخول عضو اللجنة أو الباحث</p>
            <div class="form-group">
            <input class="form-control" type="integer" name="committees_number" placeholder="رقم عضو اللجنة أو الباحث" required>
                @if($alert = Session::get('alert'))
                    <div class="alert alert-danger">
                        {{ $alert }}
                    </div>
                @endif
                <div class="invalid-feedback">
                </div>
            </div>
            <div class="form-group">
                <div class="invalid-feedback"></div>
            </div>
            <div class="empty"></div>                     

            <div class="form-group">
                <button class="btn btn-primary btn-block mt-5" type="submit">{{ __('دخول') }}</button>
            </div>
          
        </form>
    </div>
@endsection
@section('footer')
    @include('footer')
@endsection