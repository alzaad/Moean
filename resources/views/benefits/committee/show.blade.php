@extends('benefits.committee.header')
@section('content')
@section('title', 'عرض بيانات المستفيد')

<nav class="navbar navbar-light navbar-expand-md navigation-clean">
            <div class="container"><img class="mx-auto" src="{{('/img/معين.png')}}" width="117px" height="63px"></div>
        </nav>

<form action="" method="get" class="form" enctype="multipart/form-data">
    @csrf
    <body style="background: #e7e2dd; font-family:Cairo;">

        <div class="container-fluid" style="width: 100%;margin-top: 70px;margin-bottom: 60px;">
            <div class="row">
                <div class="col">
                    <div class="card shadow mb-4" style="text-align: right;">
                        <div class="card-header py-3" style="background: rgb(255,255,255);">
                            <h5 class="m-0 font-weight-bold" style="color: #006837;">عرض طلبات المستفيدين</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group f-g">
                                <form><div class="table-responsive">
                                    
                                    <div class="form-group f-g">
                                <form><div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <!-- Initial Studies -->
                    <th scope="col">عدد أفراد الأسرة</th>
                    <th scope="col">الراتب </th>
                    <th scope="col">الضمان الإجتماعي</th>
                    <th scope="col">التقاعد</th>
                    <th scope="col">آخـرى</th>
                    <th scope="col">هل المنزل مستأجر </th>
                    <th scope="col">النتيجة</th>
                </tr>
            </thead>
                <tr>
                @if($initial_studies != null)
                <!-- Initial Studies -->
                    <td>{{$initial_studies->family}}</td>
                    <td>{{$initial_studies->salary}}</td>
                    <td>{{$initial_studies->social_security}}</td>
                    <td>{{$initial_studies->retirement}}</td>
                    <td>{{$initial_studies->other}}</td>
                    <td>{{$initial_studies->home}}</td>
                    <td>{{$initial_studies->result}}</td>
                @endif
                </tr>
        </table>
    </div>
</div>
        <table class="table">
            <thead>
                <tr>
                <!-- Personal Information -->
                    <th scope="col">الإسم الأول</th>
                    <th scope="col">الإسم الثاني</th>
                    <th scope="col">الإسم الثالث</th>
                    <th scope="col">إسم العائلة</th>
                    <th scope="col">الجنس</th>
                    <th scope="col">رقم الهوية</th>
                    <th scope="col">مكان إصدار الهوية</th>
                    <th scope="col">تاريخ إصدار الهوية</th>
                    <th scope="col">تاريخ إنتهاء الهوية</th>
                    <th scope="col">مكان الميلاد</th>
                    <th scope="col">تاريخ الميلاد</th>
                    <th scope="col">رقم الجواز</th>
                    <th scope="col">مكان إصدار الجواز</th>
                    <th scope="col">تاريخ إصدار الجواز</th>
                    <th scope="col">رقم الرخصة </th>
                    <th scope="col">مكان الرخصة </th>
                    <th scope="col">تاريخ إنتهاء الرخصة </th>
                    <th scope="col"> الوظيفة(المسجلة في رخصة الإقامة)</th>
                </tr>
            </thead>
            
                <tr>
                @if($personal_infos != null)
                    <!-- Personal Information -->
                    <td>{{$personal_infos->first_name}}</td>
                    <td>{{$personal_infos->second_name}}</td>
                    <td>{{$personal_infos->third_name}}</td>
                    <td>{{$personal_infos->family_name}}</td>
                    <td>{{$personal_infos->gender}}</td>
                    <td>{{$personal_infos->national_id}}</td>
                    <td>{{$personal_infos->place_national}}</td>
                    <td>{{$personal_infos->date_national}}</td>
                    <td>{{$personal_infos->date_ex_national}}</td>
                    <td>{{$personal_infos->place_birth}}</td>
                    <td>{{$personal_infos->date_birth}}</td>
                    <td>{{$personal_infos->passport_number}}</td>
                    <td>{{$personal_infos->passport_place}}</td>
                    <td>{{$personal_infos->passport_date}}</td>
                    <td>{{$personal_infos->license_number}}</td>
                    <td>{{$personal_infos->license_place}}</td>
                    <td>{{$personal_infos->date_ex_license}}</td>
                    <td>{{$personal_infos->job}}</td>
                @endif
                </tr>
        </table>
    </div>
                            </div>
                            <div class="form-group f-g">
                                <form><div class="table-responsive">
        <table class="table">
        
    
            <thead>
                <tr>
                    <!-- Contact Information -->
                    <th scope="col">الإيميل</th>
                    <th scope="col">رقم الهاتف</th>
                    <th scope="col">رقم الجوال</th>
                    <th scope="col">رقم الجوال (واتساب)</th>
                    <th scope="col">رقم هاتف آخر</th>
                    <th scope="col">صلة القرابة مع مقدم الطلب</th>
                </tr>
            </thead>
            
                <tr>
                @if($contact_infos != null)
                <!-- Contact Information -->
                    <td>{{$contact_infos->email}}</td>
                    <td>{{$contact_infos->phone_number}}</td>
                    <td>{{$contact_infos->mobile_number}}</td>
                    <td>{{$contact_infos->whatsapp_number}}</td>
                    <td>{{$contact_infos->other_number}}</td>
                    <td>{{$contact_infos->relative}}</td>
                @endif
                </tr>
        </table>
    </div>
                            </div>
                            <div class="form-group f-g">
                                <form><div class="table-responsive">
        <table class="table">
        
    
            <thead>
                <tr>
                    <!-- job Information -->
                    <th scope="col">الوظيفة</th>
                    <th scope="col"> مكان الوظيفة</th>
                    <th scope="col">هاتف العمل</th>
                    <th scope="col">التعليم</th>
                    <th scope="col">نوع الراتب</th>
                    <th scope="col">الراتب</th>
                </tr>
            </thead>
                <tr>
                @if($job_infos != null)
                <!-- job Information -->
                    <td>{{$job_infos->job}}</td>
                    <td>{{$job_infos->job_place}}</td>
                    <td>{{$job_infos->phone_number}}</td>
                    <td>{{$job_infos->education}}</td>
                    <td>{{$job_infos->salary}}</td>
                    <td>{{$job_infos->salary_month}}</td>
                @endif
                </tr>
        </table>
    </div>
                            </div>
                            <div class="form-group f-g">
                                <form><div class="table-responsive">
        <table class="table">
        
    <thead>
                <tr>
                    <!-- Social Information -->
                    <th scope="col">الحالة الإجتماعية</th>
                    <th scope="col"> عدد الزوجات </th>
                    <th scope="col"> عدد أفراد الأسرة المعالين </th>
                    <th scope="col">عدد الذكور</th>
                    <th scope="col">عدد الإناث</th>
                    <th scope="col">الذي يتولى الإنفاق على الأسرة</th>
                    <th scope="col">هل يتولى العائل أفراد آخرين</th>
                    <th scope="col">عدد الأفراد الذين يتولى العائل أمرهم</th>
                    <th scope="col">لماذا يتولى أمرهم</th>
                    <th scope="col">عدد الدارسين بالمرحلة الإبتدائية</th>
                    <th scope="col">عدد الدارسين بالمرحلة المتوسطة</th>
                    <th scope="col">عدد الدارسين بالمرحلة الثانوية</th>
                    <th scope="col">عدد الدارسين بالمرحلة الجامعية</th>
                    <th scope="col">الخريجين</th>
                    <th scope="col">الحالة الصحية للعائل</th>
                    <th scope="col">معلومات التابعين</th>
                    <th scope="col">الحالة الصحية للتابعين</th>
                </tr>
            </thead>
                <tr>
                @if($information != null)
                    <!-- Social Information -->
                    <td>{{$information->social_status}}</td>
                    <td>{{$information->wife_number}}</td>
                    <td>{{$information->family_number}}</td>
                    <td>{{$information->male_number}}</td>
                    <td>{{$information->female_number}}</td>
                    <td>{{$information->who_spend}}</td>
                    <td>{{$information->other_person}}</td>
                    <td>{{$information->other_person_num}}</td>
                    <td>{{$information->other_person_reason}}</td>
                    <td>{{$information->primary_school}}</td>
                    <td>{{$information->middle_school}}</td>
                    <td>{{$information->high_school}}</td>
                    <td>{{$information->university}}</td>
                    <td>{{$information->graduated}}</td>
                    <td>{{$information->disease}}</td>
                    <td>{{$information->children_informations}}</td>
                    <td>{{$information->disease_informations}}</td> 
                @endif
                </tr>
        </table>
    </div>
                            </div>
                            <div class="form-group f-g">
                                <form><div class="table-responsive">
        <table class="table">
        <thead>
                <tr>
                    <!-- commitments Information -->
                    <th scope="col">الإيجار الشهري</th>
                    <th scope="col">فاتورة كهرباء</th>
                    <th scope="col">فاتورة ماء</th>
                    <th scope="col">أقساط شهرية</th>
                    <th scope="col">قسط البنك التجاري</th>
                </tr>
            </thead>
                <tr>
                @if($commitments != null)
                <!-- commitments Information -->
                    <td>{{$commitments->rent_home}}</td>
                    <td>{{$commitments->electricity_bill}}</td>
                    <td>{{$commitments->water_bill}}</td>
                    <td>{{$commitments->monthly_fees}}</td>
                    <td>{{$commitments->monthly_fees_eco_bank}}</td>
                @endif
        </table>
    </div>
                            </div>
                            <div class="form-group f-g">
                                <form><div class="table-responsive">
        <table class="table">
        <thead>
                <tr>
                    <!-- home Information -->
                    <th scope="col">موقع السكن</th>
                    <th scope="col">وصف السكن</th>
                    <th scope="col">رقم المبنى</th>
                    <th scope="col">نوع السكن</th>
                    <th scope="col"> N احداثيات السكن</th>
                    <th scope="col"> E احداثيات السكن</th>
                    <th scope="col">ملكية السكن</th>
                    <th scope="col">قيمة الإيجار</th>
                    <th scope="col">هل قيمة الإيجار مناسبة للسكن </th>
                    <th scope="col">عدد جميع الغرف</th>
                    <th scope="col"> هل عدد الغرف كافية</th>
                    <th scope="col">هل المنزل مناسب للسكن </th>
                    <th scope="col">السبب اذا كان المنزل غير مناسب </th>
                    <th scope="col"> جودة السكن</th>
                    <th scope="col">تقييم حالة غرف النوم</th>
                    <th scope="col"> تقييم حالة المطبخ</th>
                    <th scope="col">تقييم حالة دورات المياة </th>
                    <th scope="col">تقييم حالة المستودع </th>
                    <th scope="col">تقييم غرفة السائق</th>
                    <th scope="col">تقييم حالة الصالة</th>
                    <th scope="col"> تقييم غرفة الطعام</th>
                    <th scope="col">تقييم المجلس </th>
                    <th scope="col">تقييم السطح </th>
                    <th scope="col">تقييم الملحق الخارجي</th>
                    <th scope="col">تقييم حالة الحوش</th>
                    <th scope="col">تقييم حالة الأثاث</th>
                    <th scope="col">هل الغرف مؤثثة</th>
                    <th scope="col"> عدد الغسالات</th>
                    <th scope="col">عدد مكيفات الشبك </th>
                    <th scope="col"> عدد مكيفات السبيليت</th>
                    <th scope="col">عدد مكيفات الصحراوي </th>
                    <th scope="col">عدد الثلاجات </th>
                    <th scope="col">عدد الفريزر</th>
                    <th scope="col">عدد مكنسة الكهرب</th>
                    <th scope="col">عدد السخانات</th>
                    <th scope="col">عدد المراوح</th>
                    <th scope="col">عدد الدفايات</th>
                    <th scope="col">عدد براد الماء</th>
                    <th scope="col"> تقييم حالة الغسالة</th>
                    <th scope="col"> تقييم حالة مكيفات الشبك</th>
                    <th scope="col"> تقييم حالة مكيفات السبيليت</th>
                    <th scope="col"> تقييم حالة مكيفات الصحراوي</th>
                    <th scope="col"> تقييم حالة الثلاجات</th>
                    <th scope="col"> تقييم حالة الفريزر</th>
                    <th scope="col"> تقييم حالة مكنسةالكهرب</th>
                    <th scope="col"> تقييم حالة السخانات</th>
                    <th scope="col"> تقييم حالة الراوح</th>
                    <th scope="col"> تقييم حالة الدفايات</th>
                    <th scope="col"> تقييم حالة براد الماء</th>
                    <th scope="col"> إلى ماذا يحتاج السكن</th>
                    <th scope="col"> مما يتكون السكن</th>
                </tr>
            </thead>
                <tr>
                @if($commitments != null)
                <!-- home Information -->
                <td>{{$location_infos->place}}</td>
                <td>{{$location_infos->description}}</td>
                <td>{{$location_infos->building_num}}</td>
                <td>{{$location_infos->building_type}}</td>
                <td>{{$location_infos->location_N}}</td>
                <td>{{$location_infos->location_E}}</td>
                <td>{{$location_infos->building_ownership}}</td>
                <td>{{$location_infos->building_rent}}</td>
                <td>{{$location_infos->rent_evaluate}}</td>
                <td>{{$location_infos->room_number_all}}</td>
                <td>{{$location_infos->room_number}}</td>
                <td>{{$location_infos->home_status}}</td>
                <td>{{$location_infos->status_reason}}</td>
                <td>{{$location_infos->home_quality}}</td>
                <td>{{$location_infos->bedroom_evaluate}}</td>
                <td>{{$location_infos->kitchen_evaluate}}</td>
                <td>{{$location_infos->bathroom_evaluate}}</td>
                <td>{{$location_infos->store_evaluate}}</td>
                <td>{{$location_infos->driverroom_evaluate}}</td>
                <td>{{$location_infos->hall_evaluate}}</td>
                <td>{{$location_infos->dining_room_evaluate}}</td>
                <td>{{$location_infos->living_room_evaluate}}</td>
                <td>{{$location_infos->roof_evaluate}}</td>
                <td>{{$location_infos->annex_evaluate}}</td>
                <td>{{$location_infos->outdoor_evaluate}}</td>
                <td>{{$location_infos->evaluate_furniture}}</td>
                <td>{{$location_infos->furnished}}</td>
                <td>{{$location_infos->washing_machine}}</td>
                <td>{{$location_infos->conditioner_1}}</td>
                <td>{{$location_infos->conditioner_2}}</td>
                <td>{{$location_infos->conditioner_3}}</td>
                <td>{{$location_infos->refrigerator}}</td>
                <td>{{$location_infos->fraser}}</td>
                <td>{{$location_infos->cleaner}}</td>
                <td>{{$location_infos->heater}}</td>
                <td>{{$location_infos->fan}}</td>
                <td>{{$location_infos->fireplace}}</td>
                <td>{{$location_infos->water_cooler}}</td>
                <td>{{$location_infos->washing_machineـevaluate}}</td>
                <td>{{$location_infos->conditioner_1_evaluate}}</td>
                <td>{{$location_infos->conditioner_2_evaluate}}</td>
                <td>{{$location_infos->conditioner_3_evaluate}}</td>
                <td>{{$location_infos->refrigerator_evaluate}}</td>
                <td>{{$location_infos->fraser_evaluate}}</td>
                <td>{{$location_infos->cleaner_evaluate}}</td>
                <td>{{$location_infos->heater_evaluate}}</td>
                <td>{{$location_infos->fan_evaluate}}</td>
                <td>{{$location_infos->fireplace_evaluate}}</td>
                <td>{{$location_infos->water_cooler_evaluate}}</td>
                <td>{{$location_infos->category}}</td>
                <td>{{$location_infos->home_category}}</td>
            @endif
                </tr> 
        </table>
    </div>
                            </div>
                            <div class="form-group f-g">
                                <form><div class="table-responsive">
        <table class="table">
        <thead>
                <tr>
                    <!-- Bank Information -->
                    <th scope="col">اسم البنك</th>
                    <th scope="col">رقم الحساب</th>
                    <th scope="col">رقم الأيبان</th>
                </tr>
            </thead>
                <tr>
                @if($bank_information != null)
                <!-- Bank Information -->
                    <td>{{$bank_information->bank_name}}</td>
                    <td>{{$bank_information->bank_account}}</td>
                    <td>{{$bank_information->iban}}</td>
                @endif
                </tr>
        </table>
    </div>
                            </div>
                            <div class="form-group f-g">
                                <form>
                                    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <!--  Attachments  -->
                    <th scope="col">الملفات المطلوبة</th>
                    <th scope="col">هل تم التقاط الصور</th>
                </tr>
            </thead>
                <tr>
                @if($attachments_infos != null)
                <!-- Attachments  -->
                    <td>
                        @foreach(json_decode($attachments_infos->filename) as $image)
                            <a target="_blank" href="{{ asset('/attach/images/'.$image) }}">عرض </a> 
                        @endforeach
                    </td>
                @endif
                @if($attachments_infos != null)
                    <td>{{$attachments_infos->take_image}}</td>
                @endif
                </tr>
        </table>
    </div>
    
     <div class="form-group f-g">
        <form>
            <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <!--  Open File  -->
                    <th scope="col">الملفات المطلوبة</th>
                    <th scope="col">هل تم التقاط الصور</th>
                    <th scope="col"> الإقرار</th>
                </tr>
            </thead>
                <tr>
                @if($openfiles_infos != null)
                <!-- Open File  -->
                    <th>
                        @foreach(json_decode($openfiles_infos->filename) as $image)
                            <a target="_blank" href="{{ asset('/attach/images/'.$image) }}"> 
                        @endforeach
                    </th>
                @endif
                @if($openfiles_infos != null)
                    <td>{{$openfiles_infos->take_image}}</td>
                    <td>{{$openfiles_infos->checkvalue}}</td>
                @endif
                </tr>
        </table>
    </div>
                               
</form>
</div>
     <div class="form-group f-g">
<!-- اللجنة -->
    @if(session('message'))
      <div class="alert alert-success"> {{session('message')}}</div>
    @endif
@if( session('member_type') == 'committees')
                    <div class="card-header py-3 text-center" style="background: rgb(255,255,255);">
                        <h5 class="m-0 font-weight-bold" style="color: #006837;">عضو اللجنة</h5>
                    </div>
                    <br>
    <form action=" {{ route('opinion') }}" class="text-right" method="POST">
        @csrf
        <input type="hidden" name="user_id" value="{{$id}}">
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label><strong>حالة المستفيد</strong><br></label><select name="committees_opinion" id="committees_opinion" class="form-control"><option></option>
                                            <option value="مؤهل">
                                             مؤهل</option>
                                            <option>غير مؤهل</option></select></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div id="view1" class="form-group"><label><strong>السبب</strong><br></label><select name="committees_reason" class="form-control"><option></option><option>تجاوز الحد المسموح في صافي الدخل الشهري لرب الأسرة</option><option>لا يحمل الهوية الوطنية</option><option> لا يوجد لدية أسرة</option></select></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label><strong>ملاحظات اخرى</strong><br></label><textarea  name="committees_note" class="form-control form-control-lg" rows="3"></textarea></div>
                                        </div>
                                    </div>
                                    <div class="form-group"><button class="btn btns mt-4" type="submit" style="background-color:#006837; color:white; width: 103px;">ارسال القرار</button></div>
                                </form>
@endif
<script>
                                        $(document).ready(function() {
                                            $.views = {
                                                '0' : $([]),
                                                'view3' : $('#view1')
                                            };

                                            $('#committees_opinion').change(function() {
                                                var value = $("#committees_opinion").val();
                                                // alert(value)
                                                if (value == 'مؤهل'){
                                                    // hide all
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

<!-- باحث -->

@if( session('member_type') == 'researcher')
                    <div class="card-header py-3 text-center" style="background: rgb(255,255,255);">
                        <h5 class="m-0 font-weight-bold" style="color: #006837;">الباحث</h5>
                    </div>
                    <br>
<form action=" {{ route('researcher') }}" class="text-right" method="POST">
        @csrf
        <input type="hidden" name="user_id" value="{{$id}}">
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label><strong>هل الموقع صحيح</strong><br></label>
                                                <select name="location" class="form-control">
                                                    <option></option>
                                                    <option>نعم</option>
                                                    <option>لا</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label><strong>هل مرفقات صور المنزل متطابقة</strong><br></label>
                                                <select name="attach" class="form-control">
                                                    <option></option>
                                                    <option>نعم</option>
                                                    <option>لا</option>
                                                    <option>بعض المرفقات</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label><strong>هل عدد التابعين صحيح</strong><br></label>
                                                <select name="family" class="form-control">
                                                    <option></option>
                                                    <option>نعم</option>
                                                    <option>لا</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label><strong>ملاحظات اخرى</strong><br></label><textarea  name="note" class="form-control form-control-lg" rows="3"></textarea></div>
                                        </div>
                                    </div>
                                    <div class="form-group"><button class="btn btns mt-4" type="submit" style="background-color:#006837; color:white; width: 103px;">ارسال القرار</button></div>
                                </form>
@endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright py-3 text-center text-white" style="background: #2d241b;">
            <div class="container"><small>Copyright ©&nbsp;Brand 2020</small></div>
        </div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
@endsection