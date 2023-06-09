



<?php $__env->startSection('content'); ?>	

		<div class="content-header row">
			        <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
			          <h3 class="content-header-title mb-0 d-inline-block"> تعديل الملف الشخصي </h3><br>
			          <div class="row breadcrumbs-top d-inline-block">
			            <div class="breadcrumb-wrapper col-12">
			              <ol class="breadcrumb">
			                <li class="breadcrumb-item"><a href="<?php echo e(url('instructor/dashboard')); ?>">الرئيسية</a></li>
			                </li>
			                
			                <li class="breadcrumb-item active">الملف الشخصي
			                </li>
			              </ol> 
			            </div>
			          </div>
			        </div>
			        <div class="content-header-right col-md-6 col-12">

			        </div>
			        
			        <?php if(session('message')): ?>
			            <div class="alert alert-success">
			                <?php echo e(session('message')); ?>

			            </div>
			        <?php endif; ?>
					<?php if(session('errorss')): ?>
			        	<div class="alert alert-danger">
			            	<ul>                
			            		<?php echo e(session('errorss')); ?>

			                </ul>
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
               
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
                    <div class="card-body">
						<div class="row">
						<div class="col-md-12">
							<div class="profile-header">
								<div class="row align-items-center">
									<div class="col-auto profile-image">
										<a href="#">
											<img class="rounded-circle" alt="User Image" src="<?php echo e(asset('img/profiles/'.$users->photo)); ?>" width="100px" height="100px">
										</a>
									</div>
									<div class="col ml-md-n2 profile-user-info">
										<h4 class="user-name mb-0"><?php echo e($users->name); ?></h4>
										<h6 class="text-muted"><?php echo e($users->email); ?></h6>
										<div class="user-Location"><i class="fa fa-map-marker"></i> <?php echo e($users->address); ?></div>
										<!-- <div class="about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div> -->
									</div>
									<!-- <div class="col-auto profile-btn">
										
										<a href="" class="btn btn-primary">
											Edit
										</a>
									</div> -->
								</div>
							</div>
							<div class="profile-menu">
								<ul class="nav nav-tabs nav-tabs-solid">
									<li class="nav-item">
										<a class="nav-link active" data-toggle="tab" href="#per_details_tab">من أنا</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#password_tab">كلمة المرور</a>
									</li>
								</ul>
							</div>	
							<div class="tab-content profile-tab-cont">
								
								<!-- Personal Details Tab -->
								<div class="tab-pane fade show active" id="per_details_tab">
								
									<!-- Personal Details -->
									<div class="row">
										<div class="col-lg-12">
											<div class="card">
												<div class="card-body">
													<h5 class="card-title d-flex justify-content-between">
														<span>البيانات الشخصية	</span> 
														<a class="edit-link" data-toggle="modal" href="#edit_personal_details"><i class="fa fa-edit mr-1"></i>تعديل</a>
													</h5>
													<div class="row">
														<p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">الاسم</p>
														<p class="col-sm-10"><?php echo e($users->first_name); ?> <?php echo e($users->last_name); ?></p>
													</div>
													
													<div class="row">
														<p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">البريد الالكتروني</p>
														<p class="col-sm-10"><?php echo e($users->email); ?></p>
													</div>
													<div class="row">
														<p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">الهاتف</p>
														<p class="col-sm-10" dir="ltr"><?php echo e($users->mobile); ?></p>
													</div>
													<div class="row">
														<p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">الدولة</p>
														<p class="col-sm-10" dir="ltr"><?php echo e($users->country); ?></p>
													</div>
													
												</div>
											</div>
											
											<!-- Edit Details Modal -->
											<div class="modal fade" id="edit_personal_details" aria-hidden="true" role="dialog">
												<div class="modal-dialog modal-dialog-centered" role="document" >
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title">البيانات الشخصية</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
														<form action="<?php echo e(url('doctor/profile/update')); ?>" method="POST" 
								                                name="le_form"  enctype="multipart/form-data">
								                            <?php echo csrf_field(); ?>
															<div class="row form-row">    
																<input type="hidden" name="id" value="<?php echo e(Auth::guard('doctors')->user()->id); ?>">
																<div class="col-12 col-sm-12">
																	<div class="form-group">
																		<label> الاسم الاول</label>
																		<input type="text" name="first_name" class="form-control" value="<?php echo e($users->first_name); ?>">
																	</div>
																</div>
																<div class="col-12 col-sm-12">
																	<div class="form-group">
																		<label> الاسم الثاني</label>
																		<input type="text" name="last_name" class="form-control" value="<?php echo e($users->last_name); ?>">
																	</div>
																</div>
																<div class="col-12 col-sm-12">
																<div class="form-group">
																	<label for="country"> الدولة </label>
																	<select name="countryId" id="get_city_name" class="form-control"  >
																		<option  disabled selected>Select</option>	
																		<?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
																		    <option value="<?php echo e($_item->id); ?>"><?php echo e($_item->name_ar); ?></option>
																		    
																		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
																	</select>
																</div>
																</div>

																<!-- <div class="form-group">
																	<label for="state"> المدينة </label>
																	<select name="cityId" id="get_city" class="form-control" >
																	</select>
																</div> -->
																	
																	<div class="col-12 col-sm-12">
																		<div class="form-group">
																			<label>الهاتف</label>
																			<input type="text" name="mobile" value="<?php echo e($users->mobile); ?>" class="form-control">
																		</div>
																	</div>
																	
																	<div class="col-12 col-sm-12">
																		<div class="form-group">
																			<label>الصورة الشخصية</label>
																			<input type="hidden" name="url" value="<?php echo e($users->photo); ?>" >
																			<input type="file" name="photo" class="form-control" value="Miami">
																		</div>
																	</div>
																	
																</div>
																<button type="submit" class="btn btn-primary btn-block">حفظ التغيير </button>
															</form>
														</div>
													</div>
												</div>
											</div>
											<!-- /Edit Details Modal -->
											
										</div>

									
									</div>
									<!-- /Personal Details -->

								</div>
								<!-- /Personal Details Tab -->
								
								<!-- Change Password Tab -->
								<div id="password_tab" class="tab-pane fade">
								
									<div class="card">
										<div class="card-body">
											<h5 class="card-title">تغيير كلمة المرور</h5>
											<div class="row">
												<div class="col-md-10 col-lg-6">
															<form action="<?php echo e(route('user.changepassword')); ?>" method="POST" 
	                                name="le_form"  enctype="multipart/form-data">
	                                <?php echo csrf_field(); ?>
	                                					<input type="hidden" name="id" value="<?php echo e(Auth::guard('doctors')->user()->id); ?>">
														<div class="form-group">
															<label>كلمة المرور الحالية</label>
															<input type="password" name="current-password" class="form-control">
														</div>
														<div class="form-group">
															<label>كلمة المرور الجديدة</label>
															<input type="password" name="new-password" class="form-control">
														</div>
														<!-- <div class="form-group">
															<label>Confirm Password</label>
															<input type="password" class="form-control">
														</div> -->
														<button class="btn btn-primary" type="submit">حفظ التغيير</button>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Change Password Tab -->
								
							</div>
						</div>
					</div>			
					</div>
                  </div>
                </div>
              </div>
            </div>
        </div>
	<script src="http://code.jquery.com/jquery-3.4.1.js"></script>


	<!-- <script>
		$(document).ready(function () {
			console.log("welcome sub"); 
			$('#get_city_name').on('change', function () {
	        	console.log("welcome sub"); 

	        	let id = $(this).val();
			    $.ajax({
				    type: 'GET',
				    url: "<?php echo e(url('getcounrtyy')); ?>/"+id,
				    success: function (response) {
				        var response = JSON.parse(response)
				        console.log(response);   
					    $('#get_city').empty();
					    $('#get_city').append(`<option value="0" disabled selected>Select </option>`);
					    response.forEach(element => {
					    	console.log(element['id']);
					        $('#get_city').append(`<option value="${element['id']}">
					        ${element['name']['ar']}
					        </option>`);
					    });
					}
				});
			});
	    });
	</script> -->
	 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.doctors.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/beauty/resources/views/doctors/profile.blade.php ENDPATH**/ ?>