    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <!-- <li class=" nav-item"><a href="#"><i class="la la-bolt"></i><span class="menu-title" data-i18n="nav.flot_charts.main">الرئيسية</span></a>
          <ul class="menu-content">            
            <li  class="<?php echo e(Request::is('admin/dashboard') ? 'active' : ''); ?>"> 
                <a class="menu-item" href="<?php echo e(url('admin/dashboard')); ?>" data-i18n="nav.flot_charts.flot_pie_charts">الرئيسية</a>
            </li>
          </ul>
        </li> -->
       
      
        <li class="nav-item <?php echo e(Request::is('vendors/dashboard') ? 'active' : ''); ?>">
            <a href="<?php echo e(url('vendors/dashboard')); ?>">
                <i class="la la-envelope"></i><span class="menu-title" data-i18n="">الرئيسية</span></a>
        </li>
        
        <li class="nav-item <?php echo e(Request::is('vendors/products') ? 'active' : ''); ?>">
            <a href="<?php echo e(url('vendors/products')); ?>">
                <i class="la la-envelope"></i><span class="menu-title" data-i18n="">المنتجات</span></a>
        </li>
        <li class="nav-item <?php echo e(Request::is('vendors/vendor-orders') ? 'active' : ''); ?>">
            <a href="<?php echo e(url('vendors/vendor-orders')); ?>">
                <i class="la la-envelope"></i><span class="menu-title" data-i18n="">الطلبات</span></a>
        </li>
        <li class="nav-item <?php echo e(Request::is('vendors/profile') ? 'active' : ''); ?>">
            <a href="<?php echo e(url('vendors/profile')); ?>">
                <i class="la la-envelope"></i><span class="menu-title" data-i18n="">حسابي</span></a>
        </li>
        <li class="nav-item <?php echo e(Request::is('vendors/banks') ? 'active' : ''); ?>">
            <a href="<?php echo e(url('vendors/banks')); ?>"><i class="la la-envelope"></i><span class="menu-title" data-i18n="">الحسابات البنكية</span></a>
        </li>
        
        <!--<li class="nav-item <?php echo e(Request::is('vendors/bankdetails') ? 'active' : ''); ?>">-->
        <!--    <a href="<?php echo e(url('vendors/bankdetails')); ?>">-->
        <!--        <i class="la la-envelope"></i><span class="menu-title" data-i18n="">معلومات البنك</span></a>-->
        <!--</li>-->
        <!--<li class="nav-item <?php echo e(Request::is('vendors/instructornotifaction') ? 'active' : ''); ?>">-->
        <!--    <a href="<?php echo e(url('vendors/instructornotifaction')); ?>">-->
        <!--        <i class="la la-envelope"></i><span class="menu-title" data-i18n="">إرسال إشعار للطالب</span></a>-->
        <!--</li>-->
        <!-- <li class="nav-item <?php echo e(Request::is('instructor/stories') ? 'active' : ''); ?>">
            <a href="<?php echo e(url('instructor/stories')); ?>">
                <i class="la la-envelope"></i>
                <span class="menu-title" data-i18n="">الكتب</span>
            </a>
        </li>
 -->

        <!--<li class=" nav-item"><a href="#"><i class="la la-bolt"></i><span class="menu-title" data-i18n="nav.flot_charts.main">الكورسات</span></a>-->
        <!--  <ul class="menu-content">-->
        <!--    <li  class="<?php echo e(Request::is('vendors/courses') ? 'active' : ''); ?>"> -->
        <!--        <a class="menu-item" href="<?php echo e(url('vendors/courses')); ?>" data-i18n="nav.flot_charts.flot_line_charts">الكورسات</a>-->
        <!--    </li>-->
        <!--    <li  class="<?php echo e(Request::is('vendors/chapters') ? 'active' : ''); ?>"> -->
        <!--        <a class="menu-item" href="<?php echo e(url('vendors/chapters')); ?>" data-i18n="nav.flot_charts.flot_line_charts">الشباتر</a>-->
        <!--    </li>-->
        <!--    <li  class="<?php echo e(Request::is('vendors/videos') ? 'active' : ''); ?>"> -->
        <!--        <a class="menu-item" href="<?php echo e(url('vendors/videos')); ?>" data-i18n="nav.flot_charts.flot_bar_charts">الفيديوهات</a>-->
        <!--    </li>-->
            
        <!--  </ul>-->
        <!--</li>-->
        <!--<li class=" nav-item"><a href="#"><i class="la la-bolt"></i><span class="menu-title" data-i18n="nav.flot_charts.main">الكورسات المباشرة</span></a>-->
        <!--  <ul class="menu-content">-->
        <!--    <li  class="<?php echo e(Request::is('vendors/straights') ? 'active' : ''); ?>"> -->
        <!--        <a class="menu-item" href="<?php echo e(url('vendors/straights')); ?>" data-i18n="nav.flot_charts.flot_line_charts">الكورسات المباشرة</a>-->
        <!--    </li>-->
        <!--    <li  class="<?php echo e(Request::is('vendors/sessions/create') ? 'active' : ''); ?>"> -->
        <!--        <a class="menu-item" href="<?php echo e(url('vendors/sessions/create')); ?>" data-i18n="nav.flot_charts.flot_line_charts">إضافة جلسة </a>-->
        <!--    </li>-->
            
            
        <!--  </ul>-->
        <!--</li>-->
        <!--<li class="nav-item <?php echo e(Request::is('instructor/straights') ? 'active' : ''); ?>">-->
        <!--    <a href="<?php echo e(url('instructor/straights')); ?>">-->
        <!--        <i class="la la-envelope"></i>-->
        <!--        <span class="menu-title" data-i18n="">الكورسات المباشرة</span>-->
        <!--    </a>-->
        <!--</li>-->
        <!--<li class="nav-item <?php echo e(Request::is('vendors/agreements') ? 'active' : ''); ?>">-->
        <!--    <a href="<?php echo e(url('vendors/agreements')); ?>">-->
        <!--        <i class="la la-envelope"></i>-->
        <!--        <span class="menu-title" data-i18n="">اتفاقية المدرب</span>-->
        <!--    </a>-->
        <!--</li>-->

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
  </div><?php /**PATH /home/findfamily/public_html/beauty/resources/views/layout/instructor/sidbar.blade.php ENDPATH**/ ?>