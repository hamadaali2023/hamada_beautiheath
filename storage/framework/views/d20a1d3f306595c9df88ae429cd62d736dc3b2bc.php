

<?php $__env->startSection('content'); ?>	

    @toastr_css

	<div class="content-header row">
		<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
			<h3 class="content-header-title mb-0 d-inline-block">Bank account information</h3><br>
			<div class="row breadcrumbs-top d-inline-block">
	            <div class="breadcrumb-wrapper col-12">
			        <ol class="breadcrumb">
		                <li class="breadcrumb-item"><a href="<?php echo e(url('instructor/dashboard')); ?>">الرئيسية</a></li>
			            <li class="breadcrumb-item active">Bank info</li>
			        </ol> 
			    </div>
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
                  <h4 class="card-title">Enter the bank account information</h4>
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
                  <div class="card-body" style="direction:ltr">
                    <form action="<?php echo e(route('bankdetails')); ?>" method="POST" 
                                name="le_form"  enctype="multipart/form-data" style="text-align: left;">
                                <?php echo csrf_field(); ?>
								<div class="row form-row">	
									<div class="col-md-4 col-sm-6">
										<div class="form-group">
											<label>Beneficiary Name</label>
											<input type="text" name="persone_name" class="form-control" value="<?php echo e($bankdetails->persone_name); ?>">
										</div>
									</div>	                	
									<div class="col-md-4 col-sm-6">
											<div class="form-group ">
												<label>Country</label>
												<select name="countryId" class="form-control select2-diacritics required" placeholder="Select Category" id="get_city_name">
												<option   disabled selected>Select</option>

												<?php $__currentLoopData = $country; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												   <option value="<?php echo e($_item->id); ?>" <?php echo e(($_item->id==$bankdetails->countryId) ? 'selected' : ''); ?>><?php echo e($_item->name_en); ?></option>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											</select>
										</div>
									</div>

									<div class="col-md-4 col-sm-6">
										<div class="form-group ">									 
										        <label>city</label>
										        <select name="cityId" class="form-control formselect"  id="get_city">
										        <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												   <option value="<?php echo e($_item->id); ?>" <?php echo e(($_item->id==$bankdetails->cityId) ? 'selected' : ''); ?>>
												   	<?php echo e($_item->name_en); ?>

												   </option>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										        </select>
										</div>
									</div>

									
									
									<div class="col-md-4 col-sm-6">
										<div class="form-group">
											<label>Bank name</label>
											<input type="text" name="bank_name" class="form-control" value="<?php echo e($bankdetails->bank_name); ?>">
										</div>
									</div>
									<div class="col-md-4 col-sm-6">
										<div class="form-group">
											<label>Bank branch name</label>
											<input type="text" name="bank_sub_name" class="form-control" value="<?php echo e($bankdetails->bank_sub_name); ?>">
										</div>
									</div>
									<div class="col-md-4 col-sm-6">
										<div class="form-group">
											<label>Account Number</label>
											<input type="text" name="acount_number" class="form-control" value="<?php echo e($bankdetails->acount_number); ?>">
										</div>
									</div>
									
			                        <div class="col-12 col-sm-6">
										<div class="form-group">
											<label>IBAN  </label>
											<input type="text" name="iban" class="form-control" value="<?php echo e($bankdetails->iban); ?>">
										</div>
									</div>
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>SWIFT code (optional)</label>
											<input type="text" name="swift_code" class="form-control" value="<?php echo e($bankdetails->swift_code); ?>">
										</div>
									</div>
									
			                        
									
								<button type="submit" class="btn btn-primary btn-block">save change </button>
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
			$('#get_city_name').on('change', function () {
	        	console.log("welcome sub"); 
	        	let id = $(this).val();
			    $.ajax({
				    type: 'GET',
				    url: "<?php echo e(url('doctor/getcity')); ?>/"+id,
				    success: function (response) {
				        var response = JSON.parse(response)
				        console.log(response);   
					    $('#get_city').empty();
					    $('#get_city').append(`<option value="0" disabled selected>Select </option>`);
					    response.forEach(element => {
					        $('#get_city').append(`<option value="${element['id']}">
					        ${element['name','ar']]}  
					        </option>`);
					    });
					}
				});
			});
	    });

	</script>


    @toastr_js
    @toastr_render
<?php $__env->stopSection(); ?>


								
<?php echo $__env->make('layout.doctors.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/beauty/resources/views/doctors/bank/edit.blade.php ENDPATH**/ ?>