







<?php $__env->startSection('content'); ?>	
	<div class="content-header row">
		<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
		    <h3 class="content-header-title mb-0 d-inline-block">المدن</h3><br>
			<div class="row breadcrumbs-top d-inline-block">
		    <div class="breadcrumb-wrapper col-12">
			    <ol class="breadcrumb">
	            <li class="breadcrumb-item">
			                	<a href="<?php echo e(url('admin/dashboard')); ?>">الرئيسية</a>
			                </li>
			                
			                <li class="breadcrumb-item active">المدن
			                </li>
			              </ol> 
			            </div>
			          </div>
		</div>

			        <div class="content-header-right col-md-6 col-12">
			          <div class="dropdown float-md-right">
			               <a href="#Add_Specialities_details" data-toggle="modal" class="btn btn-primary float-right mt-2">أضافة مدينة</a>
			          </div>
			        </div>
		<?php if(session()->has('message')): ?>
         	<?php echo $__env->make('admin.includes.alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <?php if($errors->any()): ?>
			<div class="alert alert-warning">
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
                  <h4 class="card-title">قائمة المدن</h4>
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
													<th>المدينة عربي</th>
													<th>المدينة انجليزي</th>
													 <th>الدولة</th>
													<th class="text-right">العمليات</th>
												</tr>
											</thead>
											<tbody>
												
											<?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<tr>													
													
													<td class="text-center">											
														<?php echo e($_item->country->name_ar); ?>

													</td>
													<td class="text-center">
														
														<?php echo e($_item->name_ar); ?>

													</td>
													<td class="text-center">
														
														<?php echo e($_item->name_en); ?>

													</td>
												
													<td class="text-center">
														<div class="actions">
															<!-- <a class="btn btn-sm bg-success-light" data-toggle="modal" 
															data-name_ar ="<?php echo e($_item->name_ar); ?>" 
															data-name_en ="<?php echo e($_item->name_en); ?>"
															data-icon ="<?php echo e($_item->icon); ?>" 
															data-catid="<?php echo e($_item->id); ?>" 
															data-target="#edit">
																<i class="fe fe-pencil"></i> تعديل
															</a> -->
															<a class="btn btn-sm bg-success-light" href="<?php echo e(url('cities/'.$_item->id).'/edit'); ?>"><i class="fe fe-pencil"></i> تعديل</a>

															<a  data-toggle="modal" data-catid="<?php echo e($_item->id); ?>" data-target="#delete" class="btn btn-sm bg-danger-light">
																<i class="fe fe-trash"></i> حذف
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
							<h5 class="modal-title">أضافة مدينة</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form action="<?php echo e(route('cities.store')); ?>" method="POST" 
                                name="le_form"  enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
								<div class="row form-row">
									
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>المدينة عربي</label>
											<input type="text" name="name_ar" class="form-control" value="<?php echo e(old('name_ar')); ?>">
										</div>
									</div>
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>المدينة انجليزي</label>
											<input type="text" name="name_en" class="form-control" value="<?php echo e(old('name_en')); ?>">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>الدولة </label>
											<select class="form-control select" name="countryId">
												<option>اختر الدولة</option>
												<?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												   <option value="<?php echo e($_item->id); ?>" ><?php echo e($_item->name_ar); ?></option>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											</select>
										</div>
									</div>
									
									
								</div>
								<button type="submit" class="btn btn-primary btn-block">أضافة مدينة </button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /ADD Modal -->
			
			
			<!-- Delete Modal -->
			<div class="modal fade" id="delete" aria-hidden="true" role="dialog">
				<div class="modal-dialog modal-dialog-centered" role="document" >
					<div class="modal-content">
					
						<div class="modal-body">
							<div class="form-content p-2">
								<h4 class="modal-title">حذف</h4>
								<p class="mb-4">هل انت متأكد من حذف هذا العنصر ؟</p>
								<div class="row text-center">
									<div class="col-sm-3">
									</div>
									<div class="col-sm-2">
										<form method="post" action="<?php echo e(route('cities.destroy','test')); ?>">
	                                   		 <?php echo csrf_field(); ?>
	                                         <?php echo method_field('delete'); ?>
	                                         <input type="hidden" name="id" id="cat_id" >
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
			<!-- /Delete Modal -->

        </section>

	<!-- /Main Wrapper -->
<script src="<?php echo e(asset('js/app.js')); ?>"></script>
<script>
	 $('#delete').on('show.bs.modal', function (event) {

      var button = $(event.relatedTarget) 

      var cat_id = button.data('catid') 
      var modal = $(this)

      modal.find('.modal-body #cat_id').val(cat_id);
})


</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.admin_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/findfamily/public_html/heeeelthy/resources/views/admin/cities/all.blade.php ENDPATH**/ ?>