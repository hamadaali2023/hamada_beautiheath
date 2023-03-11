<?php $__env->startSection('content'); ?>	

   

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
                <a href="<?php echo e(route('services.index')); ?>"  class="btn btn-primary float-right mt-2">رجوع</a>
            </div>
        </div>
    	<div class="content-header-center col-md-12 col-12">
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
                   <form action="<?php echo e(route('services.store')); ?>" method="POST" 
                        name="le_form"  enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
						<div class="row form-row">
									
									<div class="form-group col-md-3 col-sm-6">
			                          <label>الخدمة الرئيسية</label>
			                          <select name="categoryId" class="form-control select2-diacritics required" placeholder="Select Category" id="get_sub_category_name">
			                            <option  disabled selected="">اختر</option>  
			                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
			                            <option value="<?php echo e($_item->id); ?>" <?php echo e(old('categoryId') == $_item->id ? "selected" : ""); ?>><?php echo e($_item->name_ar); ?>

			                            </option>
			                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			                          </select>
			                          <?php $__errorArgs = ['categoryId'];
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
											<input type="text" name="price" class="form-control" value="<?php echo e(old('price')); ?>">
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
				    url: "<?php echo e(url('doctor/getSubCategory')); ?>/"+id,
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
<?php $__env->stopSection(); ?>


								
<?php echo $__env->make('layout.doctors.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/findfamily/public_html/beauty/resources/views/doctors/services/create.blade.php ENDPATH**/ ?>