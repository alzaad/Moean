
@extends('layouts.app')
@section('content')
@section('title', 'الحالة الصحية والإجتماعية')


<body style="background-image: url({{url('/img/خلفيه%20البرنامج%205%20شفاف.png')}}); font-family:Cairo;">  
    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container"><img class="mx-auto logosize" src="{{('/img/شعار%20شفاف.png')}}"></div>
    </nav>

    <div class="container-fluid conta">
        <div class="row">
            <div class="col">
                <div class="card shadow mb-4" style="text-align: right;">
                    <div class="card-header py-3" style="background: rgb(255,255,255);">
                        <h5 class="m-0 font-weight-bold" style="color: #006837;">الحالة الصحية والإجتماعية</h5>
                    </div>
                    <div class="card-body">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="alert alert-danger">{{ $error }}</li>
                        @endforeach
                    </ul>
                        <div class="form-group" style="margin-top: 15px;margin-right: 50px;margin-left: 50px;">
                            <form action="{{ route('information.store') }}"  class="form" method="POST">
                                @csrf
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label for=""><strong>الحالة الإجتماعية</strong><br></label>
                                                <select name="social_status" value="{{ old('social_status')}}" class="form-control">
                                                    <option value="undefined"> </option>
                                                    <option value="13">مطلقة</option>
                                                    <option value="14">أرملة</option>
                                                    <option value="">مهجورة</option>
                                                    <option value="">آخرى</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                            <div class="col">
                                                <div class="form-group"><label for=""><strong>الحالة الإجتماعية</strong><br></label>
                                                    <select name="social_status" value="{{ old('social_status')}}" class="form-control">
                                                        <option value="undefined"> </option>
                                                        <option value="12">رب أسرة</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label for=""><strong>عدد الزوجات</strong><br></label>
                                                <select value="{{ old('wife_number')}}" name="wife_number" class="form-control">
                                                    <option> 0</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for=""><strong>إجمالي عدد أفراد الأسرة المعالين</strong><br></label>
                                            <select value="{{ old('family_number')}}" name="family_number" class="form-control">
                                                <option ></option>
                                                <option>0</option>
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
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for=""><strong>عدد الأبناء الذكور</strong><br></label>
                                            <select value="{{ old('male_number')}}" name="male_number" class="form-control">
                                                <option>0</option>
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
                                                <option>أخرى</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for=""><strong>عدد الأبناء الإناث</strong><br></label>
                                            <select name="female_number" value="{{ old('female_number')}}" class="form-control">
                                                <option>0</option>
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
                                                <option>أخرى</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for="" style="font-weight: bold;color: #006837;"><br><strong>معلومات الذكور والإناث التابعين</strong><br><br></label>
                                            <div class="mb-5">
                                                <div class="table-responsive" style="border: 1px solid rgb(210,211,213);border-radius: 5px;">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th width="35%">الإسم</th>
                                                                <th width="30%">الجنس</th>
                                                                <th width="30%">رقم الهوية</th>
                                                                <th width="35%">تاريخ الميلاد</th>
                                                                <th width="30%">حذف/إضافة</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        </tbody>
                                                    </table>        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for=""><strong>من يتولى الإنفاق على الأسرة</strong><br></label>
                                            <select name="who_spend" value="{{ old('who_spend')}}" class="form-control">
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
                                                <option>الجار</option>
                                                <option>فاعل خير</option>
                                            </select>
                                        </div>
                                        <div class="form-group"><label for=""><strong>هل يتولى العائل افراد آخرين</strong><br></label>
                                            <select id="other_person" name="other_person" value="{{ old('other_person')}}" class="form-control">
                                                    <option value=""></option>
                                                    <option value="نعم">
                                                    نعم</option>
                                                    <option value="لا">
                                                    لا</option>
                                            </select>
                                        </div>
                                        
                                    <div class="form-group" id="view1">
                                        <label for="view1"><strong>عدد الأفراد الذي يتولى العائل أمرهم</strong><br></label>
                                        <select name="other_person_num"  value="{{ old('other_person_num')}}" class="form-control" type="number">
                                            <option></option>
                                            <option>0</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                        </select>
                                    </div>
                                    <div class="form-group" id="view2"><label><strong>لماذا يتولى العائل أمرهم</strong><br></label><input  name="other_person_reason" value="{{ old('other_person_reason')}}" class="form-control" type="text"></div>
                                    <script>
                                        $(document).ready(function() {
                                            $.views = {
                                                '0' : $([]),
                                                'view3' : $('#view1, #view2')
                                            };

                                            $('#other_person').change(function() {
                                                var value = $("#other_person").val();
                                                // alert(value)
                                                if (value == 'لا'){
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
                                </div>
                                </div>
                                        
                                <p style="font-weight: bold;color: #006837;"><br><strong>عدد الدارسين من أفراد الأسرة</strong><br><br></p>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for=""><strong>المرحلة الإبتدائية</strong><br></label>
                                            <select name="primary_school" value="{{ old('primary_school')}}" class="form-control">
                                                <option>0</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                            </select>
                                        </div>
                                        <div class="form-group"><label for=""><strong>المرحلة المتوسطة</strong><br></label>
                                            <select name="middle_school" value="{{ old('middle_school')}}" class="form-control">
                                                <option>0</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                            </select>
                                        </div>
                                        <div class="form-group"><label for=""><strong>المرحلة الثانوية</strong><br></label>
                                            <select name="high_school" value="{{ old('high_school')}}" class="form-control" type="number">
                                                <option>0</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                            </select>
                                        </div>
                                        <div class="form-group"><label for=""><strong>المرحلة الجامعية</strong><br></label>
                                            <select  name="university" value="{{ old('university')}}" class="form-control" type="number">
                    
                                                <option>0</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                            </select>
                                        </div>
                                        <div class="form-group"><label for=""><strong>الخريجين</strong><br></label>
                                            <select name="graduated" value="{{ old('graduated')}}" class="form-control" type="number">
                                                
                                                <option>0</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                            </select>
                                        </div>
                                        <p style="font-weight: bold;color: #006837;font-size: 24px;text-align: center;"><br><strong>المعلومات الصحية</strong><br><br></p>
                                        <div class="form-group"><label for=""><strong>هل تشكو من أمراض مزمنة؟</strong><br></label>
                                            <select name="disease" value="{{ old('disease')}}" class="form-control">
                                                <option></option>
                                                <option>سليم</option>
                                                <option>أمراض القلب</option>
                                                <option>أمراض السكري</option>
                                                <option>ارتفاع ضغط الدم</option>
                                                <option>إعاقة بصرية أو سمعية/حركية</option>
                                                <option>آخرى</option>
                                            </select>
                                        </div>
                                         <!-- المصابون بأمراض من أفراد العائلة -->
                                <div class="form-group"><label for=""><strong>المصابون بأمراض من أفراد العائلة</strong><br></label>

                                    <div class="input-group control-group increment" >
                                    <input type="text" value="{{ old('disease_informations[]')}}" name="disease_informations[]" placeholder="اسم المريض" class="form-control">
                                    <input type="text" value="{{ old('disease_informations[]')}}" name="disease_informations[]" placeholder="اسم المرض" class="form-control">
                                    <input type="date" value="{{ old('disease_informations[]')}}" name="disease_informations[]" placeholder="تاريخ المرض" class="form-control">

                                    <select type="text" value="{{ old('disease_informations[]')}}" name="disease_informations[]" class="form-control">
                                        <option value=""></option>
                                        <option value="ذكر"
                                        >ذكر</option>
                                        <option value="أنثى"
                                        >أنثى</option>
                                    </select>
                                    <select type="text" value="{{ old('disease_informations[]')}}" name="disease_informations[]" class="form-control">
                                        <option value=""></option>
                                        <option value="father">أب</option>
                                        <option value="mother">أم</option>
                                        <option value="bro">أخ</option>
                                        <option value="sis">أخت</option>
                                        <option value="uncle">خال/ة</option>
                                        <option value="aunt">عم/ة</option>
                                    </select>
                                    <div class="input-group-btn"> 
                                        <button class="btn btn-success" type="button" style="background-color:#006837; color:white;"><i class="glyphicon glyphicon-plus"></i>إضافة </button>
                                    </div>
                                </div>  
                                <div class="clone hide">
                                    <div class="control-group input-group" style="margin-top:10px">
                                        <input type="text" value="{{ old('disease_informations[]')}}" name="disease_informations[]" placeholder="اسم المريض" class="form-control">
                                        <input type="text" value="{{ old('disease_informations[]')}}" name="disease_informations[]" placeholder="اسم المرض" class="form-control">
                                        <input type="date" value="{{ old('disease_informations[]')}}" name="disease_informations[]" placeholder="تاريخ المرض" class="form-control">
                                        <select type="text" value="{{ old('disease_informations[]')}}" name="disease_informations[]" class="form-control">
                                            <option value=""></option>
                                            <option value="male">ذكر</option>
                                            <option value="female">أنثى</option>
                                        </select>
                                        <select type="text" value="{{ old('disease_informations[]')}}" name="disease_informations[]" class="form-control">
                                            <option value=""></option>
                                            <option value="father">أب</option>
                                            <option value="mother">أم</option>
                                            <option value="bro">أخ</option>
                                            <option value="sis">أخت</option>
                                            <option value="uncle">خال/ة</option>
                                            <option value="aunt">عم/ة</option>
                                        </select>
                                        <div class="input-group-btn"> 
                                            <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> حذف</button>
                                        </div>
                                    </div>
                                </div>
                
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
  <!--  -->
<script>
    $(document).ready(function(){

        var count = 1;

    dynamic_field(count);

    function dynamic_field(number)
    {
        html = '<tr>';
            html += '<td><input type="text" name="children_informations[]" class="form-control" /></td>';
            html += '<td><select type="select" id="gender_1" name="children_informations[]">';
            html += '<option value=""></option>'
            html += '<option value="male_1">ذكر</option>'
            html += '<option value="female_1">أنثى</option>'
            html += '</select></td>';
            html += '<td><input type="text" name="children_informations[]" class="form-control" /></td>';
            html += '<td><input type="date" id="" name="children_informations[]" class="dob" /></td>';

            if(number > 1)
            {
                html += '<td><button type="button" name="remove" id="" class="btn btn-danger remove">حذف</button></td></tr>';
                $('tbody').append(html);
            }
            else
            {   
                html += '<td><button type="button" name="add" id="add"  style="background-color:#006837; color:white;" class="btn">إضافة</button></td></tr>';
                $('tbody').html(html);
            }
    }

    $(document).on('click', '#add', function(){
        count++;
        dynamic_field(count);
    });

    $(document).on('click', '.remove', function(){
        count--;
        $(this).closest("tr").remove();
    });

    $('#dynamic_form').on('submit', function(event){
            event.preventDefault();
            $.ajax({
                url:'',
                method:'post',
                data:$(this).serialize(),
                dataType:'json',
               
                success:function(data)
                {
                    if(data.error)
                    {
                        var error_html = '';
                        for(var count = 0; count < data.error.length; count++)
                        {
                            error_html += '<p>'+data.error[count]+'</p>';
                        }
                        $('#result').html('<div class="alert alert-danger">'+error_html+'</div>');
                    }
                    else
                    {
                        dynamic_field(1);
                        $('#result').html('<div class="alert alert-success">'+data.success+'</div>');
                    }
                    $('#save').attr('disabled', false);
                }
            })
    });

    });   
</script>

<script>
    $(document).ready(function(){
        $("#gender_1").change(function(){
           var gender_value = $("#gender_1").val();
            
        $("input.dob").change(function(){
           var value = $(".dob").val();
            var dob = new Date(value);
            var today = new Date();
            var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
            if(isNaN(age)) {
            // will set 0 when value will be NaN
                age=0;
            }
            else{
                age=age;
            }
            if((age > 30) && (gender_value=="female_1")){
                alert('يجب أن يكون العمر للأنثى أقل من 30 ');
                $("input[type=date]").val("");   
            }else if((age > 25) && (gender_value=="male_1")){
                alert('يجب أن يكون العمر للذكر أقل من 25 ');
                $("input[type=date]").val("");
            }else{
            } 
        });
        });
    });
</script>

<script type="text/javascript">

    $(document).ready(function() {
      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });

    });

</script>

@endsection
@section('footer')
    @include('footer')
@endsection