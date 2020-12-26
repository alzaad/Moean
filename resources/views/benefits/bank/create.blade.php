@extends('layouts.app')
@section('content')
@section('title', 'معلومات الحساب البنكي')

<body style="background-image: url({{url('/img/خلفيه%20البرنامج%205%20شفاف.png')}}); font-family:Cairo;">    
    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container"><img class="mx-auto logosize" src="{{('/img/شعار%20شفاف.png')}}"></div>
    </nav>
<div class="page-wrapper p-t-100 row-space">
    <div class="wrapper wrapper--w780">
     
    

    <form action="{{ route('bank.store') }}" method="POST">
        @csrf   
    <div class="container-fluid conta">
        <div class="row">
            <div class="col">
                <div class="card shadow mb-4" style="text-align: right;">
                    <div class="card-header py-3" style="background: rgb(255,255,255);">
                        <h5 class="m-0 font-weight-bold" style="color: #006837;">معلومات الحساب البنكي</h5>
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
                            <form action="{{ route('bank.store') }}">
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for=""><strong>اسم البنك</strong><br></label><input value="{{ old('bank_name')}}" name="bank_name" class="form-control" type="text"></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label><strong>رقم الحساب</strong></label><input value="{{ old('bank_account')}}" class="form-control" name="bank_account" type="text" placeholder="الحساب الخاص بالضمان وبنك التسليف"></div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label><strong>رقم الأيبان</strong><br></label><input value="{{ old('iban')}}" class="form-control" name="iban" type="text"></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label><strong>تأكيد رقم الأيبان</strong></label><input name="iban_confir" class="form-control" type="text"></div>
                                    </div>
                                </div>
                                <div class="form-group"><button class="btn btns mt-4"  style="background-color:#006837;  min-width: 250px; color:white;" type="submit">{{__('حفظ')}}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    </form>
</div>
</div>
@endsection

@section('footer')
    @include('footer')
@endsection