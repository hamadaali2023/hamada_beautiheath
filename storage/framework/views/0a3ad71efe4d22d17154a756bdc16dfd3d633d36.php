<?php $__env->startSection('content'); ?> 

        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 box-shadow-2 p-0">
              <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0">
                  <div class="card-title text-center">
                    <div class="p-1">
                      <!-- <img src="../../../app-assets/images/logo/logo-dark.png" alt="branding logo"> -->
                    </div>
                  </div>
                  <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                    <span>تغيير كلمة مرور التاجر</span>
                  </h6>
                </div>
                <div class="card-content">
                  <div class="card-body">
                      <?php if(session()->has('message')): ?>
                        <?php echo $__env->make('admin.includes.alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                      <?php endif; ?>
                      <?php if(Session::has('errorss')): ?>                                
                        <span class="text-danger"><?php echo e(Session::get('errorss')); ?></span>
                      <?php endif; ?> 
                      <?php if(Session::has('error')): ?>                                
                        <span class="text-danger"><?php echo e(Session::get('error')); ?></span>
                      <?php endif; ?> 
                      <form class="form-horizontal form-simple"  novalidate method="POST" action="<?php echo e(route('doctor.reset-password.post')); ?>">
                				<?php echo csrf_field(); ?>

                        <input type="hidden" name="token" value="<?php echo e($token); ?>">
                        <fieldset class="form-group position-relative has-icon-left mb-0">
                          <input type="text"  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" class="form-control form-control-lg input-lg" id="user-name" placeholder="كلمة المرور الجديدة"
                            required>
                          <div class="form-control-position">
                              <i class="ft-user"></i>
                          </div>
                          <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <strong><?php echo e($message); ?></strong>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </fieldset><br>
                        <fieldset class="form-group position-relative has-icon-left">
                          <input type="password" <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password_confirmation"  class="form-control form-control-lg input-lg" id="user-password"
                          placeholder="إعادة كلمة المرور الجديدة" required>
                          <div class="form-control-position">
                            <i class="la la-key"></i>
                          </div>
                          <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                      <strong><?php echo e($message); ?></strong>
                              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </fieldset>
                        <button type="submit" class="btn btn-info btn-lg btn-block">حفظ التغيرر</button>
                      </form>
                  </div>
                </div>
                <!-- <div class="card-footer">
                  <div class="">
                    <p>ليس لديك حساب ؟ <a href="<?php echo e(url('create_vendor')); ?>" class="main-color font-weight-bold">تسجيل عضوية جديدة</a>
                   
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </section>
      
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.doctors.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/beaunqrp/public_html/resources/views/auth/reset_password_doctor.blade.php ENDPATH**/ ?>