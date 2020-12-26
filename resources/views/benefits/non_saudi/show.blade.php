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
                    <th scope="col">اسم المستضيف</th>
                    <th scope="col">رقم الهوية </th>
                    <th scope="col">منطقة المستضيف</th>
                    <th scope="col">عمر مقدم الطلب</th>
                    <th scope="col">الأهلية</th>
                </tr>
            </thead>
                <tr>
                <!-- Initial Studies -->
                    <td>{{$non_saudis_infos->name}}</td>
                    <td>{{$non_saudis_infos->national_id}}</td>
                    <td>{{$non_saudis_infos->region}}</td>
                    <td>{{$non_saudis_infos->age}}</td>
                    <td>{{$non_saudis_infos->result}}</td>
                </tr>
        </table>
    </div>
</div>
</form>
@endsection