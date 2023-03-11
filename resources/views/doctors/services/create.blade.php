
@extends('layout.doctors.main')
@section('content')	

   

	<div class="content-header row">
		<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
			<h3 class="content-header-title mb-0 d-inline-block">الخدمات</h3><br>
			<div class="row breadcrumbs-top d-inline-block">
	            <div class="breadcrumb-wrapper col-12">
			        <ol class="breadcrumb">
		                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
			            <li class="breadcrumb-item active">الخذمات</li>
			        </ol> 
			    </div>
            </div>
		</div>
		<div class="content-header-right col-md-6 col-12">
            <div class="dropdown float-md-right">
                <a href="{{route('services.index')}}"  class="btn btn-primary float-right mt-2">رجوع</a>
            </div>
        </div>
    	<div class="content-header-center col-md-12 col-12">
			@if (session('message'))
			    <div class="alert alert-success">
		            {{ session('message') }}
	            </div>
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
        </div>
	</div>

	<div class="content-body">
        <section class="inputmask" id="inputmask">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title"></h4>
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
                <div class="card-content collapse show">
                  <div class="card-body">
                   <form action="{{route('services.store')}}" method="POST" 
                        name="le_form"  enctype="multipart/form-data">
                        @csrf
						<div class="row form-row">
									
									<div class="form-group col-md-3 col-sm-6">
			                          <label>الخدمة الرئيسية</label>
			                          <select name="categoryId" class="form-control select2-diacritics required" placeholder="Select Category" id="get_sub_category_name">
			                            <option  disabled selected="">اختر</option>  
			                            @foreach ($categories as $_item) 
			                            <option value="{{$_item->id}}" {{ old('categoryId') == $_item->id ? "selected" : "" }}>{{$_item->name_ar}}
			                            </option>
			                            @endforeach
			                          </select>
			                          @error('categoryId')
			                            <span class="text-danger">{{$message}}</span>
			                          @enderror
			                        </div>
									<div class="form-group col-md-3 col-sm-6">							 
								        <label>الخدمة الفرعية</label>
								       <select name="subCategoryId" class="form-control formselect"  id="get_sub_category">
							                <option  disabled selected>اختار </option>	
										</select>
									</div>
									<div class="col-md-3 col-sm-3">
										<div class="form-group">
											<label>اختر لمن  سوف تقدم الخدمة </label>
						                    <select class=" form-control" name="gender" >
						                        <option value="Male">ذكر</option>
						                        <option value="Female">أنثى</option>
						                    </select>
					                    </div>
				                	</div>
									<div class="col-md-3 col-sm-6">
										<div class="form-group">
											<label>السعر</label>
											<input type="text" name="price" class="form-control" value="{{old('price')}}">
										</div>
									</div>
									
								
									
						</div>
						<button type="submit" class="btn btn-primary btn-block">إضافة خدمة </button>
					</form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
    </div>
    <script src="http://code.jquery.com/jquery-3.4.1.js"></script>

	<script>
		$(document).ready(function () {
			$('#get_sub_category_name').on('change', function () {
	        	console.log("welcome sub"); 
	        	let id = $(this).val();
			    $.ajax({
				    type: 'GET',
				    url: "{{url('doctor/getSubCategory')}}/"+id,
				    success: function (response) {
				        var response = JSON.parse(response)
				        console.log(response);   
					    $('#get_sub_category').empty();
					    $('#get_sub_category').append(`<option value="0" disabled selected>اختر </option>`);
					    response.forEach(element => {
					        $('#get_sub_category').append(`<option value="${element['id']}">
					        ${element['title_ar']} 
					        </option>`);
					    });
					}
				});
			});
	    });


			
	</script>
@endsection


								