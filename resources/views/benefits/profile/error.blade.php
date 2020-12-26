@extends('layouts.app')
@section('content')
@section('title', 'الأهلية')
<body style="background-image: url({{url('/img/خلفيه%20البرنامج%205%20شفاف.png')}});  font-family:Cairo;">
    
    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container"><img class="mx-auto logosize" src="{{('/img/شعار%20شفاف.png')}}"></div>
    </nav>

    <br><br><br><br><br><br><br><br><br>
    <div class="alert alert-danger text-center" role="alert">
        {{ $message }}
    </div>

@endsection
@section('footer')
    @include('footer')
@endsection