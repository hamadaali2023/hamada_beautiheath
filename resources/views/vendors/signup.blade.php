@extends('layout.instructor.main')
@section('content') 

        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 box-shadow-2 p-0">
              <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0">
                  <div class="card-title text-center">
                    <div class="p-1">
                      <p class="text-small mb-2"> <span class="font-weight-bold  text-danger">ملاحظة:</span> سجل عضوية جديدة وأضف منتجاتك  </p>
                    </div>
                  </div>
                  <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                    <span>تسجيل متجر جديد</span>
                  </h6>
                </div>
                <div class="card-content">
                  <div class="card-body">
                    @if(session()->has('message'))
                        @include('admin.includes.alerts.success')
                    @endif
                    @if(Session::has('errorss'))    
                        <div class="row mr-2 ml-2" >
                                <button type="text" class="btn btn-lg text-left btn-block btn-outline-danger mb-2"id="type-error">
                                   {{Session::get('errorss')}}
                                </button>
                        </div>
                        <!--<span class="text-danger">{{Session::get('errorss')}}</span>-->
                    @endif 
                    
                    @if (count($errors) > 0)
                      <div class="alert alert-danger">
                          <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                    <span aria-hidden="true">&times;</span>
                          </button>
                          <strong>خطا</strong>
                              <ul>
                                    @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                                    @endforeach
                              </ul>
                      </div>
                    @endif
                     
                    @if(session()->has('error'))
                         @include('admin.includes.alerts.error')
                    @endif  
                    
                    <form class="form-horizontal form-simple"  novalidate method="POST" action="{{route('create_vendor')}}">
                       				 @csrf
                      
                      <div class="form-group">
                            <i class="fas fa-user icon"></i>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="الاسم">

                      </div>
                      <div class="form-group">
                            <i class="fas fa-envelope icon"></i>
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="البريد الالكتروني" @error('email') is-invalid @enderror>
                        </div>

                        <div class="form-group">
                            <i class="fas fa-lock icon"></i>
                            <input type="password" name="password" value="{{ old('password') }}" class="form-control" placeholder="كلمة المرور">
                        </div>
                        <div class="form-group">
                            <i class="fas fa-lock icon"></i>
                            <input type="password" name="confirm_password" class="form-control" placeholder="إعادة كلمة المرور">
                        </div>

                        <div class="form-group">
                            <i class="fas fa-lock icon"></i>
                            <select name="countryId" class="form-control"  >
                                <option  disabled selected>حدد الدولة</option>  
                                @foreach ($countries as $_item) 
                                <option value="{{$_item->id}}">{{$_item->name_ar}}</option>
                                @endforeach
                            </select>
                        </div>

                      <button type="submit" class="btn btn-info btn-lg btn-block"><i class="ft-unlock"></i> تسجيل</button>
                    </form>
                  </div>
                </div>
                 <div class="text-center">
                        <p>لديك حساب بالفعل ؟ <a href="{{url('user-login')}}" class="main-color font-weight-bold">تسجيل الدخول</a>
                        </p>
                    </div>
                <div class="card-footer">
                  <div class="">
                    <!-- <p class="float-sm-left text-center m-0"><a href="recover-password.html" class="card-link">Recover password</a></p> -->
                    <!-- <p class="float-sm-right text-center m-0">New to Moden Admin? <a href="register-simple.html" class="card-link">Sign Up</a></p> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      
  @endsection