@extends('layouts.app')
@section('content')
@section('title', 'معلومات السكن')

<body style="background-image: url({{url('/img/خلفيه%20البرنامج%205%20شفاف.png')}}); font-family:Cairo;">
    
    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container"><img class="mx-auto logosize" src="{{('/img/شعار%20شفاف.png')}}"></div>
    </nav>
    <div class="container-fluid conta">
        <div class="row">
            <div class="col">
                <div class="card shadow mb-4" style="text-align: right;">
                    <div class="card-header py-3" style="background: rgb(255,255,255);">
                        <h5 class="m-0 font-weight-bold" style="color: #006837;">معلومات السكن</h5>
                    </div>
                    <div class="card-body">
                        @if (count($errors) > 0)
                            <div class = "alert alert-danger text-right">
                                <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="form-group" style="margin-top: 15px;margin-right: 50px;margin-left: 50px;">
                            <form action="{{ route('location.store') }}" class="text-right" method="POST">
                                @csrf
                                <input type="hidden" type="integer" name="user_id">
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for=""><strong>موقع السكن</strong><br></label>
                                            <select name="place" class="form-control"><optgroup label="  ">
                                                <option></option>
                                                <option>الفايزية</option>
                                                <option>الأفق</option>
                                                <option>الجامعيين</option>
                                                <option>مبروكة الرواف</option>
                                                <option>الرابية</option>
                                                <option>الخزامى</option>
                                                <option value="آخرى">
                                                    آخرى</option>
                                                </optgroup>
                                            </select>
                                        </div>                                        
                                        <div class="form-group"><label for=""><strong>وصف السكن</strong><br></label>
                                            <select value="{{ old('description')}}" name="description" class="form-control"><optgroup>
                                                <option></option>
                                                <option>شعبي</option>
                                                <option>مسلح</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class="form-group"><label for=""><strong>رقم المبنى</strong><br></label><input value="{{ old('building_num')}}" name="building_num" class="form-control" type="text"></div>
                                        <div class="form-group"><label for=""><strong>احداثيات السكن(E)</strong><br></label><input value="{{ old('location_E')}}" name="location_E"  class="form-control" type="text"></div>
                                        <div class="form-group"><label for=""><strong>احداثيات السكن(N)</strong><br></label><input value="{{ old('location_N')}}" name="location_N" class="form-control" type="text"></div>
                                        <div class="form-group"><label for=""><strong>نوع السكن</strong><br></label>
                                            <select value="{{ old('building_type')}}" name="building_type" class="form-control"><optgroup>
                                                <option></option>
                                                <option>شقة</option>
                                                <option>وحدة</option>
                                                <option>دور</option>
                                                <option>دوبلكس</option>
                                                <option>فيلا</option>
                                                </optgroup>
                                            </select>
                                        </div>

                                        <div class="form-group"><label for=""><strong>ملكية السكن</strong><br></label>
                                            <select value="{{ old('building_ownership')}}" name="building_ownership" class="form-control"><optgroup>
                                                <option></option>
                                                <option>ملك</option>
                                                <option>مستأجر</option>
                                                <option>وقف</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class="form-group"><label for=""><strong>قيمة الإيجار(في حال كان مستأجر)</strong><br></label><input value="{{ old('building_rent')}}" class="form-control" type="integer" name="building_rent"></div>

                                        <div class="form-group"><label for=""><strong>هل قيمة الإيجار مناسبة للسكن؟</strong><br></label>
                                            <select value="{{ old('rent_evaluate')}}" name="rent_evaluate" class="form-control"><optgroup>
                                                <option></option>
                                                <option>نعم</option>
                                                <option>لا</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for=""><strong>مكونات السكن</strong><br></label>
                                            <br>
                                            <label class="checkbox-inline">
                                                <input name="home_category[]" type="checkbox" value="غرفة نوم">
                                                غرفة نوم
                                            </label>
                                            <label class="checkbox-inline">
                                                <input name="home_category[]" type="checkbox" value="صالة">
                                                صالة
                                            </label>
                                            <label class="checkbox-inline">
                                                <input name="home_category[]" type="checkbox" value="حوش">
                                                حوش
                                            </label>
                                            <label class="checkbox-inline">
                                                <input name="home_category[]" type="checkbox" value="مجلس">
                                                مجلس
                                            </label>
                                            <label class="checkbox-inline">
                                                <input name="home_category[]" type="checkbox" value="مطبخ">
                                                مطبخ
                                            </label>
                                            <label class="checkbox-inline">
                                                <input name="home_category[]" type="checkbox" value="غرفة سائق">
                                                غرفة سائق
                                            </label>
                                            <label class="checkbox-inline">
                                                <input name="home_category[]" type="checkbox" value="ملحق خارجي">
                                                ملحق خارجي
                                            </label>
                                            <label class="checkbox-inline">
                                                <input name="home_category[]" type="checkbox" value="صالة طعام">
                                                صالة طعام
                                            </label>
                                            <label class="checkbox-inline">
                                                <input name="home_category[]" type="checkbox" value="مستودع">
                                                مستودع
                                            </label>
                                        </div>
                                        <div class="form-group"><label for=""><strong>عدد جميع غرف المنزل و المرافق  </strong><br></label>
                                            <select value="{{ old('room_number_all')}}" name="room_number_all" class="form-control"><optgroup>
                                                <option></option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>أكثر</option>
                                                <option>لايوجد</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class="form-group"><label for=""><strong>هل عدد الغرف كافية </strong><br></label>
                                            <select value="{{ old('room_number')}}" name="room_number" class="form-control"><optgroup>
                                                <option></option>
                                                <option>نعم</option>
                                                <option>لا</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class="form-group"><label for=""><strong>هل وضع المنزل مناسب للسكن </strong><br></label>
                                            <select value="{{ old('home_status')}}" name="home_status" class="form-control"><optgroup>
                                                <option></option>
                                                <option>نعم</option>
                                                <option>لا</option>
                                                </optgroup>
                                            </select>
                                        </div>

                                        <div class="form-group"><label for=""><strong>إذا كان غير مناسب اذكر السبب</strong><br></label><input name="status_reason" class="form-control" type="text"></div>

                                        <div class="form-group"><label for=""><strong>ماهو تقييمك لجودة السكن </strong><br></label>
                                            <select value="{{ old('home_quality')}}" name="home_quality" class="form-control"><optgroup>
                                                <option></option>
                                                <option>  1 = سيء</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option> 5 = ممتاز</option>
                                                </optgroup>
                                            </select>
                                        </div>

                                        <label for=""><strong>تقييم حالة الغرف</strong><br></label>
                                        <br>
                                        <div class="form-group"><label for=""><strong>غرفة النوم </strong><br></label>
                                            <select value="{{ old('bedroom_evaluate')}}" name="bedroom_evaluate" class="form-control"><optgroup>
                                                <option></option>
                                                <option>تصدعات</option>
                                                <option>هبوط</option>
                                                <option>خطر</option>
                                                <option>بحاجة إلى صيانة</option>
                                                <option>مقبول</option>
                                                <option>ممتاز</option>
                                                </optgroup>
                                            </select>
                                        </div>

                                        <div class="form-group"><label for=""><strong>مطبخ </strong><br></label>
                                            <select value="{{ old('kitchen_evaluate')}}" name="kitchen_evaluate" class="form-control"><optgroup>
                                                <option></option>
                                                <option>تصدعات</option>
                                                <option>هبوط</option>
                                                <option>خطر</option>
                                                <option>بحاجة إلى صيانة</option>
                                                <option>مقبول</option>
                                                <option>ممتاز</option>
                                                </optgroup>
                                            </select>
                                        </div>

                                        <div class="form-group"><label for=""><strong>دورات المياة </strong><br></label>
                                            <select value="{{ old('bathroom_evaluate')}}" name="bathroom_evaluate" class="form-control"><optgroup>
                                                <option></option>
                                                <option>تصدعات</option>
                                                <option>هبوط</option>
                                                <option>خطر</option>
                                                <option>بحاجة إلى صيانة</option>
                                                <option>مقبول</option>
                                                <option>ممتاز</option>
                                                </optgroup>
                                            </select>
                                        </div>

                                        <div class="form-group"><label for=""><strong> مستودع </strong><br></label>
                                            <select value="{{ old('store_evaluate')}}" name="store_evaluate" class="form-control"><optgroup>
                                                <option></option>
                                                <option>تصدعات</option>
                                                <option>هبوط</option>
                                                <option>خطر</option>
                                                <option>بحاجة إلى صيانة</option>
                                                <option>مقبول</option>
                                                <option>ممتاز</option>
                                                </optgroup>
                                            </select>
                                        </div>

                                        <div class="form-group"><label for=""><strong> غرفة سائق </strong><br></label>
                                            <select value="{{ old('driverroom_evaluate')}}" name="driverroom_evaluate" class="form-control"><optgroup>
                                                <option></option>
                                                <option>تصدعات</option>
                                                <option>هبوط</option>
                                                <option>خطر</option>
                                                <option>بحاجة إلى صيانة</option>
                                                <option>مقبول</option>
                                                <option>ممتاز</option>
                                                </optgroup>
                                            </select>
                                        </div>

                                        <div class="form-group"><label for=""><strong> حوش </strong><br></label>
                                            <select value="{{ old('outdoor_evaluate')}}" name="outdoor_evaluate" class="form-control"><optgroup>
                                                <option></option>
                                                <option>تصدعات</option>
                                                <option>هبوط</option>
                                                <option>خطر</option>
                                                <option>بحاجة إلى صيانة</option>
                                                <option>مقبول</option>
                                                <option>ممتاز</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group"><label for=""><strong> سطح </strong><br></label>
                                            <select value="{{ old('roof_evaluate')}}" name="roof_evaluate" class="form-control"><optgroup>
                                                <option></option>
                                                <option>تصدعات</option>
                                                <option>هبوط</option>
                                                <option>خطر</option>
                                                <option>بحاجة إلى صيانة</option>
                                                <option>مقبول</option>
                                                <option>ممتاز</option>
                                                </optgroup>
                                            </select>
                                        </div>

                                        <div class="form-group"><label for=""><strong> ملحق خارجي </strong><br></label>
                                            <select value="{{ old('annex_evaluate')}}" name="annex_evaluate" class="form-control"><optgroup>
                                                <option></option>
                                                <option>تصدعات</option>
                                                <option>هبوط</option>
                                                <option>خطر</option>
                                                <option>بحاجة إلى صيانة</option>
                                                <option>مقبول</option>
                                                <option>ممتاز</option>
                                                </optgroup>
                                            </select>
                                        </div>

                                        <div class="form-group"><label for=""><strong> صالة </strong><br></label>
                                            <select value="{{ old('hall_evaluate')}}" name="hall_evaluate" class="form-control"><optgroup>
                                                <option></option>
                                                <option>تصدعات</option>
                                                <option>هبوط</option>
                                                <option>خطر</option>
                                                <option>بحاجة إلى صيانة</option>
                                                <option>مقبول</option>
                                                <option>ممتاز</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        

                                        <div class="form-group"><label for=""><strong> مجلس </strong><br></label>
                                            <select value="{{ old('living_room_evaluate')}}" name="living_room_evaluate" class="form-control"><optgroup>
                                                <option></option>
                                                <option>تصدعات</option>
                                                <option>هبوط</option>
                                                <option>خطر</option>
                                                <option>بحاجة إلى صيانة</option>
                                                <option>مقبول</option>
                                                <option>ممتاز</option>
                                                </optgroup>
                                            </select>
                                        </div>


                                        <div class="form-group"><label for=""><strong> صالة طعام </strong><br></label>
                                            <select value="{{ old('dining_room_evaluate')}}" name="dining_room_evaluate" class="form-control"><optgroup>
                                                <option></option>
                                                <option>تصدعات</option>
                                                <option>هبوط</option>
                                                <option>خطر</option>
                                                <option>بحاجة إلى صيانة</option>
                                                <option>مقبول</option>
                                                <option>ممتاز</option>
                                                </optgroup>
                                            </select>
                                        </div>


                                        <label for=""><strong> عدد الأجهزة الكهربائية</strong><br></label>
                                            <div class="form-group"><label for=""><strong> مكيف سبيليت </strong><br></label>
                                               <select value="{{ old('conditioner_1')}}" class="form-control" name="conditioner_1">
                                                    <option></option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                    <option>أكثر</option>
                                                    <option>لايوجد</option>
                                                </select>
                                            </div>

                                            <div class="form-group"><label for=""><strong> مكيف شباك </strong><br></label>
                                                <select value="{{ old('conditioner_2')}}" class="form-control" name="conditioner_2">
                                                    <option></option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                    <option>أكثر</option>
                                                    <option>لايوجد</option>
                                                </select>
                                            </div>

                                            <div class="form-group"><label for=""><strong> مكيف صحراوي </strong><br></label>
                                                <select value="{{ old('conditioner_3')}}" class="form-control" name="conditioner_3">
                                                    <option></option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                    <option>أكثر</option>
                                                    <option>لايوجد</option>
                                                </select>
                                            </div>

                                            <div class="form-group"><label for=""><strong> ثلاجة </strong><br></label>
                                                <select value="{{ old('refrigerator')}}" class="form-control" name="refrigerator">
                                                    <option></option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                    <option>أكثر</option>
                                                    <option>لايوجد</option>

                                                </select>
                                            </div>

                                            <div class="form-group"><label for=""><strong>فريزر </strong><br></label>
                                                <select value="{{ old('fraser')}}" class="form-control" name="fraser">
                                                    <option></option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                    <option>أكثر</option>
                                                    <option>لايوجد</option>
                                                </select>
                                            </div>

                                            <div class="form-group"><label for=""><strong>برادة ماء </strong><br></label>
                                                <select value="{{ old('water_cooler')}}" class="form-control" name="water_cooler">
                                                    <option></option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                    <option>أكثر</option>
                                                    <option>لايوجد</option>
                                                </select>
                                            </div>

                                            <div class="form-group"><label for=""><strong>غسالة </strong><br></label>
                                                <select value="{{ old('washing_machine')}}" class="form-control" name="washing_machine">
                                                    <option></option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                    <option>أكثر</option>
                                                    <option>لايوجد</option>
                                                </select>
                                            </div>

                                            <div class="form-group"><label for=""><strong>سخانة </strong><br></label>
                                                <select value="{{ old('heater')}}" class="form-control" name="heater">
                                                    <option></option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                    <option>أكثر</option>
                                                    <option>لايوجد</option>
                                                </select>
                                            </div>

                                            <div class="form-group"><label for=""><strong>مكنسة كهرب </strong><br></label>
                                                <select value="{{ old('cleaner')}}" class="form-control" name="cleaner">
                                                    <option></option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                    <option>أكثر</option>
                                                    <option>لايوجد</option>
                                                </select>
                                            </div>

                                            <div class="form-group"><label for=""><strong>دفاية</strong><br></label>
                                                <select value="{{ old('fireplace')}}" class="form-control" name="fireplace">
                                                    <option></option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                    <option>أكثر</option>
                                                    <option>لايوجد</option>
                                                </select>
                                            </div>

                                            <div class="form-group"><label for=""><strong>مروحة شفط</strong><br></label>
                                            <select value="{{ old('fan')}}" class="form-control" name="fan">
                                                    <option></option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                    <option>أكثر</option>
                                                    <option>لايوجد</option>
                                                </select>
                                            </div>

                                            <div class="form-row">
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label><strong>ماهي الأجهزة الكهربائيةالغير متوفرة </strong></label>
                                                                            <br>
                                                                                <label class="checkbox-inline">
                                                                                    <input name="electric[]" type="checkbox" value="مكيف سبيليت">
                                                                                    مكيف سبيليت            
                                                                                </label>

                                                                                <label class="checkbox-inline">
                                                                                    <input name="electric[]" type="checkbox" value="مكيف شبك">
                                                                                    مكيف شبك
                                                                                </label>

                                                                                <label class="checkbox-inline">
                                                                                    <input name="electric[]" type="checkbox" value="مكيف صحراوي">
                                                                                    مكيف صحراوي
                                                                                </label>

                                                                                <label class="checkbox-inline">
                                                                                    <input name="electric[]" type="checkbox" value="ثلاجة">
                                                                                    ثلاجة            
                                                                                </label>

                                                                                <label class="checkbox-inline">
                                                                                    <input name="electric[]" type="checkbox" value="برادة ماء">
                                                                                    برادة ماء
                                                                                </label>

                                                                                <label class="checkbox-inline">
                                                                                    <input name="electric[]" type="checkbox" value="غسالة">
                                                                                    غسالة
                                                                                </label>

                                                                                <label class="checkbox-inline">
                                                                                    <input name="electric[]" type="checkbox" value="سخانة">
                                                                                    سخانة
                                                                                </label>

                                                                                <label class="checkbox-inline">
                                                                                    <input name="electric[]" type="checkbox" value="مكنسة كهرب">
                                                                                    مكنسة كهرب
                                                                                </label>

                                                                                <label class="checkbox-inline">
                                                                                    <input name="electric[]" type="checkbox" value="دفاية">
                                                                                    دفاية
                                                                                </label>

                                                                                <label class="checkbox-inline">
                                                                                    <input name="electric[]" type="checkbox" value="مروحة شفط">
                                                                                    مروحة شفط
                                                                                </label>
                                                                        </div>
                                                                    </div> 
                                                                </div>

                                        <div class="form-group">
                                            <label for=""><strong>إلى ماذا يحتاج السكن</strong><br></label>
                                        <br>
                                        <label class="checkbox-inline">
                                            <input name="category[]" type="checkbox" value=" أعمال كهربائية">
                                            أعمال كهربائية
                                        </label>
                                        <label class="checkbox-inline">
                                            <input name="category[]" type="checkbox" value="أعمال سباكة">
                                            أعمال سباكة
                                        </label>
                                        <label class="checkbox-inline">
                                            <input name="category[]" type="checkbox" value="مطبخ">
                                            مطبخ
                                        </label>
                                        <label class="checkbox-inline">
                                            <input name="category[]" type="checkbox" value="أبواب">
                                            أبواب
                                        </label>
                                        <label class="checkbox-inline">
                                            <input name="category[]" type="checkbox" value="حنفيات">
                                            حنفيات
                                        </label>
                                        <label class="checkbox-inline">
                                            <input name="category[]" type="checkbox" value="شبابيك">
                                            شبابيك
                                        </label>
                                        <label class="checkbox-inline">
                                            <input name="category[]" type="checkbox" value="صرف صحي">
                                            صرف صحي
                                        </label>
                                        <label class="checkbox-inline">
                                            <input name="category[]" type="checkbox" value="دهانات">
                                            دهانات
                                        </label>
                                        <label class="checkbox-inline">
                                            <input name="category[]" type="checkbox" value="تلييس">
                                            تلييس
                                        </label>
                            
                                        <label class="checkbox-inline">
                                            <input name="category[]" type="checkbox" value="لمبات">
                                            لمبات
                                        </label>
                            
                                        <label class="checkbox-inline">
                                            <input name="category[]" type="checkbox" value="سخانات">
                                            سخانات
                                        </label>
                            
                                        <label class="checkbox-inline">
                                            <input name="category[]" type="checkbox" value="شفاطات هواء">
                                            شفاطات هواء
                                        </label>
                                        <br>
                                        <label for=""><strong>ماهو تقييمك لحالة الأجهزه الكهربائية</strong><br></label>

<div class="form-group"><label for=""><strong> مكيف سبيليت </strong><br></label>
    <select value="{{ old('conditioner_1_evaluate')}}" name="conditioner_1_evaluate" class="form-control"><optgroup>
        <option></option>
        <option>غير متوفر</option>
        <option>بحاجة إلى تغيير</option>
        <option>بحاجة إلى صيانة</option>
        <option>مقبول</option>
        <option>ممتاز</option>
        </optgroup>
    </select>
</div>

<div class="form-group"><label for=""><strong> مكيف شباك </strong><br></label>
    <select value="{{ old('conditioner_2_evaluate')}}" name="conditioner_2_evaluate" class="form-control"><optgroup>
        <option></option>
        <option>غير متوفر</option>
        <option>بحاجة إلى تغيير</option>
        <option>بحاجة إلى صيانة</option>
        <option>مقبول</option>
        <option>ممتاز</option>
        </optgroup>
    </select>
</div>

<div class="form-group"><label for=""><strong> مكيف صحراوي </strong><br></label>
    <select value="{{ old('conditioner_3_evaluate')}}" name="conditioner_3_evaluate" class="form-control"><optgroup>
        <option></option>
        <option>غير متوفر</option>
        <option>بحاجة إلى تغيير</option>
        <option>بحاجة إلى صيانة</option>
        <option>مقبول</option>
        <option>ممتاز</option>
        </optgroup>
    </select>
</div>


<div class="form-group"><label for=""><strong> ثلاجة </strong><br></label>
    <select value="{{ old('refrigerator_evaluate')}}" name="refrigerator_evaluate" class="form-control"><optgroup>
        <option></option>
        <option>غير متوفر</option>
        <option>بحاجة إلى تغيير</option>
        <option>بحاجة إلى صيانة</option>
        <option>مقبول</option>
        <option>ممتاز</option>
        </optgroup>
    </select>
</div>

<div class="form-group"><label for=""><strong> فريزر </strong><br></label>
    <select value="{{ old('fraser_evaluate')}}" name="fraser_evaluate" class="form-control"><optgroup>
        <option></option>
        <option>غير متوفر</option>
        <option>بحاجة إلى تغيير</option>
        <option>بحاجة إلى صيانة</option>
        <option>مقبول</option>
        <option>ممتاز</option>
        </optgroup>
    </select>
</div>

<div class="form-group"><label for=""><strong> برادة ماء </strong><br></label>
    <select value="{{ old('water_cooler_evaluate')}}" name="water_cooler_evaluate" class="form-control"><optgroup>
        <option></option>
        <option>غير متوفر</option>
        <option>بحاجة إلى تغيير</option>
        <option>بحاجة إلى صيانة</option>
        <option>مقبول</option>
        <option>ممتاز</option>
        </optgroup>
    </select>
</div>

<div class="form-group"><label for=""><strong>غسالة </strong><br></label>
    <select value="{{ old('washing_machineـevaluate')}}" name="washing_machineـevaluate" class="form-control"><optgroup>
        <option></option>
        <option>غير متوفر</option>
        <option>بحاجة إلى تغيير</option>
        <option>بحاجة إلى صيانة</option>
        <option>مقبول</option>
        <option>ممتاز</option>
        </optgroup>
    </select>
</div>

<div class="form-group"><label for=""><strong>سخانة </strong><br></label>
    <select value="{{ old('heater_evaluate')}}" name="heater_evaluate" class="form-control"><optgroup>
        <option></option>
        <option>غير متوفر</option>
        <option>بحاجة إلى تغيير</option>
        <option>بحاجة إلى صيانة</option>
        <option>مقبول</option>
        <option>ممتاز</option>
        </optgroup>
    </select>
</div>

<div class="form-group"><label for=""><strong>دفاية  </strong><br></label>
    <select value="{{ old('fireplace_evaluate')}}" name="fireplace_evaluate" class="form-control"><optgroup>
        <option></option>
        <option>غير متوفر</option>
        <option>بحاجة إلى تغيير</option>
        <option>بحاجة إلى صيانة</option>
        <option>مقبول</option>
        <option>ممتاز</option>
        </optgroup>
    </select>
</div>

<div class="form-group"><label for=""><strong>مكنسة كهرب </strong><br></label>
    <select value="{{ old('cleaner_evaluate')}}" name="cleaner_evaluate" class="form-control"><optgroup>
        <option></option>
        <option>غير متوفر</option>
        <option>بحاجة إلى تغيير</option>
        <option>بحاجة إلى صيانة</option>
        <option>مقبول</option>
        <option>ممتاز</option>
        </optgroup>
    </select>
</div>

<div class="form-group"><label for=""><strong>مروحة شفط</strong><br></label>
    <select value="{{ old('fan_evaluate')}}" name="fan_evaluate" class="form-control"><optgroup>
        <option></option>
        <option>غير متوفر</option>
        <option>بحاجة إلى تغيير</option>
        <option>بحاجة إلى صيانة</option>
        <option>مقبول</option>
        <option>ممتاز</option>
        </optgroup>
    </select>
</div>


<div class="form-group"><label for=""><strong> ماهو تقييمك لحالة الأثاث</strong><br></label>
                                            <select value="{{ old('evaluate_furniture')}}" name="evaluate_furniture" class="form-control"><optgroup>
                                                <option></option>
                                                <option>غير متوفر</option>
                                                <option>بحاجة إلى تغيير</option>
                                                <option>بحاجة إلى صيانة</option>
                                                <option>مقبول</option>
                                                <option>ممتاز</option>
                                                </optgroup>
                                            </select>
                                        </div>

                                        <div class="form-group"><label for=""><strong>هل المجالس مؤثثة</strong><br></label>
                                            <select value="{{ old('furnished')}}" name="furnished" class="form-control"><optgroup>
                                                <option></option>
                                                <option>نعم</option>
                                                <option>لا</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btns mt-4" type="submit" style="background-color:#006837; min-width: 250px; color:white;">{{__('حفظ و انتقال')}}</button>
                                        </div>
                                        </form>





@endsection
@section('footer')
    @include('footer')
@endsection