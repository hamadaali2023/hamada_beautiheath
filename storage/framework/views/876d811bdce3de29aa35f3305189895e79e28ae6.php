<?php $__env->startSection('content'); ?> 
<div class="content-header row">
                    <div class="content-header-left col-md-١٢ col-12 mb-2 breadcrumb-new">
                      <h3 class="content-header-title mb-0 d-inline-block">الإشعارات</h3><br>
                      <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="<?php echo e(url('admin/dashboard')); ?>">الرئيسية</a>
                            </li>
                            
                            <li class="breadcrumb-item active">الإشعارات
                            </li>
                          </ol> 
                        </div>
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
                  <h4 class="card-title">إرسال إشعار </h4>
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
                        <form class="parsley-style-1" id="selectForm2" autocomplete="off" name="selectForm2" 
                                 action="<?php echo e(route('vendor-notifaction')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="row form-row">
                                <div class="col-md-6" >
                                    <div class="form-group">
                                        <label>تحديد متجر او اكثر </label>
                                        <select name="vendorId[]" class="select2 form-control" multiple="multiple">
                                            <option disabled >حدد متجر </option>
                                            <?php $__currentLoopData = $vendors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($_item->id); ?>">
                                                    <?php echo e($_item->name); ?> 
                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="parsley-input col-md-6" >
                                    <label>رسالة التنبية </label>
                                    <input class="form-control form-control-sm mg-b-20" name="message"  required="" type="text">
                                </div>
                            </div> 
                            <br>
                            <div class="col-12 col-sm-3"><button type="submit" class="btn btn-primary btn-block">ارسال </button></div>  
                        </form>
                    </div>

                    <div class="card-body">
                         <form class="parsley-style-1" id="selectForm2" autocomplete="off" name="selectForm2" 
                                 action="<?php echo e(route('vendor-notifaction')); ?>" method="POST">
                                <?php echo csrf_field(); ?>                          
                            <div class="row form-row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label">تحديد متجر او مجموعه او الكل </label>
                                        <select name="vendorId[]" multiple id="select-beast" class="form-control  nice-select  custom-select">
                                         <?php $__currentLoopData = $vendors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <option value="<?php echo e($_item->id); ?>">
                                             <?php echo e($_item->name); ?>  
                                          </option>
                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="parsley-input col-md-6" >
                                    <label>رسالة التنبية <span class="tx-danger">*</span></label>
                                    <input class="form-control form-control-sm mg-b-20" name="message" required="" type="text">
                                </div>
                            </div>
                            <div class="col-12 col-sm-3">
                                <button type="submit" class="btn btn-primary btn-block">ارسال </button>
                            </div>
                            
                        </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
</section>
<!-- Page Wrapper -->




<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.admin_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/findfamily/public_html/beauty/resources/views/admin/vendors/notifaction.blade.php ENDPATH**/ ?>