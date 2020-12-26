@extends('layouts.app')
@section('content')
@section('title', ' الدراسة المبدئية')


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <div>
        <form action="{{ route('nonsaudi') }}" class="text-right" method="POST">
                @csrf
                @if (count($errors) > 0)
                    <div class = "alert alert-danger text-right">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <body style="background-image: url({{url('/img/خلفيه%20البرنامج%205%20شفاف.png')}}); font-family:Cairo;"> 
                <div class="container-fluid conta">
        <div class="row">
            <div class="col">
                <div class="card shadow mb-4" style="text-align: right;">
                    <div class="card-header py-3" style="background: rgb(255,255,255);">
                        <h5 class="m-0 font-weight-bold" style="color: #006837;">الدراسة المبدئية للمتقدم</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group" style="margin-top: 15px;margin-right: 50px;margin-left: 50px;">
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for=""><strong>اسم المستضيف</strong><br></label><input name="name" value="{{ old('name') }}" class="form-control" type="text"></div>
                                        <div class="form-group"><label for=""><strong>السجل المدني</strong><br></label><input  name="national_id" value="{{ old('national_id') }}" class="form-control" type="text"></div>
                                        <div class="form-group"><label for=""><strong>منطقة المستضيف</strong><br></label><input name="region" value="{{ old('region') }}" placeholder="القصيم" class="form-control" type="text"></div>
                                        <div class="form-group"><label for=""><strong>عمر مقدم الطلب</strong><br></label><input name="age" value="{{ old('age') }}" class="form-control" type="text"></div>
                                    </div>
                                </div>
                                <div class="form-group"><button class="btn btns mt-4" style="background-color:#006837; color:white;" type="submit">{{__('حفظ')}}</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

                    @if(session()->has('success'))
                        <br>
                        <div class="col-4">
                            <button type="submit" class="btn btns mt-4" style="background-color:#006837; color:white;">{{__('تسجيل بيانات')}}</button>
                        </div>
                    @endif
        </form>
    </div>
</div>
@endsection
@section('footer')
    @include('footer')
@endsection