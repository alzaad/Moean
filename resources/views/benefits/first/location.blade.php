@extends('layouts.app')
@section('content')
@section('title', 'تحديد النطاق')


    <body style="background-image: url({{url('/img/خلفيه%20البرنامج%205%20شفاف.png')}}); font-family:Cairo;">

        <div class="container-fluid conta">
        <div class="row">
            <div class="col">
                <div class="card shadow mb-4" style="text-align: right;">
                    <div class="card-header py-3" style="background: rgb(255,255,255);">
                        <h5 class="m-0 font-weight-bold" style="color: #006837;">الأحياء التابعة للزاد الخيري</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group" style="margin-top: 15px;margin-right: 50px;margin-left: 50px;">
                            <form action="{{ route('check_Location') }}" class="text-right" method="POST">
                                @csrf
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group">
                                            <select name="check_location" class="form-control"><optgroup label="  ">
                                                <option></option>
                                                <option>الفايزية</option>
                                                <option>الأفق</option>
                                                <option>الأخضر</option>
                                                <option>الجامعيين</option>
                                                <option>مبروكة الرواف</option>
                                                <option>الرابية</option>
                                                <option>الخزامى</option>
                                                <option value="آخرى">
                                                    آخرى</option>
                                                </optgroup>
                                    </select>
                                </div>
                                    </div>
                                </div>
                                <div class="form-group"><button class="btn btns mt-4" type="submit">تحقق</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
@section('footer')
    @include('footer')
@endsection