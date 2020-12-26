
@extends('layouts.app')
@section('content')
@section('title', 'معلومات المهنة')

<body style="background-image: url({{url('/img/خلفيه%20البرنامج%205%20شفاف.png')}}); font-family:Cairo;">    
    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container"><img class="mx-auto logosize" src="{{('/img/شعار%20شفاف.png')}}"></div>
    </nav>
    <div class="container-fluid conta">
        <div class="row">
            <div class="col">
                <div class="card shadow mb-4" style="text-align: right;">
                    <div class="card-header py-3" style="background: rgb(255,255,255);">
                        <h5 class="m-0 font-weight-bold" style="color: #006837;">معلومات المهنة</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group" style="margin-top: 15px;margin-right: 50px;margin-left: 50px;">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li class="alert alert-danger text-right">{{ $error }}</li>
                                @endforeach
                            </ul>
                            <form method="POST" action="{{ route('jobInfo.store') }}">
                                @csrf
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for="job"><strong>المهنة</strong><br></label>
                                            <select class="form-control" value="{{ old('job')}}" id="job" name="job">
                                                <option></option>
                                                <option>موظف/ة حكومي/ة</option>
                                                <option>موظف/ة أهلي/ة</option>
                                                <option >
                                                متقاعد/ة</option>
                                                <option >
                                                متسبب/ة</option>
                                                <option >
                                                طالب/ة</option>
                                                <option>
                                                ربة منزل</option>
                                                <option> 
                                                لايوجد</option>
                                            </select>
                                        </div> 
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label for="salary"><strong>مصدر الدخل</strong></label>
                                            <select name="salary" value="{{ old('salary')}}" class="form-control">
                                                <optgroup label="  ">
                                                    <option></option>
                                                    <option>راتب شهري (قطاع عسكري /حكومي)</option>
                                                    <option>راتب شهري (قطاع خاص)</option>
                                                    <option>راتب تقاعد (قطاع خاص)</option>
                                                    <option>الضمان الإجتماعي</option>
                                                    <option>إعانة سنوية </option>
                                                    <option>نشاط تجاري</option>
                                                    <option>غير ذلك</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <div id="view_2" class="form-group">
                                            <label value="{{ old('job_place')}}" for="job_place">
                                            <strong>مكان العمل</strong><br></label>
                                            <input class="form-control" type="text" name="job_place">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div id="view_1" class="form-group">
                                            <label value="{{ old('phone_number')}}" for="phone_number">
                                                <strong>هاتف العمل</strong>
                                            </label>
                                            <input class="form-control" type="text" name="phone_number">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for="salary"><strong>التعليم</strong></label>
                                            <select name="education" value="{{ old('education')}}" class="form-control">
                                                <optgroup label="  ">
                                                    <option></option>
                                                    <option>جامعي</option>
                                                    <option>ثانوي</option>
                                                    <option>متوسط</option>
                                                    <option>ابتدائي</option>
                                                    <option>يقرأويكتب </option>
                                                    <option>أمي</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="salary_month"><strong>الراتب الشهري</strong><br></label>
                                            <input class="form-control" value="{{ old('salary_month')}}" type="text" name="salary_month">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btns mt-4" type="submit" style="background-color:#006837; color:white;">حفظ و انتقال</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $.views = {
                '0' : $([]),
                'view3' : $('#view_1,#view_2')
            };

            $('#job').change(function() {
                var value = $("#job").val();
                    // alert(value)
                    if (value == "متقاعد/ة"){
                        // hide all
                        $.each($.views, function() { 
                            this.hide(); 
                    });
                    }else if (value == "ربة منزل"){
                        $.each($.views, function() { 
                            this.hide(); 
                    });
                    }else if(value == "طالب/ة"){
                        $.each($.views, function() { 
                            this.hide(); 
                    });
                    }else if(value == "متسبب/ة"){
                        $.each($.views, function() { 
                            this.hide(); 
                    });
                    }else if(value == "لايوجد"){
                        $.each($.views, function() { 
                            this.hide(); 
                    });
                    }else{
                    // show current
                        $.views[$(this).val()].show();
                                                }
                                            });
                                        });
    </script>
@endsection
@section('footer')
    @include('footer')
@endsection