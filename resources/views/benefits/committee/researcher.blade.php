@extends('benefits.committee.header')
@section('content')
@section('title', 'عرض رأي اللجنة')


<nav class="navbar navbar-light navbar-expand-md navigation-clean">
            <div class="container"><img class="ml-auto logosize" src="{{('/img/شعار%20شفاف.png')}}"></div>
        </nav>

<form action="" method="get" class="form">
    @csrf
    <body style="background: #e7e2dd; font-family:Cairo;">
    <div class="container-fluid" style="width: 100%;margin-top: 70px;margin-bottom: 60px;">
            <div class="row">
                <div class="col">
                    <div class="card shadow mb-4" style="text-align: right;">
                        <div class="card-header py-3" style="background: rgb(255,255,255);">
                            <h5 class="m-0 font-weight-bold" style="color: #006837;">رأي الباحث</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group f-g">
                                <form><div class="table-responsive">
        <table class="table">
        
    
            <thead>
                <tr>
                    <th scope="col">اسم الباحث</th>
                    <th scope="col">هل الموقع صحيح؟</th>
                    <th scope="col">هل المرفقات صحيحة</th>
                    <th scope="col">هل عدد أفراد الأسرة صحيح؟</th>
                    <th scope="col">مرئيات الباحث</th>
                </tr>
            </thead>
            @foreach($researcher_opinions as $researcher_opinion)
                <tr>
                    <th scope="col">{{ $researcher_opinion->member_name }}</th>
                    <th scope="col">{{ $researcher_opinion->location }}</th>
                    <th scope="col">{{ $researcher_opinion->attach }}</th>
                    <th scope="col">{{ $researcher_opinion->family }}</th>
                    <th scope="col">{{ $researcher_opinion->note }}</th>
                </tr>
            @endforeach
        </table>
    </div>





@endsection