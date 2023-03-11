
@extends('layout.doctors.main')
@section('content')	
  <div class="content-header row">
                    <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                      <h3 class="content-header-title mb-0 d-inline-block">الرخصة المهنية</h3><br>
                      <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('doctor/dashboard')}}">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item active">الرخصة المهنية
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
      			        <form  method="post"  action="{{route('licenses.update','test')}}" enctype="multipart/form-data">
                      @csrf
                      @method('put')
      	              <div class="row form-row">
                        <input type="hidden" name="id" value="{{$licenses->id}}">
              				  <div class="col-md-4">
                  				<div class="form-group">
                  					<label>التصنيف </label>
                						<select class="form-control select" name="placeLicensesId">
                							<option disabled="">اختر مكان صدوره</option>										
          	               		<option value="1" {{($licenses->placeLicensesId=='1') ? 'selected' : '' }}>وزارةة الصحة</option>
                           		<option value="2" {{($licenses->placeLicensesId=='2') ? 'selected' : '' }}>الهيئات التنظيمية</option>
                           		<option value="3" {{($licenses->placeLicensesId=='3') ? 'selected' : '' }}>هيئة التخصصات الصحية </option>
                              <option value="4" {{($licenses->placeLicensesId=='4') ? 'selected' : '' }}>اخري</option>
          	                </select>
          			           </div>
      						      </div>
      	                <div class="col-md-4 col-sm-6">
              						<div class="form-group">
              							<label>رقم الرخصة</label>
              							<input type="text" name="num" class="form-control" value="{{$licenses->num}}">
              						</div>
              					</div>
            						<div class="col-md-4 col-sm-6">
            							<div class="form-group">
              							<label>اسم المصدر</label>
              							<input type="text" name="name" class="form-control" value="{{$licenses->name}}">
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