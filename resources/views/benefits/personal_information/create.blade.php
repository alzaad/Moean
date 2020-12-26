@extends('layouts.app')
@section('content')
@section('title', 'المعلومات الشخصية')

<body style="background-image: url({{url('/img/خلفيه%20البرنامج%205%20شفاف.png')}}); font-family:Cairo;">
            <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container"><img class="mx-auto logosize" src="{{('/img/شعار%20شفاف.png')}}"></div>
    </nav>
    <div class="container-fluid conta">
        <div class="row">
            <div class="col">
                <div class="card shadow mb-4" style="text-align: right;">
                    <div class="card-header py-3" style="background: rgb(255,255,255);">
                        <h5 class="m-0 font-weight-bold" style="color: #006837;">البيانات الشخصية</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group" style="margin-top: 15px;margin-right: 50px;margin-left: 50px;">
                        <ul>
                        @if (Session::has('error'))
                            <div class="alert alert-danger">{{ Session::get('error') }}</div>
                        @endif
                            @foreach ($errors->all() as $error)
                                <li class="alert alert-danger text-right">{{ $error }}</li>
                            @endforeach
                        </ul>
                            <form action="{{ route('personalInfo.store') }}" method="POST">
                                @csrf
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for="first_name"><strong>الاسم الأول</strong></label><input value="{{ old('first_name') }}" class="form-control" type="text" name="first_name"></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label for="second_name"><strong>اسم الأب</strong></label><input value="{{ old('second_name') }}" class="form-control" type="text" name="second_name"></div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for="third_name"><strong>اسم الجد</strong><br></label><input value="{{ old('third_name') }}" class="form-control" type="text" name="third_name"></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label for="family_name"><strong>اسم العائلة</strong></label><input value="{{ old('family_name') }}" class="form-control" type="text" name="family_name"></div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for="sex">
                                            <strong>الجنس</strong>
                                                <br></label>
                                                <select name="gender" class="form-control"><optgroup>
                                                    <option>انثى</option>
                                                    <option>ذكر</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- if user saudi -->
                                    @if(auth()->user()->user_type == 'saudi')

                                    <div class="col">
                                        <div class="form-group"><label for="national_id"><strong>رقم الهوية الوطنية</strong></label><input value="{{ old('national_id') }}" class="form-control" type="intger" name="national_id"></div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for="place_national"><strong>جهة الإصدار</strong><br></label><input value="{{ old('place_national') }}" class="form-control" type="intger" name="place_national"></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label for="place_birth"><strong>مكان الميلاد</strong></label><input value="{{ old('place_birth') }}" class="form-control" type="intger" name="place_birth"></div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for="date_birth"><strong>تاريخ الميلاد</strong><br></label><input value="{{ old('date_birth') }}" class="form-control" type="date" name="date_birth"></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label for="date_national"><strong>تاريخ إصدار البطاقة</strong></label><input value="{{ old('date_national') }}" class="form-control" type="date" name="date_national"></div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for="date_ex_national"><strong>تاريخ إنتهاء البطاقة</strong><br></label><input value="{{ old('date_ex_national') }}" class="form-control" type="date" name="date_ex_national"></div>
                                    </div>
                                    <div class="col"></div>
                                </div>
                                @endif
                                <!-- if user non saudi -->
                                @if(auth()->user()->user_type == 'non_saudi')

                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for=""><strong>رقم الإقامة</strong><br></label><input value="{{ old('residency_number') }}" class="form-control" type="text" name="residency_number"></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label for="visa_name"><strong>اسم صاحب التأشيرة </strong></label><input value="{{ old('visa_name') }}" class="form-control" type="text" name="visa_name"></div>
                                    </div>
                                </div>
                              
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for=""><strong>رقم الجواز  </strong><br></label><input value="{{ old('passport_number') }}" class="form-control" type="text" name="passport_number"></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label for="passport_date"><strong>تاريخ اصدار جواز السفر</strong></label><input value="{{ old('passport_date') }}" class="form-control" type="date" name="passport_date"></div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for="passport_ex_date"><strong> تاريخ انتهاء جواز السفر</strong><br></label><input value="{{ old('passport_ex_date') }}" class="form-control" type="text" name="passport_ex_date"></div>

                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label for="passport_place"><strong>جهة اصدار جواز السفر</strong><br></label><input value="{{ old('passport_place') }}" class="form-control" type="text" name="passport_place"></div>

                                    </div>
                                </div>


                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for="nationality"><strong>الجنسية</strong></label><input value="{{ old('nationality') }}" class="form-control" type="text" name="nationality"></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label for=""><strong> رقم تأشيرة الزيارة </strong><br></label><input value="{{ old('visa_visit') }}" class="form-control" type="text" name="visa_visit"></div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for=""><strong>  تاريخ اصدار التأشيرة  </strong><br></label><input value="{{ old('visa_date') }}" class="form-control" type="date" name="visa_date"></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label for=""><strong>  تاريخ انتهاء التأشيرة  </strong><br></label><input value="{{ old('visa_ex_date') }}" class="form-control" type="date" name="visa_ex_date"></div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for=""><strong>تاريخ الدخول</strong><br></label><input value="{{ old('entry__date') }}" class="form-control" type="date" name=“entry__date”></div>
                                    </div>
                                    <div class="col">
                                    </div>
                                </div>
                            @endif
                                <div class="form-group">
                                    <button class="btn btns mt-4" type="submit" style="background-color:#006837; color:white; min-width: 250px;">حفظ وانتقال</button>
                                </div>
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