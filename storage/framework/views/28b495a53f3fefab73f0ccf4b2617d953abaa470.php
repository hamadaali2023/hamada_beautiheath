



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
									<img class="rounded-circle" alt="User Image" src="<?php echo e(asset('img/profiles/'.$doctors->photo)); ?>" width="100px" height="100px">
								</a>
							</div>
							<div class="col ml-md-n2 profile-user-info">
								<h4 class="user-name mb-0"><?php echo e($doctors->name); ?></h4>
								<h6 class="text-muted"><?php echo e($doctors->email); ?></h6>
								<div class="user-Location"><i class="fa fa-map-marker"></i> <?php echo e($doctors->address); ?></div>
							</div>
						</div>
					</div>

					<div class="profile-menu">
						<ul class="nav nav-tabs nav-tabs-solid">
							<li class="nav-item">
								<a class="nav-link " data-toggle="tab" href="#doctor_educations_tab">التعليم</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#workdays_tab">مواعيد العمل</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#doctor_experiences_tab">الخبرات</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#insurances_tab">شركات التزمين</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#doctor_languages_tab">اللغات</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#licenses_tab">الرخصة المهنية</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#orders_tab">الحجوزات</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#doctors_services_tab">الخدمات</a>
							</li>

							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#per_details_tab">من أنا</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#password_tab">كلمة المرور</a>
							</li>
						</ul>
					</div>	

					<div class="tab-content profile-tab-cont">
						<!-- doctor_educations Tab -->
						<div id="doctor_educations_tab" class="tab-pane fade">
						<div class="row">
			        	<div class="col-12">
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

						<!-- workdays_tab Tab -->
						<div id="workdays_tab" class="tab-pane fade">
						<div class="row">
			        	<div class="col-12">
				            <div class="card-body">
				                <form  method="post"  action="<?php echo e(route('work_days.update','test')); ?>" enctype="multipart/form-data">
					                        <?php echo csrf_field(); ?>
					                        <?php echo method_field('put'); ?>
					                        <div class="row form-row">
					                          <input type="hidden" name="id" value="<?php echo e($work_days->id); ?>">
					                          <div class="col-md-6 col-sm-6">
					                            <div class="form-group">
					                            <div class="form-check">
					                              <input class="form-check-input" name="sat" type="checkbox" value="1" <?php echo e(($work_days->day->sat=='1')? 'checked' : ''); ?> >
					                                <label class="form-check-label" >السبت</label>  
					                            </div>
					                            </div>
					                          </div>  

					                          <div class="col-md-6 col-sm-6">
					                            <div class="form-group">
					                            <div class="form-check">
					                              <input class="form-check-input" name="sun" type="checkbox" value="1" <?php echo e(($work_days->day->sun=='1')? 'checked' : ''); ?> >
					                                <label class="form-check-label" >الاحد</label>  
					                            </div>
					                          </div>
					                          </div>  
					                          <div class="col-md-6 col-sm-6">
					                            <div class="form-check">
					                              <input class="form-check-input" name="mon" type="checkbox" value="1" <?php echo e(($work_days->day->mon=='1')? 'checked' : ''); ?> >
					                                <label class="form-check-label" >الاثنين</label>  
					                            </div>
					                          </div>  
					                          <div class="col-md-6 col-sm-6">
					                            <div class="form-group">
					                            <div class="form-check">
					                              <input class="form-check-input" name="tus" type="checkbox" value="1" <?php echo e(($work_days->day->tus=='1')? 'checked' : ''); ?> >
					                                <label class="form-check-label" >الثلاثاء</label>  
					                            </div>
					                          </div>
					                          </div>  
					                          <div class="col-md-6 col-sm-6">
					                            <div class="form-group">
					                            <div class="form-check">
					                              <input class="form-check-input" name="wed" type="checkbox" value="1" <?php echo e(($work_days->day->wed=='1')? 'checked' : ''); ?> >
					                                <label class="form-check-label" >الاربعاء</label>  
					                            </div>
					                          </div>
					                          </div>
					                          <div class="col-md-6 col-sm-6">
					                            <div class="form-group">
					                            <div class="form-check">
					                              <input class="form-check-input" name="thu" type="checkbox" value="1" <?php echo e(($work_days->day->thu=='1')? 'checked' : ''); ?> >
					                                <label class="form-check-label" >الخميس</label>  
					                            </div>
					                          </div>
					                          </div> 
					                           <div class="col-md-8 col-sm-6">
					                            <div class="form-group">
					                            <div class="form-check">
					                              <input class="form-check-input" name="fri" type="checkbox" value="1" <?php echo e(($work_days->day->fri=='1')? 'checked' : ''); ?> >
					                                <label class="form-check-label" >الجمعة</label>  
					                            </div>
					                          </div>
					                          </div>   
					                          <div class="col-md-6 col-sm-6">
					                            <div class="form-group">
					                              <label>من الساعة</label>
					                              <input type="time" name="from_time" class="form-control" value="<?php echo e($work_days->time->from_time); ?>">
					                            </div>
					                          </div>
					                          <div class="col-md-6 col-sm-6">
					                            <div class="form-group">
					                            <label>إلي الساعة</label>
					                            <input type="time" name="to_time" class="form-control" value="<?php echo e($work_days->time->to_time); ?>">
					                            </div>
					                          </div>
					                          </div>
					                        <button type="submit" class="btn btn-primary btn-block">حفظ </button>
				                </form>
					        </div>
				        </div>
			        	</div>	 
						</div>

						<!-- doctor_experiences_tab Tab -->
						<div id="doctor_experiences_tab" class="tab-pane fade">
						<div class="row">
			        	<div class="col-12">
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

						<!-- insurances_tab Tab -->
						<div id="insurances_tab" class="tab-pane fade">
						<div class="row">
			        	<div class="col-12">
				            <div class="card">
				            	 <div class="card-body">
				                            <div class="table-responsive">
				                                <table class="table table-striped table-bordered keytable-integration">
				                                    <thead>
														<tr>	
															<th class="text-center">اسم الشركة</th>
															<th class="text-center">اسم شركة التأمين ف حالة أخرى</th>
															<th class="text-center">نوع التأمين</th>
															<th class="text-center">رقم التأمين</th>
															<th class="text-center">تاريخ الانتهاء</th>
															<th class="text-center">العمليات</th>
														</tr>
							 						</thead>
													<tbody>
														<?php $__currentLoopData = $insurances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
															<tr>
																<td class="text-center">
																	<?php echo e($_item->company_name->name_ar); ?>

																</td>
																<td class="text-center">
																	<?php echo e($_item->name); ?>

																</td>
																<td class="text-center">
																	<?php echo e($_item->type); ?>

																</td>
																<td class="text-center">
																	<?php echo e($_item->number); ?>

																</td>
																<td class="text-center">
																	<?php echo e($_item->date); ?>

																</td>
																<td class="text-center">
																	<div class="actions">
																		
																		<a href="<?php echo e(route('insurances.edit',$_item->id)); ?>" class="btn btn-sm bg-success-light" >
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

						<!-- doctor_languages_tab Tab -->
						<div id="doctor_languages_tab" class="tab-pane fade">
						<div class="row">
			        	<div class="col-12">
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

						<!-- licenses_tab Tab -->
						<div id="licenses_tab" class="tab-pane fade">
						<div class="row">
			        	<div class="col-12">
				            <div class="card">
				               <div class="card-body">
				      		        <form  method="post"  action="<?php echo e(route('licenses.update','test')); ?>" enctype="multipart/form-data">
				                      	<?php echo csrf_field(); ?>
				                      	<?php echo method_field('put'); ?>
				      	              	<div class="row form-row">
				                        	<input type="hidden" name="id" value="<?php echo e($licenses->id); ?>">
				              				<div class="col-md-4">
				                  				<div class="form-group">
				                  					<label>التصنيف </label>
				                					<select class="form-control select" name="placeLicensesId">
				                						<option disabled="">اختر مكان صدوره</option>										
						          	               		<option value="1" <?php echo e(($licenses->placeLicensesId=='1') ? 'selected' : ''); ?>>وزارةة الصحة</option>
						                           		<option value="2" <?php echo e(($licenses->placeLicensesId=='2') ? 'selected' : ''); ?>>الهيئات التنظيمية</option>
						                           		<option value="3" <?php echo e(($licenses->placeLicensesId=='3') ? 'selected' : ''); ?>>هيئة التخصصات الصحية </option>
						                              <option value="4" <?php echo e(($licenses->placeLicensesId=='4') ? 'selected' : ''); ?>>اخري</option>
					          	                </select>
				          			           </div>
				      						</div>
				      	                <div class="col-md-4 col-sm-6">
				              				<div class="form-group">
				              					<label>رقم الرخصة</label>
				              					<input type="text" name="num" class="form-control" value="<?php echo e($licenses->num); ?>">
				          					</div>
				          					</div>
				       						<div class="col-md-4 col-sm-6">
			           							<div class="form-group">
				              						<label>اسم المصدر</label>
				             						<input type="text" name="name" class="form-control" value="<?php echo e($licenses->name); ?>">
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
															<th class="text-center">الخدمات الرئيسي</th>
															<th class="text-center">الخدمات الفرعية</th>
															<th class="text-center">اسم المريض</th>
															<th class="text-center">التاريخ والوقت</th>
															<th class="text-center">حالة الدفع</th>
															<th class="text-center">العمليات</th>
														</tr>
							 						</thead>
													<tbody>
														<?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
															<tr>
																<!-- <td>
																	<a href="profile" class="avatar avatar-sm mr-2">
								                                        <img class="avatar-img" src="<?php echo e(asset('img/product/'.$_item->cover_img)); ?>" alt="Speciality">
								                                    </a>
																</td> -->
																<td class="text-center">
																	<?php echo e($_item->category->name_ar); ?>

																</td>
																<td class="text-center">
																	<?php $__currentLoopData = $_item->subcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $_sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																		-<?php echo e($_sub->title_ar); ?> <br>
																	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
																</td>
																
																<td class="text-center">
																	<?php echo e($_item->patient->first_name); ?> <?php echo e($_item->patient->last_name); ?>

																</td>
																<td class="text-center">
																	<?php echo e($_item->date); ?>

																</td>
																<td class="text-center">
																	<?php echo e($_item->time); ?>

																</td>
																<td class="text-center">
																	<div class="actions">
																		
																		<!-- <a href="<?php echo e(route('services.edit',$_item->id)); ?>" class="btn btn-sm bg-success-light" >
																			<button type="button" class="btn btn-outline-success "><i class="la la-edit"></i></button>
																		</a> -->
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

						<!-- doctors_services_tab Tab -->
						<div id="doctors_services_tab" class="tab-pane fade">
						<div class="row">
			        	<div class="col-12">
				            <div class="card">
				            	 <div class="card-body">
				                            <div class="table-responsive">
				                                <table class="table table-striped table-bordered keytable-integration">
				                                    <thead>
														<tr>	
															<th class="text-center">صورة الخدمة</th>
															<th class="text-center">الخمات الرئيسي</th>
															<th class="text-center">الخمات الفرعية</th>
															<th class="text-center">السعر</th>
															<th class="text-center">النوع</th>
															<!-- <th class="text-center">الكمية</th> -->
															<th class="text-center">العمليات</th>
														</tr>
							 						</thead>
													<tbody>
														<?php $__currentLoopData = $doctors_services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
															<tr>

																<td>
																	<a href="profile" class="avatar avatar-sm mr-2">
								                                        <img class="avatar-img" src="<?php echo e(asset('assets_admin/img/categories/'.$_item->category->id)); ?>" alt="Speciality">
								                                    </a>
																</td>
																<td class="text-center">
																	<?php echo e($_item->category->name_ar); ?>

																</td>
																<td class="text-center">
																	<?php echo e($_item->subcategory->title_ar); ?>

																</td>
																
																<td class="text-center">
																	<?php echo e($_item->price); ?>

																</td>
																<td class="text-center">
																	<?php echo e($_item->gender); ?>

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

						<!-- Personal Details Tab -->
						<div class="tab-pane fade show active" id="per_details_tab">
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
														<p class="col-sm-10"><?php echo e($doctors->first_name); ?> <?php echo e($doctors->last_name); ?></p>
													</div>
													
													<div class="row">
														<p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">البريد الالكتروني</p>
														<p class="col-sm-10"><?php echo e($doctors->email); ?></p>
													</div>
													<div class="row">
														<p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">الهاتف</p>
														<p class="col-sm-10" dir="ltr"><?php echo e($doctors->mobile); ?></p>
													</div>
													<div class="row">
														<p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">الدولة</p>
														<p class="col-sm-10" dir="ltr"><?php echo e($doctors->country); ?></p>
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
																<input type="hidden" name="id" value="<?php echo e($doctors->id); ?>">
																<div class="col-12 col-sm-12">
																	<div class="form-group">
																		<label> الاسم الاول</label>
																		<input type="text" name="first_name" class="form-control" value="<?php echo e($doctors->first_name); ?>">
																	</div>
																</div>
																<div class="col-12 col-sm-12">
																	<div class="form-group">
																		<label> الاسم الثاني</label>
																		<input type="text" name="last_name" class="form-control" value="<?php echo e($doctors->last_name); ?>">
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
																			<input type="text" name="mobile" value="<?php echo e($doctors->mobile); ?>" class="form-control">
																		</div>
																	</div>
																	
																	<div class="col-12 col-sm-12">
																		<div class="form-group">
																			<label>الصورة الشخصية</label>
																			<input type="hidden" name="url" value="<?php echo e($doctors->photo); ?>" >
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
						</div>
						

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
	                                					<input type="hidden" name="id" value="<?php echo e($doctors->id); ?>">
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
<?php echo $__env->make('layout.admin_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/beaunqrp/public_html/resources/views/admin/doctors/doctor-profile.blade.php ENDPATH**/ ?>