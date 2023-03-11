<?php $__env->startSection('content'); ?>	


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
                <a href="<?php echo e(route('products.index')); ?>"  class="btn btn-primary float-right mt-2">رجوع</a>
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
                   <form action="<?php echo e(route('products.store')); ?>" method="POST" 
                        name="le_form"  enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
						<div class="row form-row">
								<!--<div class="col-md-4">-->
								<!--		<div class="form-group">-->
								<!--			<label>التصنيف </label>-->
								<!--			<select class="form-control select" name="categoryId">-->
								<!--				<option>اختر التصنيف</option>-->
								<!--				<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>-->
								<!--				   <option value="<?php echo e($_item->id); ?>" ><?php echo e($_item->name_ar); ?></option>-->
								<!--				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
								<!--			</select>-->
								<!--		</div>-->
								<!--	</div>-->
									<div class="col-md-6 ">
										<div class="form-group">
											<label>اسم المنتج عربي</label>
											<input type="text" name="name_ar" class="form-control" value="<?php echo e(old('name_ar')); ?>">
										</div>
									</div>
									<div class="col-md-6 col-sm-6">
										<div class="form-group">
											<label>الاسم إنجليزي</label>
											<input type="text" name="name_en" class="form-control" value="<?php echo e(old('name_en')); ?>">
										</div>
									</div>
									
									
									<div class="col-md-6 col-sm-6">
					                    <div class="form-group">
					                      <label>الوصف عربي</label>
					                      <textarea name="description_ar" id="des" cols="10" rows="2"  class="form-control "><?php echo e(old('description_ar')); ?></textarea>
					                    </div>
					                </div>
					                <div class="col-md-6 col-sm-6">
					                    <div class="form-group">
					                      <label> الوصف انجليزي</label>
					                      <textarea name="description_en" id="des" cols="10" rows="2"  class="form-control "><?php echo e(old('description_en')); ?></textarea>
					                    </div>
					                </div>
									
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>السعر</label>
											<input type="text" name="price" class="form-control" value="<?php echo e(old('price')); ?>">
										</div>
									</div>
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>الكمية</label>
											<input type="text" name="quantity" class="form-control" value="<?php echo e(old('quantity')); ?>">
										</div>
									</div>
									<!-- <div class="col-12 col-sm-6">
										<div class="form-group">
											<label>رقم المودل</label>
											<input type="text" name="modal_number" class="form-control" value="<?php echo e(old('modal_number')); ?>">
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
				    url: "<?php echo e(url('instructor/getSubCategory')); ?>/"+id,
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
<?php $__env->stopSection(); ?>


								
<?php echo $__env->make('layout.instructor.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/beaunqrp/public_html/resources/views/vendors/products/create.blade.php ENDPATH**/ ?>