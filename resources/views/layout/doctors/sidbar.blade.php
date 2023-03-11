    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <!-- <li class=" nav-item"><a href="#"><i class="la la-bolt"></i><span class="menu-title" data-i18n="nav.flot_charts.main">الرئيسية</span></a>
          <ul class="menu-content">            
            <li  class="{{ Request::is('admin/dashboard') ? 'active' : '' }}"> 
                <a class="menu-item" href="{{url('admin/dashboard')}}" data-i18n="nav.flot_charts.flot_pie_charts">الرئيسية</a>
            </li>
          </ul>
        </li> -->
       
      
        <li class="nav-item {{ Request::is('doctor/dashboard') ? 'active' : '' }}">
            <a href="{{url('doctor/dashboard')}}">
                <i class="la la-envelope"></i><span class="menu-title" data-i18n="">الرئيسية</span>
            </a>
        </li>
        
        <li class="nav-item {{ Request::is('doctor/services') ? 'active' : '' }}">
            <a href="{{url('doctor/services')}}">
                <i class="la la-envelope"></i><span class="menu-title" data-i18n="">الخدمات</span></a>
        </li>
        <li class="nav-item {{ Request::is('doctor/doctor-orders') ? 'active' : '' }}">
            <a href="{{url('doctor/doctor-orders')}}">
                <i class="la la-envelope"></i><span class="menu-title" data-i18n="">الحجوزات</span></a>
        </li>
        <li class="nav-item {{ Request::is('doctor/educations') ? 'active' : '' }}">
            <a href="{{url('doctor/educations')}}">
                <i class="la la-envelope"></i><span class="menu-title" data-i18n="">التعليم</span></a>
        </li>
        <li class="nav-item {{ Request::is('doctor/experiences') ? 'active' : '' }}">
            <a href="{{url('doctor/experiences')}}">
                <i class="la la-envelope"></i><span class="menu-title" data-i18n="">الخبرات</span></a>
        </li>
        <li class="nav-item {{ Request::is('doctor/licenses') ? 'active' : '' }}">
            <a href="{{url('doctor/licenses')}}">
                <i class="la la-envelope"></i><span class="menu-title" data-i18n="">الرخصة المهنية</span></a>
        </li>
        <li class="nav-item {{ Request::is('doctor/insurances') ? 'active' : '' }}">
            <a href="{{url('doctor/insurances')}}">
                <i class="la la-envelope"></i><span class="menu-title" data-i18n="">شركات التأمين</span></a>
        </li>
        <li class="nav-item {{ Request::is('doctor/languages') ? 'active' : '' }}">
            <a href="{{url('doctor/languages')}}">
                <i class="la la-envelope"></i><span class="menu-title" data-i18n=""> اللغات </span></a>
        </li>
        <li class="nav-item {{ Request::is('doctor/work_days') ? 'active' : '' }}">
            <a href="{{url('doctor/work_days')}}">
                <i class="la la-envelope"></i><span class="menu-title" data-i18n=""> مواعيد العمل </span></a>
        </li>
        <li class="nav-item {{ Request::is('banks') ? 'active' : '' }}">
            <a href="{{url('doctor/banks')}}"><i class="la la-envelope"></i><span class="menu-title" data-i18n="">الحسابات البنكية</span></a>
        </li>
        
        <li class="nav-item {{ Request::is('doctor/profile') ? 'active' : '' }}">
            <a href="{{url('doctor/profile')}}">
                <i class="la la-envelope"></i><span class="menu-title" data-i18n="">حسابي</span></a>
        </li>
        <li class="nav-item {{ Request::is('doctor/bankdetails') ? 'active' : '' }}">
            <a href="{{url('doctor/bankdetails')}}">
                <i class="la la-envelope"></i><span class="menu-title" data-i18n="">معلومات البنك</span></a>
        </li>
       <!--  <li class="nav-item {{ Request::is('doctor/doctornotifaction') ? 'active' : '' }}">
            <a href="{{url('doctor/doctornotifaction')}}">
                <i class="la la-envelope"></i><span class="menu-title" data-i18n="">إرسال إشعار لمريض</span></a>
        </li> -->
        <!-- <li class="nav-item {{ Request::is('instructor/stories') ? 'active' : '' }}">
            <a href="{{url('instructor/stories')}}">
                <i class="la la-envelope"></i>
                <span class="menu-title" data-i18n="">الكتب</span>
            </a>
        </li>
 -->

       
        <!--<li class="nav-item {{ Request::is('instructor/straights') ? 'active' : '' }}">-->
        <!--    <a href="{{url('instructor/straights')}}">-->
        <!--        <i class="la la-envelope"></i>-->
        <!--        <span class="menu-title" data-i18n="">الكورسات المباشرة</span>-->
        <!--    </a>-->
        <!--</li>-->
        <!-- <li class="nav-item {{ Request::is('vendors/agreements') ? 'active' : '' }}">
            <a href="{{url('vendors/agreements')}}">
                <i class="la la-envelope"></i>
                <span class="menu-title" data-i18n="">اتفاقية الطبيب</span>
            </a>
        </li> -->

        <!-- <li class="nav-item {{ Request::is('instructor/report/sales') ? 'active' : '' }}">
            <a href="{{url('instructor/report/sales')}}">
                <i class="la la-envelope"></i>
                <span class="menu-title" data-i18n="">تقرير المبيعات</span>
            </a>
        </li>
         <li class="nav-item {{ Request::is('instructor/report/transfers') ? 'active' : '' }}">
            <a href="{{url('instructor/report/transfers')}}">
                <i class="la la-envelope"></i>
                <span class="menu-title" data-i18n="">تقرير التحويلات</span>
            </a>
        </li>
         <li class="nav-item {{ Request::is('instructor/report/statistics') ? 'active' : '' }}">
            <a href="{{url('instructor/report/statistics')}}">
                <i class="la la-envelope"></i>
                <span class="menu-title" data-i18n="">الإحصائيات</span>
            </a>
        </li> -->
        
        


       
        
        
      </ul>
    </div>
  </div>