@extends('layouts.app')
@section('content')
@section('title', 'الإفصاح عن الإلتزامات')

<body style="background-image: url({{url('/img/خلفيه%20البرنامج%205%20شفاف.png')}}); font-family:Cairo;">
    
    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container"><img class="mx-auto logosize" src="{{('/img/شعار%20شفاف.png')}}"></div>
    </nav>
    <div class="container-fluid conta">
        <div class="row">
            <div class="col">
                <div class="card shadow mb-4" style="text-align: right;">
                    <div class="card-header py-3" style="background: rgb(255,255,255);">
                        <h5 class="m-0 font-weight-bold" style="color: #006837;">الإفصاح عن الإلتزامات</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group" style="margin-top: 15px;margin-right: 50px;margin-left: 50px;">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="alert alert-danger text-right">{{ $error }}</li>
                                @endforeach
                            </ul>
                            <form action="{{ route('commitment.store') }}" class="text-center" method="POST">
                                @csrf
                        
                                <div class="form-row text-right">
                                    <div class="col">
                                        <div class="form-group"><label><strong>ايجار شهري</strong><br></label><input value="{{ old('rent_home')}}" name="rent_home" class="form-control" type="text"></div>
                                        <div class="form-group"><label><strong>متوسط فاتورة الكهرباء (شهرياً)</strong><br></label><input value="{{ old('electricity_bill')}}" name="electricity_bill" class="form-control" type="text"></div>
                                        <div class="form-group"><label><strong>متوسط فاتورة الماء (شهرياً)</strong><br></label><input value="{{ old('water_bill')}}" name="water_bill" class="form-control" type="text"></div>
                                        <div class="form-group"><label><strong>قسط الصندوق العقاري (اقساط شهرية)</strong><br></label><input  value="{{ old('monthly_fees')}}" name="monthly_fees" class="form-control" type="text"></div>
                                        <div class="form-group"><label><strong>قسط بنك التنمية الإجتماعية(اقساط شهرية)</strong><br></label><input value="{{ old('monthly_fees_eco_bank')}}" name="monthly_fees_eco_bank" class="form-control" type="text"></div>
                                        
                                    </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btns mt-4" type="submit" style="background-color:#006837; color:white; float: right;">حفظ و انتقال</button>
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