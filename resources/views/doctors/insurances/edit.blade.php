
@extends('layout.doctors.main')
@section('content')	



  <div class="content-header row">
                    <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                      <h3 class="content-header-title mb-0 d-inline-block">إضافة كورس جديد</h3><br>
                      <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-6">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            
                            <li class="breadcrumb-item active">الكورسات
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
                   
			        <form  method="post"  action="{{route('insurances.update',$insurance->id)}}" enctype="multipart/form-data">
                @csrf
                @method('put')
			         <div class="row form-row">
			              <div class="col-md-4">
                      <div class="form-group">
                        <label>التصنيف </label>
                        <select class="form-control select" name="companies_insuranceId">
                          <option>اختر التصنيف</option>
                          @foreach ($companies_insurance as $_item)
                            <option value="{{$_item->id}}" {{($_item->id==$insurance->companies_insuranceId) ? 'selected' : '' }}>{{$_item->name_ar}}
                            </option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                      <div class="form-group">
                        <label>اسم التأمين</label>
                        <input type="text" name="name" class="form-control" value="{{$insurance->name}}">
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                      <div class="form-group">
                        <label>نوع التأمين</label>
                        <input type="text" name="type" class="form-control" value="{{$insurance->type}}">
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                      <div class="form-group">
                        <label>رقم التأمين</label>
                        <input type="text" name="number" class="form-control" value="{{$insurance->number}}">
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                      <div class="form-group">
                        <label>تاريخ إنتهاء التأمين</label>
                        <input type="text" name="date" class="form-control" value="{{$insurance->date}}">
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
    
@endsection