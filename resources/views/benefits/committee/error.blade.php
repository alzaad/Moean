@extends('benefits.committee.header')
@section('content')


<body style="background-image: url({{url('/img/خلفيه%20البرنامج%205%20شفاف.png')}}); font-family:Cairo;">    
    <div class="alert alert-danger text-center" role="alert">
        المستفيد لم يقم بإضافة أي بيانات 
    </div>

    <form action=" {{ route('committee.dashboard') }}" class="text-center" method="get">
        <button type="submit" class="btn btn-primary">رجوع</button>
    </form>
@endsection

@section('footer')
    @include('footer')
@endsection