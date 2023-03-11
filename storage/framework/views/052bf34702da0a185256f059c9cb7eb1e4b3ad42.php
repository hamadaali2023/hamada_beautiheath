<?php $__env->startSection('content'); ?>	

@toastr_css

  <div class="content-header row">
                    <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                      <h3 class="content-header-title mb-0 d-inline-block">إضافة كورس جديد</h3><br>
                      <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-6">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            
                            <li class="breadcrumb-item active">الكورسات
                            </li>
                          </ol> 
                        </div>
                        <?php if(session()->has('message')): ?>
	                        <?php echo $__env->make('admin.includes.alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	                    <?php endif; ?>

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
                   
			        <form  method="post"  action="<?php echo e(route('products.update',$product->id)); ?>" enctype="multipart/form-data">
                                 <?php echo csrf_field(); ?>
                                <?php echo method_field('put'); ?>
                <div class="row form-row">
			            <div class="col-md-4">
										<div class="form-group">
											<label>التصنيف </label>
											<select class="form-control select" name="categoryId">
												<option>اختر التصنيف</option>
												
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($_item->id); ?>" <?php echo e(($_item->id==$product->categoryId) ? 'selected' : ''); ?>><?php echo e($_item->name_ar); ?>

                          </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											</select>
										</div>
									</div>
                  
									<div class="col-md-4 col-sm-6">
										<div class="form-group">
											<label>الاسم المنتج عربي</label>
											<input type="text" name="name_ar" class="form-control" value="<?php echo e($product->name_ar); ?>">
										</div>
									</div>
									<div class="col-md-4 col-sm-6">
										<div class="form-group">
											<label>الاسم إنجليزي</label>
											<input type="text" name="name_en" class="form-control" value="<?php echo e($product->name_en); ?>">
										</div>
									</div>
                  <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                      <label>الوصف عربي</label>
                      <!-- <input type="text" name="description_ar" class="form-control" value="<?php echo e($product->description_ar); ?>"> -->
                      <textarea name="description_ar" id="des" cols="10" rows="3"  class="form-control "><?php echo e($product->description_ar); ?></textarea>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                      <label>الوصف انجليزي</label>
                      
                      <textarea name="description_en" id="des" cols="10" rows="3"  class="form-control "><?php echo e($product->description_en); ?></textarea>
                    </div>
                  </div>
									<div class="col-md-6 col-sm-6">
										<div class="form-group">
											<label>السعر</label>
											<input type="text" name="price" class="form-control" value="<?php echo e($product->price); ?>">
										</div>
									</div>
									<div class="col-md-6 col-sm-6">
										<div class="form-group">
											<label>الكمية</label>
											<input type="text" name="quantity" class="form-control" value="<?php echo e($product->quantity); ?>">
										</div>
									</div>
                  

									<div class="col-md-12 col-sm-6">
										<div class="form-group">
											<label>إرفاق صورة </label>
											 <input type="file" name="imagee" class="myfrm form-control" multiple>
											<!-- <input type="file" name="imagee[]" class="form-control"  multiple> -->
											<!-- <input type="hidden" name="title[]" class="form-control" value="<?php echo e(old('title')); ?>" multiple> -->

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

<script> 
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

        $(document).ready(function () {
            $('#get_sub_category').on('change', function () {
                console.log("welcome sub"); 
                let id = $(this).val();
                $.ajax({
                    type: 'GET',
                    url: "<?php echo e(url('instructor/getchildcategory')); ?>/"+id,
                    success: function (response) {
                        var response = JSON.parse(response)
                        console.log(response);   
                        $('#get_child_category').empty();
                        $('#get_child_category').append(`<option value="0" disabled selected>Select </option>`);
                        response.forEach(element => {
                            $('#get_child_category').append(`<option value="${element['id']}">
                            ${element['title']} - ${element['id']} 
                            </option>`);
                        });
                    }
                });
            });
        });

    $('#delete').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var cat_id = button.data('catid') 
        var modal = $(this)
        modal.find('.modal-body #cat_id').val(cat_id);
    })
</script> 
    @toastr_js
    @toastr_render
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.instructor.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/findfamily/public_html/beauty/resources/views/vendors/products/edit.blade.php ENDPATH**/ ?>