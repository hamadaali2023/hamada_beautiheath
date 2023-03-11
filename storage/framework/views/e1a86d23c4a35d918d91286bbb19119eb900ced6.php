<?php $__env->startSection('content'); ?>	

		<div class="content-header row">
			        <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
			          <h3 class="content-header-title mb-0 d-inline-block">الخبرات</h3><br>
			          <div class="row breadcrumbs-top d-inline-block">
			            <div class="breadcrumb-wrapper col-12">
			              <ol class="breadcrumb">
			                <li class="breadcrumb-item"><a href="<?php echo e(url('admin/dashboard')); ?>">الرئيسية</a>
			                </li>
			                <li class="breadcrumb-item active">الخبرات
			                </li>
			              </ol> 
			            </div>
			          </div>
			        </div>
					<div class="content-header-right col-md-6 col-12">
			          <div class="dropdown float-md-right">
			               <a href="#Add_Specialities_details" data-toggle="modal" class="btn btn-primary float-right mt-2">إضافة </a>
			          </div>
			        </div>
			        
        <?php if(session('success')): ?>
	        <div class="alert alert-success">
		        <?php echo e(session('success')); ?>

	        </div>
		<?php endif; ?>

		<?php if(count($errors) > 0): ?>
	        <div class="alert alert-danger">
			                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
			                        <span aria-hidden="true">&times;</span>
			                    </button>
			                    <strong>خطا</strong>
			                    <ul>
			                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			                        <li><?php echo e($error); ?></li>
			                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			                    </ul>
			</div>
	    <?php endif; ?>
	</div>
	<section id="keytable">     
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
	                    <div class="card-body card-dashboard">
	                        <div class="card-body">
	                            <div class="table-responsive">
	                                <table class="table table-striped table-bordered keytable-integration">
	                                    <thead>
											<tr>	
												<th class="text-center">عدد سنوات الخبرة</th>
												<th class="text-center">اسم المنظمة</th>
												<th class="text-center">فترة العمل</th>
												<th class="text-center">عنوان الوظيفة</th>
												<th class="text-center">وصف الوظيفة</th>
												
												<th class="text-center">العمليات</th>
											</tr>
				 						</thead>
										<tbody>
											<?php $__currentLoopData = $doctor_experiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<tr>
													<td class="text-center">
														<?php echo e($_item->year); ?>

													</td>
													<td class="text-center">
														<?php echo e($_item->organization); ?>

													</td>
													<td class="text-center">
														من <?php echo e($_item->from); ?> إلى <?php echo e($_item->to); ?>

													</td>
													<td class="text-center">
														<?php echo e($_item->job_title); ?> 
													</td>
													<td class="text-center">
														<?php echo e($_item->job_desc); ?> 
													</td>
													<td class="text-center">
														<div class="actions">
															<!-- <a class="btn btn-sm bg-success-light" data-toggle="modal" 
															data-year ="<?php echo e($_item->year); ?>"
															data-organization ="<?php echo e($_item->organization); ?>" 
															data-year ="<?php echo e($_item->year); ?>"
															data-from ="<?php echo e($_item->from); ?>"
															data-to ="<?php echo e($_item->to); ?>"
															data-job_title ="<?php echo e($_item->job_title); ?>"
															data-job_desc ="<?php echo e($_item->job_desc); ?>"
															data-catid="<?php echo e($_item->id); ?>" 
															data-target="#edit">
																<i class="fe fe-pencil"></i> تعديل
															</a> -->
															<a data-toggle="modal" 
															data-year ="<?php echo e($_item->year); ?>"
															data-organization ="<?php echo e($_item->organization); ?>" 
															data-year ="<?php echo e($_item->year); ?>"
															data-from ="<?php echo e($_item->from); ?>"
															data-to ="<?php echo e($_item->to); ?>"
															data-job_title ="<?php echo e($_item->job_title); ?>"
															data-job_desc ="<?php echo e($_item->job_desc); ?>"
															data-catid="<?php echo e($_item->id); ?>" 
															data-target="#edit" class="btn btn-sm bg-success-light" >
																<button type="button" class="btn btn-outline-success "><i class="la la-edit"></i></button>
															</a>
															<a  data-toggle="modal" data-catid="<?php echo e($_item->id); ?>" data-target="#delete" class="delete-course">
				                                           		<button type="button" class=" btn btn-outline-warning"><i class="la la-trash-o"></i></button>
				                                        	</a>
														</div>
													</td>
												</tr>
							            
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												
											</tbody>  
	                                </table>
	                            </div>          
	                        </div>
	                    </div>
	                </div>
	              </div>
	        </div>
        </div>	  

		<!-- Add Modal -->
			<div class="modal fade" id="Add_Specialities_details" aria-hidden="true" role="dialog">
				<div class="modal-dialog modal-dialog-centered" role="document" >
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title"> </h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form action="<?php echo e(route('experiences.store')); ?>" method="POST" 
                                name="le_form"  enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
								<div class="row form-row">
									
									<div class="col-md-6 col-sm-6">
										<div class="form-group">
											<label>عدد سنوات الخبرة</label>
											<input type="text" name="year" class="form-control" value="<?php echo e(old('year')); ?>">
										</div>
									</div>
									<div class="col-md-6 col-sm-6">
										<div class="form-group">
											<label>اسم المنظمة</label>
											<input type="text" name="organization" class="form-control" value="<?php echo e(old('organization')); ?>">
										</div>
									</div>
									<div class="col-md-6 col-sm-6">
										<div class="form-group">
											<label>من  تاريخ</label>
											<input type="date" name="from" class="form-control" value="<?php echo e(old('from')); ?>">
										</div>
									</div>
									<div class="col-md-6 col-sm-6">
										<div class="form-group">
											<label>إلى تاريخ </label>
											<input type="date" name="to" class="form-control" value="<?php echo e(old('to')); ?>">
										</div>
									</div>
									<div class="col-md-6 col-sm-6">
										<div class="form-group">
											<label>عنوان الوظيفة</label>
											<input type="text" name="job_title" class="form-control" value="<?php echo e(old('job_title')); ?>">
										</div>
									</div>
									<div class="col-md-6 col-sm-6">
										<div class="form-group">
											<label>وصف الوظيفة</label>
											<input type="text" name="job_desc" class="form-control" value="<?php echo e(old('job_desc')); ?>">
										</div>
									</div>


									
									
								</div>
								<button type="submit" class="btn btn-primary btn-block">إضافة تخصص </button>
							</form>
						</div>
					</div>
				</div>
			</div>
		<!-- /ADD Modal -->
			
		<!-- Edit Details Modal -->
			<div class="modal fade" id="edit" aria-hidden="true" role="dialog">
				<div class="modal-dialog modal-dialog-centered" role="document" >
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">تعديل </h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">

							 <form  method="post" action="<?php echo e(route('experiences.update','test')); ?>" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('put'); ?>
                               
								<div class="row form-row">
									<input type="hidden" name="id" id="cat_id" >
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>عدد سنوات الخبرة </label>
											<input type="text" name="year" class="form-control" id="year" >
											
										</div>
									</div>
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>اسم المنظمة</label>
											<input type="text" name="organization" class="form-control" id="organization" >
										</div>
									</div>
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>من تاريخ</label>
											<input type="text" name="from"  class="form-control" id="from">
										</div>
									</div>
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>إلى تاريخ</label>
											<input type="text" name="to"  class="form-control" id="to">
										</div>
									</div>
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>عنوان الوظيفة</label>
											<input type="text" name="job_title"  class="form-control" id="job_title">
										</div>
									</div>
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>وصف الوظيفة</label>
											<input type="text" name="job_desc"  class="form-control" id="job_desc">
										</div>
									</div>
									
								</div>
								<button type="submit" class="btn btn-primary btn-block">حفظ التغيير</button>
							</form>



						</div>
					</div>
				</div>
			</div>
			<!-- /Edit Details Modal -->
			
			
			
			<!-- Delete Modal -->
			<div class="modal fade" id="delete" aria-hidden="true" role="dialog">
				<div class="modal-dialog modal-dialog-centered" role="document" >
					<div class="modal-content">
						<!--	<div class="modal-header">
							<h5 class="modal-title">Delete</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>-->
						<div class="modal-body">
							<div class="form-content p-2">
								<h4 class="modal-title">حذف</h4>
								<p class="mb-4">هل انت متأكد من حذف هذا العنصر ؟</p>
								<div class="row text-center">
									<div class="col-sm-3">
									</div>
									<div class="col-sm-2">
										<form method="post" action="<?php echo e(route('experiences.destroy','test')); ?>">
	                                   		 <?php echo csrf_field(); ?>
	                                         <?php echo method_field('delete'); ?>
	                                         <input type="hidden" name="id" id="cat_id">
	                                    	<button type="submit" class="btn btn-primary">حذف </button>
	                                    </form>
									</div>
									<div class="col-sm-2">
										<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </section>



<script src="<?php echo e(asset('js/app.js')); ?>"></script>

<script>
    $('#edit').on('show.bs.modal', function (event) {
      	var button = $(event.relatedTarget) 
      	var year = button.data('year')
      	var organization = button.data('organization')
      	var from = button.data('from')
      	var to = button.data('to')
      	var job_title = button.data('job_title')
      	var job_desc = button.data('job_desc') 
      	var cat_id = button.data('catid') 
      	var modal = $(this)
      	modal.find('.modal-body #year').val(year);
      	modal.find('.modal-body #organization').val(organization);
      	modal.find('.modal-body #from').val(from);
      	modal.find('.modal-body #to').val(to);
      	modal.find('.modal-body #job_title').val(job_title);
      	modal.find('.modal-body #job_desc').val(job_desc);
      	
      	modal.find('.modal-body #cat_id').val(cat_id);
    })


	$('#delete').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var cat_id = button.data('catid') 
      var modal = $(this)
      modal.find('.modal-body #cat_id').val(cat_id);
	})


</script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.doctors.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/findfamily/public_html/beauty/resources/views/doctors/experiences/all.blade.php ENDPATH**/ ?>