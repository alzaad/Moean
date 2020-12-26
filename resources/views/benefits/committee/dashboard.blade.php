@extends('benefits.committee.header')
@section('content')
@section('title', 'لوحة التحكم')



<body style="background: #e7e2dd; font-family:Cairo;">
       
    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container"><img class="ml-auto logosize" src="{{('/img/شعار%20شفاف.png')}}"></div>
    </nav>
    <div class="container-fluid" style="width: 100%;margin-top: 70px;margin-bottom: 60px;">
        <div class="row">
            <div class="col">
                <div class="card shadow mb-4" style="text-align: right;">
                <form  action="{{ route('search') }}" method="get" role="search">
                    {{ csrf_field() }}
                    <div class="input-group">
                        <input type="text" class="form-control" name="search"
                            placeholder="بحث"> <span>
                            <button type="submit" class="btn btn-default">
                                <span class="glyphicon glyphicon-search">بحث</span>
                            </button>
                        </span>
                    </div>
                </form>
                    <div class="card-header py-3" style="background: rgb(255,255,255);">
                        <h5 class="m-0 font-weight-bold" style="color: #006837;">عرض طلبات المستفيدين</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group" style="margin-top: 15px;margin-right: 50px;margin-left: 50px;">
                                @csrf
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                
                                                <th>{{__('رقم المستفيد')}}</th>
                                                <th>{{__('اسم المستفيد')}}</th>
                                                <th>{{__('حالة المستفيد')}}</th>
                                                <th>{{__('')}}</th>
                                                <th>{{__('')}}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            @foreach($users as $user)
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->name}}</td>
                                                <td></td>
                                                <td>
                                                    <form method="get" action="{{route('committee.show', $user)}}" class="form">
                                                        @csrf
                                                        <button class="btn btn-dark btns" type="submit" style="width: 114px;">عرض البيانات</button>
                                                    </form>
                                                    <td>
                                                    <form method="get" action="{{route('researcher.show', $user)}}" class="form">
                                                        @csrf
                                                        <button class="btn btn-dark btns" type="submit" style="width: 114px;">عرض</button>
                                                    </form>
                                                </td>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                        </div>
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