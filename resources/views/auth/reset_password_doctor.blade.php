@extends('layout.doctors.main')
@section('content') 

        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 box-shadow-2 p-0">
              <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0">
                  <div class="card-title text-center">
                    <div class="p-1">
                      <!-- <img src="../../../app-assets/images/logo/logo-dark.png" alt="branding logo"> -->
                    </div>
                  </div>
                  <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                    <span>تغيير كلمة مرور التاجر</span>
                  </h6>
                </div>
                <div class="card-content">
                  <div class="card-body">
                      @if(session()->has('message'))
                        @include('admin.includes.alerts.success')
                      @endif
                      @if(Session::has('errorss'))                                
                        <span class="text-danger">{{Session::get('errorss')}}</span>
                      @endif 
                      @if(Session::has('error'))                                
                        <span class="text-danger">{{Session::get('error')}}</span>
                      @endif 
                      <form class="form-horizontal form-simple"  novalidate method="POST" action="{{route('doctor.reset-password.post')}}">
                				@csrf

                        <input type="hidden" name="token" value="{{ $token }}">
                        <fieldset class="form-group position-relative has-icon-left mb-0">
                          <input type="text"  @error('password') is-invalid @enderror" name="password" class="form-control form-control-lg input-lg" id="user-name" placeholder="كلمة المرور الجديدة"
                            required>
                          <div class="form-control-position">
                              <i class="ft-user"></i>
                          </div>
                          @error('password')
                            <strong>{{ $message }}</strong>
                          @enderror
                        </fieldset><br>
                        <fieldset class="form-group position-relative has-icon-left">
                          <input type="password" @error('password_confirmation') is-invalid @enderror" name="password_confirmation"  class="form-control form-control-lg input-lg" id="user-password"
                          placeholder="إعادة كلمة المرور الجديدة" required>
                          <div class="form-control-position">
                            <i class="la la-key"></i>
                          </div>
                          @error('password_confirmation')
                                      <strong>{{ $message }}</strong>
                              @enderror
                        </fieldset>
                        <button type="submit" class="btn btn-info btn-lg btn-block">حفظ التغيرر</button>
                      </form>
                  </div>
                </div>
                <!-- <div class="card-footer">
                  <div class="">
                    <p>ليس لديك حساب ؟ <a href="{{url('create_vendor')}}" class="main-color font-weight-bold">تسجيل عضوية جديدة</a>
                   
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </section>
      
  @endsection