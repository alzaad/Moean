@extends('layouts.app')
@section('content')
@section('title', 'المرفقات')

<body style="background-image: url({{url('/img/خلفيه%20البرنامج%205%20شفاف.png')}}); font-family:Cairo;">
    
    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container"><img class="mx-auto logosize" src="{{('/img/شعار%20شفاف.png')}}"></div>
    </nav>

    <div class="container-fluid conta">
        <div class="row">
            <div class="col">
                <div class="card shadow mb-4" style="text-align: right;">
                    <div class="card-header py-3" style="background: rgb(255,255,255);">
                        <h5 class="m-0 font-weight-bold" style="color: #006837;">المرفقات</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group" style="margin-top: 15px;margin-right: 50px;margin-left: 50px;">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger text-right">
                                  <strong>خطأ!</strong> حدث خطأ أثناء الرفع<br><br>
                                  <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                  </ul>
                                </div>
                            @endif
                            @if(session('success'))
                                <div class="alert alert-success text-right">
                                  {{ session('success') }}
                                </div> 
                            @endif
                            <form method="post" class="text-right" action="{{url('form')}}" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for=""><strong>رفع صور المنزل</strong><br></label></div>
                                        <div class="input-group control-group increment_attach" >
                                              <input type="file" name="filename_1[]" class="form-control" accept="application/pdf, image/jpeg">
                                              <div class="input-group-btn"> 
                                                <button class="btn_attach" type="button"  style="background-color:#006837; color:white;"><i class="glyphicon glyphicon-plus"></i>إضافة ملف</button>
                                              </div>
                                            </div>
                                            <div class="clone_attach hide">
                                              <div class="control-group input-group" style="margin-top:10px">
                                                <input type="file" name="filename_1[]" class="form-control" accept="application/pdf, image/jpeg">
                                                    <div class="input-group-btn"> 
                                                      <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> حذف</button>
                                                    </div>
                                              </div>
                                            </div>
                                          <div class="mt-5"><label for=""><strong>هل تم رفع الملفات</strong><br></label>
                                            <select name="take_image" class="form-control">
                                              <optgroup>
                                                <option>نعم</option>
                                                <option>لا</option>
                                              </optgroup>
                                            </select>
                                          </div>

                                        <div class="form-group">
                                          <button class="btn btns mt-4" type="submit" style="width: 106px; background-color:#006837; color:white;">رفع الملفات</button>
                                        </div>
</form>

<script type="text/javascript">

    $(document).ready(function() {

      $(".btn_attach").click(function(){ 
          var html = $(".clone_attach").html();
          $(".increment_attach").after(html);
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