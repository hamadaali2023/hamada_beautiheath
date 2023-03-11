
@extends('layout.doctors.main')
@section('content')	

		<div class="content-header row">
			        <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
			          <h3 class="content-header-title mb-0 d-inline-block">الخدمات</h3><br>
			          <div class="row breadcrumbs-top d-inline-block">
			            <div class="breadcrumb-wrapper col-12">
			              <ol class="breadcrumb">
			                <li class="breadcrumb-item">
			                	<a href="{{url('admin/dashboard')}}">الرئيسية</a>
			                </li>
			                
			                <li class="breadcrumb-item active">الخدمات
			                </li>
			              </ol> 
			            </div>
			          </div>
			        </div>

			       
			        @if(session()->has('message'))
                        @include('admin.includes.alerts.success')
                    @endif
                    @if(session()->has('error'))
                        @include('admin.includes.alerts.error')
                    @endif  
                    @if ($errors->any())
			   	    <div class="alert alert-warning">
						<ul>
			    	        @foreach ($errors->all() as $error)
				    	        <li>{{ $error }}</li>
				            @endforeach
				        </ul>
					</div>
					@endif 

		</div>
	<section id="keytable">
	    <div class="row">
	        <div class="col-12">
	              <div class="card">
	              	<div class="card-header">
	                  <h4 class="card-title">قائمة الدول</h4>
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
	                  <div class="card-body card-dashboard">
	                    <div class="card-body">
							<div class="table-responsive">
			                    <table class="table table-striped table-bordered keytable-integration">
			                                     <thead>
													<tr>													
														<th class="text-center">اسم البنك</th>
														<th class="text-center">اسم الحساب</th>
														<th class="text-center">رقم الحساب</th>
														<th class="text-center">swift code</th>
														<th class="text-center">iban</th>
														<th class="text-center">العمليات</th>

													</tr>
												</thead>
												<tbody>
													
												@foreach ($banks as $_item)
													<tr>
														<td class="text-center">
															{{ $_item->name }}
														</td>
														<td class="text-center">
															{{ $_item->name_acount }}
														</td>
														<td class="text-center">
															{{ $_item->number }}
														</td>
														<td class="text-center">
															{{ $_item->swift_code }}
														</td>
														<td class="text-center">
															{{ $_item->iban }}
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
	
</section>

<script src="{{asset('js/app.js')}}"></script>

<script>
    
	$('#delete').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var cat_id = button.data('catid') 
      var modal = $(this)
      modal.find('.modal-body #cat_id').val(cat_id);
	})
</script>

@endsection

