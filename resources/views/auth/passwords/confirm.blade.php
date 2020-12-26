@extends('layouts.app')
@section('content')
<div class="page-wrapper p-t-100 p-b-50 row-space">
    <div class="wrapper wrapper--w560">
        <div class="card-heading" >
            <h6 class="titleC">{{ __('تأكيد كلمة السر') }}</h6>
        </div>
                <div class="card-6">
                    {{ __('الرجاء التحقق من كلمة السر قبل الاستكمال') }}
                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf
                        <div class ="card-body">
                            <div class="form-group form-row row row-space"> 
                                <div class="col-12">
                                <div class="name">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('كلمة المرور') }}</label>
                                </div>
                                <div class="value">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div  class="col-6">
                            <div class="name">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('تأكيد كلمة المرور') }}
                                </button>  
                            </div>
                        </div>
                        <div class="card-footer">
                        <div class="btn col-6" >
                            <div class="empty">
                            </div>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('هل نسيت كلمة المرور؟') }}
                                </a>
                            @endif
                        </div> 
                    </div>
                        <div class="empty">
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
