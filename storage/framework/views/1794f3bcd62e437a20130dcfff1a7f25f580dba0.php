<?php $__env->startSection('content'); ?>	

		<div class="content-header row">
			        <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
			          <h3 class="content-header-title mb-0 d-inline-block">اللغات</h3><br>
			          <div class="row breadcrumbs-top d-inline-block">
			            <div class="breadcrumb-wrapper col-12">
			              <ol class="breadcrumb">
			                <li class="breadcrumb-item"><a href="<?php echo e(url('admin/dashboard')); ?>">الرئيسية</a>
			                </li>
			                <li class="breadcrumb-item active">اللغات
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
			        
        <?php if(session('message')): ?>
	        <div class="alert alert-success">
		        <?php echo e(session('message')); ?>

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
	   
		<?php if(session()->has('error')): ?>
             <?php echo $__env->make('admin.includes.alerts.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
	    <!--  <?php if(Session::has('errorss')): ?>                                
            <span class="text-danger"><?php echo e(Session::get('errorss')); ?></span>
        <?php endif; ?>  -->
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
												<th class="text-center">اللغة</th>
												
												<th class="text-center">العمليات</th>
											</tr>
				 						</thead>
										<tbody>
											<?php $__currentLoopData = $doctor_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<tr>
													<td class="text-center">
														<?php echo e($_item->language->name_ar); ?>

													</td>
													
													<td class="text-center">
														<div class="actions">
															
															<a href="<?php echo e(route('services.edit',$_item->id)); ?>" class="btn btn-sm bg-success-light" >
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
							<form action="<?php echo e(route('languages.store')); ?>" method="POST" 
                                name="le_form"  enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
								<div class="row form-row">
									
									<div class="col-md-6 col-sm-3">
										<div class="form-group">
											<label>شركة التأمين</label>
						                    <select name="languageId" class="form-control" placeholder="اختر">
						                        <option  disabled selected="">اختر</option>  
				                            <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
				                            <option value="<?php echo e($_item->id); ?>" <?php echo e(old('languageId') == $_item->id ? "selected" : ""); ?>><?php echo e($_item->name_ar); ?>

				                            </option>
				                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						                    </select>
						                    <?php $__errorArgs = ['companies_insuranceId'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
				                            <span class="text-danger"><?php echo e($message); ?></span>
				                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
					                    </div>
				                	</div>

									
									
								</div>
								<button type="submit" class="btn btn-primary btn-block">إضافة لغة </button>
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
										<form method="post" action="<?php echo e(route('languages.destroy','test')); ?>">
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
    


	 $('#delete').on('show.bs.modal', function (event) {

      var button = $(event.relatedTarget) 

      var cat_id = button.data('catid') 
      var modal = $(this)

      modal.find('.modal-body #cat_id').val(cat_id);
})


</script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.doctors.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/beauty/resources/views/doctors/languages/all.blade.php ENDPATH**/ ?>