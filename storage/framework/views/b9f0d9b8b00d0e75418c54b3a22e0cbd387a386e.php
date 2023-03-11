
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
                    <span>تسجيل دخول المتجر</span>
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
                    <form class="form-horizontal form-simple"  novalidate method="POST" action="<?php echo e(route('userlogin')); ?>">
                       				 <?php echo csrf_field(); ?>
                      <fieldset class="form-group position-relative has-icon-left mb-0">
                        <input type="text" name="email" class="form-control form-control-lg input-lg" id="user-name" placeholder="Your Username"
                        required>
                        <div class="form-control-position">
                          <i class="ft-user"></i>
                        </div>
                      </fieldset>
                      <fieldset class="form-group position-relative has-icon-left">
                        <input type="password" name="password" class="form-control form-control-lg input-lg" id="user-password"
                        placeholder="Enter Password" required>
                        <div class="form-control-position">
                          <i class="la la-key"></i>
                        </div>
                      </fieldset>
                      <div class="form-group row">
                        <div class="col-md-6 col-12 text-center text-md-left">
                          <fieldset>
                            <!-- <input type="checkbox" id="remember-me" class="chk-remember"> -->
                            <!-- <label for="remember-me"> Remember Me</label> -->
                          </fieldset>
                        </div>
                        <!-- <div class="col-md-6 col-12 text-center text-md-right"><a href="recover-password.html" class="card-link">Forgot Password?</a></div> -->
                      </div>
                      <button type="submit" class="btn btn-info btn-lg btn-block"><i class="ft-unlock"></i> تسجيل الدخول</button>
                    </form>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="">
                    <p>ليس لديك حساب ؟ <a href="<?php echo e(url('create_vendor')); ?>" class="main-color font-weight-bold">تسجيل عضوية جديدة</a>
                    <!-- <p class="float-sm-left text-center m-0"><a href="recover-password.html" class="card-link">Recover password</a></p> -->
                    <!-- <p class="float-sm-right text-center m-0">New to Moden Admin? <a href="register-simple.html" class="card-link">Sign Up</a></p> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.instructor.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/beauty/resources/views/vendors/login.blade.php ENDPATH**/ ?>