<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<head>

      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
  <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
  <meta name="author" content="PIXINVENT">
  <title>Crypto Dashboard - Modern Admin - Clean Bootstrap 4 Dashboard HTML Template + Bitcoin
    Dashboard
  </title>
  <link rel="apple-touch-icon" href="admin/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="admin//images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <link rel="stylesheet" href="{{asset('admin/css-rtl/vendors.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css-rtl/app.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css-rtl/custom-rtl.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css-rtl/core/menu/menu-types/vertical-menu-modern.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css-rtl/core/colors/palette-gradient.css')}}">
  <link rel="stylesheet" href="{{asset('admin/vendors/css/cryptocoins/cryptocoins.css')}}">
  <link rel="stylesheet" href="{{asset('admin/assets/css/style-rtl.css')}}">
  
@if(Route::is(['admin-login','register','forgot-password','lock-screen','error-404','error-500']))
  <link rel="stylesheet" href="{{asset('admin/vendors/css/forms/icheck/icheck.css')}}">
  <link rel="stylesheet" href="{{asset('admin/vendors/css/forms/icheck/custom.css')}}">
 
  <link rel="stylesheet" href="{{asset('admin/css-rtl/pages/login-register.css')}}">
@endif

  <link rel="stylesheet" href="{{asset('admin/vendors/css/tables/datatable/datatables.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/vendors/css/tables/extensions/autoFill.dataTables.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/vendors/css/tables/extensions/colReorder.dataTables.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/vendors/css/tables/extensions/fixedColumns.dataTables.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/vendors/css/tables/datatable/select.dataTables.min.css')}}">

  <script src="{{asset('js/app.js')}}"></script>

  <link rel="stylesheet" href="{{asset('admin/vendors/css/forms/selects/selectivity-full.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css-rtl/plugins/forms/selectivity/selectivity.css')}}">
  

<!-- for dropzone file  -->
  <!-- <link rel="stylesheet" type="text/css" href="{{asset('admin/css-rtl/plugins/file-uploaders/dropzone.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('admin/vendors/css/ui/prism.min.css')}}/">
  <link rel="stylesheet" type="text/css" href="{{asset('admin/vendors/css/file-uploaders/dropzone.min.css')}}"> -->
<!-- for dropzone file  -->

<link rel="stylesheet" href="{{asset('admin/vendors/css/forms/selects/select2.min.css')}}">
 



<script src="{{asset('js/app.js')}}"></script>





</head>

	<!-- nav -->


	<body class="vertical-layout vertical-menu-modern 1-column   menu-expanded blank-page blank-page" data-open="click" 
		data-menu="vertical-menu-modern" data-col="1-column">	
	<!-- nav -->
	


  	<!-- content -->
 	<div class="app-content content">
    	<div class="content-wrapper">
      		<div class="content-header row">
      		</div>
      		<div class="content-body">
      			

<div id="" class="row text-center" style="margin-top:200px">
    <div class=" col-md-2">
    </div>    
    <div class="col-md-4" >    
        <div class="card crypto-card-3 pull-up">
              <div class="card-content">
                <div class="card-body pb-0">
                  <div class="row">
                    <div class=" pl-2">
                        <a href="{{url('doctor-login')}}">
                              <h3>تسجيل دخول مقدم الخدمة</h3>
                            <br>
                        </a>
                    </div>
                   
                  </div>
                </div>
             
              </div>
        </div>
    </div>
     <div class="col-md-4" >    
        <div class="card crypto-card-3 pull-up">
              <div class="card-content">
                <div class="card-body pb-0">
                  <div class="row">
                    <div class=" pl-2">
                        <a href="{{url('user-login')}}">
                              <h3>تسجيل دخول التاجر</h3>
                            <br>
                        </a>
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

    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
      <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2018 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent"
        target="_blank">PIXINVENT </a>, All rights reserved. </span>
      <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span>
    </p>
  </footer>

   @if(Route::is(['admin.dashboard']))
  <script src="{{asset('admin/js/scripts/pages/dashboard-crypto.js')}}" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->
 @endif

@if(Route::is(['admin-login','register']))
  <script src="{{asset('admin/vendors/js/forms/icheck/icheck.min.js')}}"></script>
  <script src="{{asset('admin/vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
  <script src="{{asset('admin/js/scripts/forms/form-login-register.js')}}"></script>
@endif


  <script src="{{asset('admin/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('admin/vendors/js/tables/datatable/datatables.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('admin/vendors/js/tables/datatable/dataTables.autoFill.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('admin/vendors/js/tables/datatable/dataTables.colReorder.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('admin/vendors/js/tables/datatable/dataTables.fixedColumns.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('admin/vendors/js/tables/datatable/dataTables.select.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('admin/js/core/app-menu.js')}}" type="text/javascript"></script>
  <script src="{{asset('admin/js/core/app.js')}}" type="text/javascript"></script>
  <script src="{{asset('admin/js/scripts/customizer.js')}}" type="text/javascript"></script>

  <script src="{{asset('admin/js/scripts/tables/datatables-extensions/datatable-autofill.js')}}" type="text/javascript"></script>


    <script src="{{asset('admin/vendors/js/forms/select/selectivity-full.min.js')}}" type="text/javascript"></script>
   <script src="{{asset('admin/js/scripts/forms/select/form-selectivity.js')}}" type="text/javascript"></script>



<!-- for dropzone file  -->
  <!-- <script src="{{asset('admin/vendors/js/extensions/dropzone.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('admin/vendors/js/ui/prism.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('admin/js/scripts/extensions/dropzone.js')}}" type="text/javascript"></script> -->
<!-- for dropzone file  -->
 <script src="{{asset('admin/vendors/js/forms/select/select2.full.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('admin/js/scripts/forms/select/form-select2.js')}}" type="text/javascript"></script>



</body>
</html>



























