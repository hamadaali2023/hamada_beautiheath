




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
                                    <img class="rounded-circle" alt="User Image" src="<?php echo e(asset('assets_admin/img/vendors/'.$vendors->photo)); ?>" width="50px">
                                </a>
                            </div>
                            <div class="col ml-md-n2 profile-user-info">
                               <h4 class="user-name mb-0"> <?php echo e($vendors->email); ?></h4>
                                    <h6 class="text-muted"> <?php echo e($vendors->mobile); ?></h6>
                            </div>
                        </div>
                    </div>

                    <div class="profile-menu">
                        <ul class="nav nav-tabs nav-tabs-solid">
                          <li class="nav-item">
                                    <a class="nav-link " data-toggle="tab" href="#per_details_tab">من أنا</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#password_tab"> كلمة المرور </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " data-toggle="tab" href="#orders_tab">الطلبات</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " data-toggle="tab" href="#products_tab">المنتجات</a>
                                </li>
                        </ul>
                    </div>  

                    <div class="tab-content profile-tab-cont">
                    	<div class="tab-pane fade " id="per_details_tab">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <p class="col-sm-2 text-muted  mb-0 mb-sm-3">الامس</p>
                                                <p class="col-sm-10"><?php echo e($vendors->first_name); ?> <?php echo e($vendors->last_name); ?></p>
                                            </div>                                      
                                            <div class="row">
                                                <p class="col-sm-2 text-muted  mb-0 mb-sm-3">البريد الإلكتروني</p>
                                                <p class="col-sm-10"><?php echo e($vendors->email); ?></p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-2 text-muted  mb-0 mb-sm-3">رقم الهاتف</p>
                                                <p class="col-sm-10"><?php echo e($vendors->mobile); ?></p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-2 text-muted  mb-0">تاريخ الميلاد</p>
                                                <p class="col-sm-10"><?php echo e($vendors->dateOfBirth); ?></p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-2 text-muted  mb-0">النوع</p>
                                                    <p class="col-sm-10"><?php echo e($vendors->gender); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Edit Details Modal -->
                                    <div class="modal fade" id="edit_personal_details" aria-hidden="true" role="dialog">
                                                <div class="modal-dialog modal-dialog-centered" role="document" >
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Personal Details</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form>
                                                                <div class="row form-row">
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>First Name</label>
                                                                            <input type="text" class="form-control" value="John">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>Last Name</label>
                                                                            <input type="text"  class="form-control" value="Doe">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label>Date of Birth</label>
                                                                            <div class="cal-icon">
                                                                                <input type="text" class="form-control" value="24-07-1983">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>Email ID</label>
                                                                            <input type="email" class="form-control" value="johndoe@example.com">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>Mobile</label>
                                                                            <input type="text" value="+1 202-555-0125" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <h5 class="form-title"><span>Address</span></h5>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                        <label>Address</label>
                                                                            <input type="text" class="form-control" value="4663 Agriculture Lane">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>City</label>
                                                                            <input type="text" class="form-control" value="Miami">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>State</label>
                                                                            <input type="text" class="form-control" value="Florida">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>Zip Code</label>
                                                                            <input type="text" class="form-control" value="22434">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>Country</label>
                                                                            <input type="text" class="form-control" value="United States">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>                      
                        <!-- Change Password Tab -->
                        <div class="tab-pane fade show active" id="password_tab">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">تغيير كلمة المرور</h5>
                                    <div class="row">
                                        <div class="col-md-10 col-lg-6">
                                            <form action="<?php echo e(route('patients.changepassword')); ?>" method="POST" name="le_form"  enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                                <input type="hidden" name="patientId" value="<?php echo e($vendors->id); ?>">
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
                        <!--  -->

                        <!-- orders_tab Tab -->
                        <div id="orders_tab" class="tab-pane fade">
                        <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
								<div class="table-responsive">
				                    <table class="table table-striped table-bordered keytable-integration">
				                         <thead>
											<tr>													
												<th>رقم الطلب</th>
												<th>اسم متلقي الخدمة</th>
												<th>التاريخ</th>
												<!-- <th>الإجمالي</th> -->
											</tr>
										</thead>
									<tbody>
									<?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<tr>
											<td class="text-center">						
												<a href="<?php echo e(url('all-vendor-order-details/'.$_item->id)); ?>"><?php echo e($_item->id); ?></a>
											</td>
											<td class="text-center">						
												<?php echo e($_item->patient->first_name); ?>

											</td>
											<td class="text-center">						
												<?php echo e($_item->date); ?><br>
												<?php echo e($_item->time); ?>

											</td>
											<!-- <td class="text-center">						
												<?php echo e($_item->total_price); ?>

											</td>
										</tr> -->
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
														
									</tbody>
				                    </table>
				                </div>			
							</div>
                            </div>
                        </div>
                        </div>   
                        </div>

                        <!-- products_tab Tab -->
                        <div id="products_tab" class="tab-pane fade">
                        <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                     <table class="table table-striped table-bordered keytable-integration">
	                                    <thead>
											<tr>	
												<th class="text-center">الصورة</th>
												<th class="text-center">الاسم</th>
												<th class="text-center">الوصف</th>
												<th class="text-center">السعر</th>
												<th class="text-center">الكمية</th>
												<!-- <th class="text-center">العمليات</th> -->
											</tr>
				 						</thead>
										<tbody>
											<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<tr>
													<td>
														<a href="profile" class="avatar avatar-sm mr-2">
					                                        <img class="avatar-img" src="<?php echo e(asset('img/product/'.$_item->cover_img)); ?>" alt="Speciality">
					                                    </a>
													</td>
													<td class="text-center">
														<?php echo e($_item->name_ar); ?>

													</td>
													<td class="text-center">
														<?php echo e($_item->description_ar); ?>

													</td>
													<td class="text-center">
														<?php echo e($_item->price); ?>

													</td>
													<td class="text-center">
														<?php echo e($_item->quantity); ?>

													</td>
													<td class="text-center">
														<div class="actions">
															<!-- <a  data-toggle="modal" data-catid="<?php echo e($_item->id); ?>" data-target="#imagemodal<?php echo e($_item->id); ?>" class="delete-course">
				                                           		<button type="button" class=" btn btn-outline-warning"><i class="la la-image"></i></button>
				                                        	</a> -->
				                                        	<!-- <a  href="<?php echo e(url('products/sizes')); ?>" class="delete-course">
				                                           		<button type="button" class="btn btn-outline-success ">الاحجام</button>
				                                        	</a>
				                                        	<a href="<?php echo e(url('products/colors')); ?>" class="delete-course">
				                                           		<button type="button" class="btn btn-outline-success ">الالوان</button>
				                                        	</a> -->
															<!-- <a href="<?php echo e(route('products.edit',$_item->id)); ?>" class="btn btn-sm bg-success-light" >
																<button type="button" class="btn btn-outline-success "><i class="la la-edit"></i></button>
															</a>
															<a  data-toggle="modal" data-catid="<?php echo e($_item->id); ?>" data-target="#delete" class="delete-course">
				                                           		<button type="button" class=" btn btn-outline-warning"><i class="la la-trash-o"></i></button>
				                                        	</a> -->
														</div>
													</td>
												</tr>
							            
												<!-- Edit imagemodal Modal -->
                                    			<div class="modal fade" id="imagemodal<?php echo e($_item->id); ?>" aria-hidden="true" role="dialog">
                                    				<div class="modal-dialog modal-dialog-centered" role="document" >
	                                    				<div class="modal-content">
								                        <div class="col-md-12 ">
											              <div class="card">
											                <div class="card-content">
											                  <div class="card-body">
											                    <div id="carousel-keyboard" class="carousel slide" data-ride="carousel" data-keyboard="false">
											                      
											                      
											                      <a class="carousel-control-prev" href="#carousel-keyboard" role="button" data-slide="prev">
											                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
											                        <span class="sr-only">Previous</span>
											                      </a>
											                      <a class="carousel-control-next"  href="#carousel-keyboard" role="button" data-slide="next">
											                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
											                        <span class="sr-only">Next</span>
											                      </a>
											                    </div>
											                  </div>
											                </div>
											              </div>
											            </div>
	                                    				</div>
                                    				</div>
                                    			</div>
                                    			<!-- image modal Modal -->
                                    			
                                    			
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
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
    <script src="http://code.jquery.com/jquery-3.4.1.js"></script>


<?php $__env->stopSection(); ?>






<?php echo $__env->make('layout.admin_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/findfamily/public_html/beauty/resources/views/admin/vendors/vendor-profile.blade.php ENDPATH**/ ?>