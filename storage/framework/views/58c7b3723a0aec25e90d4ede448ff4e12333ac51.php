    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <!-- <li class=" nav-item"><a href="#"><i class="la la-bolt"></i><span class="menu-title" data-i18n="nav.flot_charts.main">الرئيسية</span></a>
          <ul class="menu-content">            
            <li  class="<?php echo e(Request::is('admin/dashboard') ? 'active' : ''); ?>"> 
                <a class="menu-item" href="<?php echo e(url('admin/dashboard')); ?>" data-i18n="nav.flot_charts.flot_pie_charts">الرئيسية</a>
            </li>
          </ul>
        </li> -->
       
      
        <li class="nav-item <?php echo e(Request::is('doctor/dashboard') ? 'active' : ''); ?>">
            <a href="<?php echo e(url('doctor/dashboard')); ?>">
                <i class="la la-envelope"></i><span class="menu-title" data-i18n="">الرئيسية</span>
            </a>
        </li>
        
        <li class="nav-item <?php echo e(Request::is('doctor/services') ? 'active' : ''); ?>">
            <a href="<?php echo e(url('doctor/services')); ?>">
                <i class="la la-envelope"></i><span class="menu-title" data-i18n="">الخدمات</span></a>
        </li>
        <li class="nav-item <?php echo e(Request::is('doctor/doctor-orders') ? 'active' : ''); ?>">
            <a href="<?php echo e(url('doctor/doctor-orders')); ?>">
                <i class="la la-envelope"></i><span class="menu-title" data-i18n="">الحجوزات</span></a>
        </li>
        <li class="nav-item <?php echo e(Request::is('doctor/educations') ? 'active' : ''); ?>">
            <a href="<?php echo e(url('doctor/educations')); ?>">
                <i class="la la-envelope"></i><span class="menu-title" data-i18n="">التعليم</span></a>
        </li>
        <li class="nav-item <?php echo e(Request::is('doctor/experiences') ? 'active' : ''); ?>">
            <a href="<?php echo e(url('doctor/experiences')); ?>">
                <i class="la la-envelope"></i><span class="menu-title" data-i18n="">الخبرات</span></a>
        </li>
        <li class="nav-item <?php echo e(Request::is('doctor/licenses') ? 'active' : ''); ?>">
            <a href="<?php echo e(url('doctor/licenses')); ?>">
                <i class="la la-envelope"></i><span class="menu-title" data-i18n="">الرخصة المهنية</span></a>
        </li>
        <li class="nav-item <?php echo e(Request::is('doctor/insurances') ? 'active' : ''); ?>">
            <a href="<?php echo e(url('doctor/insurances')); ?>">
                <i class="la la-envelope"></i><span class="menu-title" data-i18n="">شركات التأمين</span></a>
        </li>
        <li class="nav-item <?php echo e(Request::is('doctor/languages') ? 'active' : ''); ?>">
            <a href="<?php echo e(url('doctor/languages')); ?>">
                <i class="la la-envelope"></i><span class="menu-title" data-i18n=""> اللغات </span></a>
        </li>
        <li class="nav-item <?php echo e(Request::is('doctor/work_days') ? 'active' : ''); ?>">
            <a href="<?php echo e(url('doctor/work_days')); ?>">
                <i class="la la-envelope"></i><span class="menu-title" data-i18n=""> مواعيد العمل </span></a>
        </li>
        <li class="nav-item <?php echo e(Request::is('banks') ? 'active' : ''); ?>">
            <a href="<?php echo e(url('doctor/banks')); ?>"><i class="la la-envelope"></i><span class="menu-title" data-i18n="">الحسابات البنكية</span></a>
        </li>
        
        <li class="nav-item <?php echo e(Request::is('doctor/profile') ? 'active' : ''); ?>">
            <a href="<?php echo e(url('doctor/profile')); ?>">
                <i class="la la-envelope"></i><span class="menu-title" data-i18n="">حسابي</span></a>
        </li>
        <li class="nav-item <?php echo e(Request::is('doctor/bankdetails') ? 'active' : ''); ?>">
            <a href="<?php echo e(url('doctor/bankdetails')); ?>">
                <i class="la la-envelope"></i><span class="menu-title" data-i18n="">معلومات البنك</span></a>
        </li>
       <!--  <li class="nav-item <?php echo e(Request::is('doctor/doctornotifaction') ? 'active' : ''); ?>">
            <a href="<?php echo e(url('doctor/doctornotifaction')); ?>">
                <i class="la la-envelope"></i><span class="menu-title" data-i18n="">إرسال إشعار لمريض</span></a>
        </li> -->
        <!-- <li class="nav-item <?php echo e(Request::is('instructor/stories') ? 'active' : ''); ?>">
            <a href="<?php echo e(url('instructor/stories')); ?>">
                <i class="la la-envelope"></i>
                <span class="menu-title" data-i18n="">الكتب</span>
            </a>
        </li>
 -->

       
        <!--<li class="nav-item <?php echo e(Request::is('instructor/straights') ? 'active' : ''); ?>">-->
        <!--    <a href="<?php echo e(url('instructor/straights')); ?>">-->
        <!--        <i class="la la-envelope"></i>-->
        <!--        <span class="menu-title" data-i18n="">الكورسات المباشرة</span>-->
        <!--    </a>-->
        <!--</li>-->
        <!-- <li class="nav-item <?php echo e(Request::is('vendors/agreements') ? 'active' : ''); ?>">
            <a href="<?php echo e(url('vendors/agreements')); ?>">
                <i class="la la-envelope"></i>
                <span class="menu-title" data-i18n="">اتفاقية الطبيب</span>
            </a>
        </li> -->

        <!-- <li class="nav-item <?php echo e(Request::is('instructor/report/sales') ? 'active' : ''); ?>">
            <a href="<?php echo e(url('instructor/report/sales')); ?>">
                <i class="la la-envelope"></i>
                <span class="menu-title" data-i18n="">تقرير المبيعات</span>
            </a>
        </li>
         <li class="nav-item <?php echo e(Request::is('instructor/report/transfers') ? 'active' : ''); ?>">
            <a href="<?php echo e(url('instructor/report/transfers')); ?>">
                <i class="la la-envelope"></i>
                <span class="menu-title" data-i18n="">تقرير التحويلات</span>
            </a>
        </li>
         <li class="nav-item <?php echo e(Request::is('instructor/report/statistics') ? 'active' : ''); ?>">
            <a href="<?php echo e(url('instructor/report/statistics')); ?>">
                <i class="la la-envelope"></i>
                <span class="menu-title" data-i18n="">الإحصائيات</span>
            </a>
        </li> -->
        
        


       
        
        
      </ul>
    </div>
  </div><?php /**PATH /home/beaunqrp/public_html/resources/views/layout/doctors/sidbar.blade.php ENDPATH**/ ?>