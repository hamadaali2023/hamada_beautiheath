
@extends('layout.instructor.main')
@section('content')	


	<div class="content-header row">
		<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
			<h3 class="content-header-title mb-0 d-inline-block">إضافة منتج جديد</h3><br>
			<div class="row breadcrumbs-top d-inline-block">
	            <div class="breadcrumb-wrapper col-12">
			        <ol class="breadcrumb">
		                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
			            <li class="breadcrumb-item active">المنتجات</li>
			        </ol> 
			    </div>
            </div>
		</div>
		<div class="content-header-right col-md-6 col-12">
            <div class="dropdown float-md-right">
                <a href="{{route('products.index')}}"  class="btn btn-primary float-right mt-2">رجوع</a>
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
                   <form action="{{route('products.store')}}" method="POST" 
                        name="le_form"  enctype="multipart/form-data">
                        @csrf
						<div class="row form-row">
								<!--<div class="col-md-4">-->
								<!--		<div class="form-group">-->
								<!--			<label>التصنيف </label>-->
								<!--			<select class="form-control select" name="categoryId">-->
								<!--				<option>اختر التصنيف</option>-->
								<!--				@foreach ($categories as $_item)-->
								<!--				   <option value="{{$_item->id}}" >{{$_item->name_ar}}</option>-->
								<!--				@endforeach-->
								<!--			</select>-->
								<!--		</div>-->
								<!--	</div>-->
									<div class="col-md-6 ">
										<div class="form-group">
											<label>اسم المنتج عربي</label>
											<input type="text" name="name_ar" class="form-control" value="{{old('name_ar')}}">
										</div>
									</div>
									<div class="col-md-6 col-sm-6">
										<div class="form-group">
											<label>الاسم إنجليزي</label>
											<input type="text" name="name_en" class="form-control" value="{{old('name_en')}}">
										</div>
									</div>
									
									
									<div class="col-md-6 col-sm-6">
					                    <div class="form-group">
					                      <label>الوصف عربي</label>
					                      <textarea name="description_ar" id="des" cols="10" rows="2"  class="form-control ">{{old('description_ar')}}</textarea>
					                    </div>
					                </div>
					                <div class="col-md-6 col-sm-6">
					                    <div class="form-group">
					                      <label> الوصف انجليزي</label>
					                      <textarea name="description_en" id="des" cols="10" rows="2"  class="form-control ">{{old('description_en')}}</textarea>
					                    </div>
					                </div>
									
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>السعر</label>
											<input type="text" name="price" class="form-control" value="{{old('price')}}">
										</div>
									</div>
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>الكمية</label>
											<input type="text" name="quantity" class="form-control" value="{{old('quantity')}}">
										</div>
									</div>
									<!-- <div class="col-12 col-sm-6">
										<div class="form-group">
											<label>رقم المودل</label>
											<input type="text" name="modal_number" class="form-control" value="{{old('modal_number')}}">
										</div>
									</div> -->
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>إرفاق صورة</label>
											<input type="file" name="image" class="myfrm form-control" >
										
										</div>
									</div>	




						</div>
						<button type="submit" class="btn btn-primary btn-block">أضافة تخصص </button>
					</form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
    </div>
    <script src="http://code.jquery.com/jquery-3.4.1.js"></script>

	<!-- <script>
		$(document).ready(function () {
			$('#get_sub_category_name').on('change', function () {
	        	console.log("welcome sub"); 
	        	let id = $(this).val();
			    $.ajax({
				    type: 'GET',
				    url: "{{url('instructor/getSubCategory')}}/"+id,
				    success: function (response) {
				        var response = JSON.parse(response)
				        console.log(response);   
					    $('#get_sub_category').empty();
					    $('#get_sub_category').append(`<option value="0" disabled selected>Select </option>`);
					    response.forEach(element => {
					        $('#get_sub_category').append(`<option value="${element['id']}">
					        ${element['title']} - ${element['id']} 
					        </option>`);
					    });
					}
				});
			});
	    });

	</script> -->


    @toastr_js
    @toastr_render
@endsection


								