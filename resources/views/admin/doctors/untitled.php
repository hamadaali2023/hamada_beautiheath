


@extends('layout.admin_main')
@section('content') 

        <div class="content-header row">
                    <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                      <h3 class="content-header-title mb-0 d-inline-block"> تعديل الملف الشخصي </h3><br>
                      <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('instructor/dashboard')}}">الرئيسية</a></li>
                            </li>
                            
                            <li class="breadcrumb-item active">الملف الشخصي
                            </li>
                          </ol> 
                        </div>
                      </div>
                    </div>
                    <div class="content-header-right col-md-6 col-12">

                    </div>
                    
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    @if (session('errorss'))
                        <div class="alert alert-danger">
                            <ul>                
                                {{ session('errorss') }}
                            </ul>
                        </div>
                    @endif        
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>خطا</strong>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
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
                                    <img class="rounded-circle" alt="User Image" src="{{asset('img/profiles/'.$doctors->photo) }}" width="100px" height="100px">
                                </a>
                            </div>
                            <div class="col ml-md-n2 profile-user-info">
                               <h4 class="user-name mb-0"> {{$patients->email }}</h4>
                                    <h6 class="text-muted"> {{$patients->mobile }}</h6>
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
                                    <a class="nav-link " data-toggle="tab" href="#orders_tab">مواعيدي</a>
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
                                                <p class="col-sm-10">{{$patients->first_name }} {{$patients->last_name }}</p>
                                            </div>                                      
                                            <div class="row">
                                                <p class="col-sm-2 text-muted  mb-0 mb-sm-3">البريد الإلكتروني</p>
                                                <p class="col-sm-10">{{$patients->email }}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-2 text-muted  mb-0 mb-sm-3">رقم الهاتف</p>
                                                <p class="col-sm-10">{{$patients->mobile }}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-2 text-muted  mb-0">تاريخ الميلاد</p>
                                                <p class="col-sm-10">{{$patients->dateOfBirth}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-2 text-muted  mb-0">النوع</p>
                                                    <p class="col-sm-10">{{$patients->gender}}</p>
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
                                            <form action="{{route('patients.changepassword')}}" method="POST" name="le_form"  enctype="multipart/form-data">
                                            @csrf
                                                <input type="hidden" name="patientId" value="{{$patients->id}}">
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
                                                <th class="text-center">الخدمات الرئيسي</th>
                                                <th class="text-center">الخدمات الفرعية</th>
                                                <th class="text-center">اسم المريض</th>
                                                <th class="text-center">التاريخ والوقت</th>
                                                <th class="text-center">حالة الدفع</th>
                                                <th class="text-center">العمليات</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($orders as $_item)
                                            <tr>
                                            <!-- <td>
                                                    <a href="profile" class="avatar avatar-sm mr-2">
                                                        <img class="avatar-img" src="{{asset('img/product/'.$_item->cover_img) }}" alt="Speciality">
                                                    </a>
                                                </td> -->
                                                <td class="text-center">
                                                    {{$_item->category->name_ar}}
                                                </td>
                                                <td class="text-center">
                                                    @foreach ($_item->subcategory as $_sub)
                                                        -{{$_sub->title_ar}} <br>
                                                    @endforeach
                                                </td>                                                       
                                                <td class="text-center">
                                                    {{$_item->patient->first_name}} {{$_item->patient->last_name}}
                                                </td>
                                                <td class="text-center">
                                                    {{$_item->date}}
                                                </td>
                                                <td class="text-center">
                                                    {{$_item->time}}
                                                </td>
                                                <td class="text-center">
                                                    <div class="actions">                                           
                                                        <!-- <a href="{{route('services.edit',$_item->id)}}" class="btn btn-sm bg-success-light" >
                                                            <button type="button" class="btn btn-outline-success "><i class="la la-edit"></i></button>
                                                        </a> -->
                                                    <a  data-toggle="modal" data-catid="{{ $_item->id }}" data-target="#delete" class="delete-course">
                                                        <button type="button" class=" btn btn-outline-warning"><i class="la la-trash-o"></i></button>
                                                    </a>
                                                    </div>
                                                </td>
                                            </tr>
                                                    
                                        @endforeach                 
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
    </div>
</div>
    <script src="http://code.jquery.com/jquery-3.4.1.js"></script>


@endsection