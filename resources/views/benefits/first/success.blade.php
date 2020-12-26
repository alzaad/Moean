
@extends('layouts.app')
@section('content')

<body style="background-image: url({{url('/img/خلفيه%20البرنامج%205%20شفاف.png')}}); font-family:Cairo;">
<br>
    <div class="alert alert-success text-center" role="alert">
        مستحق،الرجاء اكمال تعبئة البيانات   
    </div>

    <div class="col-sm-12 text-center">
        <a href="" type="button" class="btn btn-primary float-center">التالي</a>
    </div>
@endsection

@section('footer')
    @include('footer')
@endsection