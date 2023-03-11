
@extends('layout.doctors.main')
@section('content') 



  <div class="content-header row">
                    <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                      <h3 class="content-header-title mb-0 d-inline-block">مواعيد العمل</h3><br>
                      <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('doctor/dashboard')}}">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item active">مواعيد العمل
                            </li>
                          </ol> 
                        </div>
                        @if(session()->has('message'))
                          @include('admin.includes.alerts.success')
                      @endif

                      </div>
                    </div>
                   
    </div>


<section id="basic-form-layouts">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title" id="bordered-layout-basic-form"> </h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                      <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collpase show">
                  <div class="card-body">
                    <form  method="post"  action="{{route('work_days.update','test')}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row form-row">
                          <input type="hidden" name="id" value="{{$work_days->id}}">
                          <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                            <div class="form-check">
                              <input class="form-check-input" name="sat" type="checkbox" value="1" {{ ($work_days->day->sat=='1')? 'checked' : '' }} >
                                <label class="form-check-label" >السبت</label>  
                            </div>
                            </div>
                          </div>  

                          <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                            <div class="form-check">
                              <input class="form-check-input" name="sun" type="checkbox" value="1" {{ ($work_days->day->sun=='1')? 'checked' : '' }} >
                                <label class="form-check-label" >الاحد</label>  
                            </div>
                          </div>
                          </div>  
                          <div class="col-md-6 col-sm-6">
                            <div class="form-check">
                              <input class="form-check-input" name="mon" type="checkbox" value="1" {{ ($work_days->day->mon=='1')? 'checked' : '' }} >
                                <label class="form-check-label" >الاثنين</label>  
                            </div>
                          </div>  
                          <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                            <div class="form-check">
                              <input class="form-check-input" name="tus" type="checkbox" value="1" {{ ($work_days->day->tus=='1')? 'checked' : '' }} >
                                <label class="form-check-label" >الثلاثاء</label>  
                            </div>
                          </div>
                          </div>  
                          <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                            <div class="form-check">
                              <input class="form-check-input" name="wed" type="checkbox" value="1" {{ ($work_days->day->wed=='1')? 'checked' : '' }} >
                                <label class="form-check-label" >الاربعاء</label>  
                            </div>
                          </div>
                          </div>
                          <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                            <div class="form-check">
                              <input class="form-check-input" name="thu" type="checkbox" value="1" {{ ($work_days->day->thu=='1')? 'checked' : '' }} >
                                <label class="form-check-label" >الخميس</label>  
                            </div>
                          </div>
                          </div> 
                           <div class="col-md-8 col-sm-6">
                            <div class="form-group">
                            <div class="form-check">
                              <input class="form-check-input" name="fri" type="checkbox" value="1" {{ ($work_days->day->fri=='1')? 'checked' : '' }} >
                                <label class="form-check-label" >الجمعة</label>  
                            </div>
                          </div>
                          </div>   
                          <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                              <label>من الساعة</label>
                              <input type="time" name="from_time" class="form-control" value="{{$work_days->time->from_time}}">
                            </div>
                          </div>
                          <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                            <label>إلي الساعة</label>
                            <input type="time" name="to_time" class="form-control" value="{{$work_days->time->to_time}}">
                            </div>
                          </div>
                          </div>
                        <button type="submit" class="btn btn-primary btn-block">حفظ </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>
    
 <script src="http://code.jquery.com/jquery-3.4.1.js"></script>

@endsection