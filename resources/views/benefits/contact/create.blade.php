@extends('layouts.app')
@section('content')
@section('title', 'معلومات الإتصال')

<body style="background-image: url({{url('/img/خلفيه%20البرنامج%205%20شفاف.png')}}); font-family:Cairo;">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container"><img class="mx-auto logosize" src="{{('/img/شعار%20شفاف.png')}}"></div>
    </nav>
    <div class="container-fluid conta">
        <div class="row">
            <div class="col">
                <div class="card shadow mb-4" style="text-align: right;">
                    <div class="card-header py-3" style="background: rgb(255,255,255);">
                        <h5 class="m-0 font-weight-bold" style="color: #006837;">معلومات التواصل</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group" style="margin-top: 15px;margin-right: 50px;margin-left: 50px;">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="alert alert-danger text-right">{{ $error }}</li>
                                @endforeach
                            </ul>
                            <form action="{{ route('contactInfo.store') }}" method="POST">
                                @csrf
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="email">
                                                <strong>البريد الألكتروني</strong><br>
                                        </label>
                                        <input input value="{{ old('email')}}" class="form-control" type="email" name="email"></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label for="mobile_number"><strong>رقم الجوال</strong></label><input value="{{ old('mobile_number')}}" class="form-control" type="text" name="mobile_number"></div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for="phone_number"><strong>رقم الهاتف</strong><br></label><input value="{{ old('phone_number')}}" class="form-control" type="text" name="phone_number"></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label for="whatsapp_number"><strong>رقم الجوال (واتساب)</strong></label><input value="{{ old('whatsapp_number')}}" class="form-control" type="text" name="whatsapp_number"></div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for="other_number"><strong>رقم جوال قريب</strong><br></label><input value="{{ old('other_number')}}" class="form-control" type="text" name="other_number"></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label for="teljob">
                                            <strong>صلة القرابة</strong></label>
                                            <select class="form-control" value="{{ old('relative')}}" name="relative">
                                                <option></option>
                                                <option>والد</option>
                                                <option>والدة</option>
                                                <option>زوج</option>
                                                <option>زوجة</option>
                                                <option>ابن</option>
                                                <option>جد</option>
                                                <option>جدة</option>
                                                <option>أخ</option>
                                                <option>أخت</option>
                                                <option>ابن الإبن</option>
                                                <option>عم</option>
                                                <option>عمة</option>
                                                <option>خال</option>
                                                <option>خالة</option>
                                                <option>ابن الأخ</option>
                                                <option>ابن الأخت</option>
                                            </select></div>
                                    </div>
                                </div>
                                <div class="form-group"><button class="btn btns mt-4" type="submit" style="background-color:#006837; color:white;"> حفظ و انتقال</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('footer')
@endsection