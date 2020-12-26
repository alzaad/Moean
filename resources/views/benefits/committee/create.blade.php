@extends('layouts.app')
@section('content')
@section('title', 'عرض بيانات المستفيد')


<!-- اللجنة -->
<form action=" {{ route('opinion.store') }}" class="text-right" method="POST">
        @csrf
        <label><strong>الحالة</strong></label>
            <select class="form-control" name="committee_op">
                <option></option>
                <option>مؤهل</option>
                <option>غير مؤهل</option>
            </select>

        <label><strong>السبب</strong></label>
            <select class="form-control" name="committee_reason">
                <option></option>
                <option>تجاوز الحد المسموح في صافي الدخل الشهري لرب الأسرة</option>
                <option>لا يحمل الهوية الوطنية</option>
                <option> لا يوجد لدية أسرة </option>
            </select>

        <label><strong>ملاحظات آخرى</strong></label>
         <textarea name="note" class="md-textarea form-control" rows="3"></textarea>

            <br>
        <div class="col-4">
            <button type="submit" class="btn btn-success">{{__('إرسال القرار')}}</button>
        </div>
</form>

@endsection