<?php $__env->startSection('content'); ?>	

		<div class="content-header row">
			        <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
			          <h3 class="content-header-title mb-0 d-inline-block">الخدمات</h3><br>
			          <div class="row breadcrumbs-top d-inline-block">
			            <div class="breadcrumb-wrapper col-12">
			              <ol class="breadcrumb">
			                <li class="breadcrumb-item">
			                	<a href="<?php echo e(url('admin/dashboard')); ?>">الرئيسية</a>
			                </li>
			                
			                <li class="breadcrumb-item active">الخدمات
			                </li>
			              </ol> 
			            </div>
			          </div>
			        </div>

			      
			        <?php if(session()->has('message')): ?>
                        <?php echo $__env->make('admin.includes.alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endif; ?>
                    <?php if(session()->has('error')): ?>
                        <?php echo $__env->make('admin.includes.alerts.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
														<!-- <th class="text-center">العمليات</th> -->

													</tr>
												</thead>
												<tbody>
													
												<?php $__currentLoopData = $banks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<tr>
														<td class="text-center">
															<?php echo e($_item->name); ?>

														</td>
														<td class="text-center">
															<?php echo e($_item->name_acount); ?>

														</td>
														<td class="text-center">
															<?php echo e($_item->number); ?>

														</td>
														<td class="text-center">
															<?php echo e($_item->swift_code); ?>

														</td>
														<td class="text-center">
															<?php echo e($_item->iban); ?>

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


<?php echo $__env->make('layout.instructor.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/findfamily/public_html/beauty/resources/views/vendors/banks.blade.php ENDPATH**/ ?>