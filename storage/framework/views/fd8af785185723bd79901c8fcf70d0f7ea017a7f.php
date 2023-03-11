<?php $__env->startSection('content'); ?> 

        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 box-shadow-2 p-0">
              <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0">
                  <div class="card-title text-center">
                    <div class="p-1">
                      <p class="text-small mb-2"> <span class="font-weight-bold  text-danger">ملاحظة:</span> سجل عضوية جديدة وأضف مواعيد عملك  </p>
                    </div>
                  </div>
                  <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                    <span>تسجيل مقدم خدمة جديد</span>
                  </h6>
                </div>
                <div class="card-content">
                  <div class="card-body">
                      <?php if(session()->has('message')): ?>
                        <?php echo $__env->make('admin.includes.alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                      <?php endif; ?>
                           <!--  <?php if(Session::has('errorss')): ?>                                
                               <span class="text-danger"><?php echo e(Session::get('errorss')); ?></span>
                            <?php endif; ?>  -->
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
                     
                    <?php if(session()->has('error')): ?>
                         <?php echo $__env->make('admin.includes.alerts.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endif; ?>        
                    <form class="form-horizontal form-simple"  novalidate method="POST" action="<?php echo e(route('doctor-signup')); ?>">
                       				 <?php echo csrf_field(); ?>
                      
                      <div class="form-group">
                            <i class="fas fa-user icon"></i>
                            <input type="text" class="form-control" name="first_name" value="<?php echo e(old('first_name')); ?>" placeholder="الاسم الأول">
                      </div>
                      <div class="form-group">
                            <i class="fas fa-user icon"></i>
                            <input type="text" class="form-control" name="last_name" value="<?php echo e(old('last_name')); ?>" placeholder="الاسم الأخير">
                      </div>
                      <div class="form-group">
                            <i class="fas fa-envelope icon"></i>
                            <input type="email" name="email" value="<?php echo e(old('email')); ?>" class="form-control" placeholder="البريد الالكتروني" <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>>
                           
                        </div>

                        <div class="form-group">
                            <i class="fas fa-lock icon"></i>
                            <input type="password" name="password" value="<?php echo e(old('password')); ?>" class="form-control" placeholder="كلمة المرور">
                        </div>
                        <div class="form-group">
                            <i class="fas fa-lock icon"></i>
                            <input type="password" name="confirm_password" class="form-control" placeholder="إعادة كلمة المرور">
                        </div>

                        <div class="form-group">
                            <i class="fas fa-lock icon"></i>
                            <select name="countryId" class="form-control"  >
                                <option  disabled selected>حدد الدولة</option>  
                                <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                <option value="<?php echo e($_item->id); ?>"><?php echo e($_item->name_ar); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                      <button type="submit" class="btn btn-info btn-lg btn-block"><i class="ft-unlock"></i> تسجيل</button>
                    </form>
                  </div>
                </div>
                <div class="text-center">
                    <p>لديك حساب بالفعل ؟ <a href="<?php echo e(url('doctor-login')); ?>" class="main-color font-weight-bold">تسجيل الدخول</a>
                    </p>
                </div>
                <div class="card-footer">
                  <div class="">
                    <!-- <p class="float-sm-left text-center m-0"><a href="recover-password.html" class="card-link">Recover password</a></p> -->
                    <!-- <p class="float-sm-right text-center m-0">New to Moden Admin? <a href="register-simple.html" class="card-link">Sign Up</a></p> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.doctors.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/beaunqrp/public_html/resources/views/doctors/signup.blade.php ENDPATH**/ ?>