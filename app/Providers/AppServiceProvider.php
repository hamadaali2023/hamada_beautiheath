<?php

namespace App\Providers;
use App\ContactInfo;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Notification;
use App\Patient;
use App\Doctor;
use App\Vendor;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        $count=0;
        $not=Notification::get(); 
        foreach ($not as $item) {
            if($item->read_at ==''){
                $count +=1;
            }else{
                $count +=0;
            }
        }    
        view()->share('count', $count);
        
        $notifications= Doctor::with(array('unreadnotifications'=>function($query){
                                    $query;
                                }))->get();
        view()->share('notifications', $notifications);


        $patient_notifications= Patient::with(array('unreadnotifications'=>function($query){
                                    $query;
                                }))->get(); 
        view()->share('patient_notifications', $patient_notifications);

        $patient_notifications_doctor = Patient::with(['unreadnotifications' => function ($query) {
            $query->where("data->id", 5);
        }])->get();
        view()->share('patient_notifications_doctor', $patient_notifications_doctor);
        
        $not_doctor_count=0;
        foreach ($patient_notifications_doctor as $item_doctor) {
            foreach ($item_doctor->unreadnotifications as $_doctor){
                if($_doctor->read_at ==''){
                    $not_doctor_count +=1;
                }else{
                    $not_doctor_count +=0;
                }
            }
        } 
        view()->share('not_doctor_count', $not_doctor_count);

        $notifications_vendor =Vendor::with(['unreadnotifications' => function ($query) {
            $query->where("data->id", 5);
        }])->get();
        view()->share('notifications_vendor', $notifications_vendor);
        
        $not_vendor_count=0;
        foreach ($notifications_vendor as $item_vendor) {
            foreach ($item_vendor->unreadnotifications as $_vendor){
                if($_vendor->read_at ==''){
                    $not_vendor_count +=1;
                }else{
                    $not_vendor_count +=0;
                }
            }
        } 
        view()->share('not_vendor_count', $not_vendor_count);


        $cont = ContactInfo::first();
        view()->share('contact', $cont);

        $cont = ContactInfo::first();
        view()->share('contact', $cont);

    }
}


 // @foreach ($notifications as $_item) 
 //                    @foreach ($_item->unreadnotifications as $_items) 
 //                      <a href="{{url('view/notification/'.$_item->id)}}">
 //                        <div class="media">
 //                          <div class="media-left align-self-center">
 //                            @if($_item->photo !=null)
 //                              <img class="avatar-img rounded-circle" alt="User Image" src="{{asset('assets_admin/img/patients/'.$_patients->photo) }}">
 //                            @else                                      
 //                              <img class="avatar-img rounded-circle" alt="User Image" src="{{asset('assets_admin/img/profile_image.png') }}">
 //                            @endif

 //                            <i class="ft-plus-square icon-bg-circle bg-cyan"></i>
 //                          </div>
 //                          <div class="media-body">
 //                            <h6 class="media-heading"> new order {{$_patients->data['name']}}</h6>
 //                            <p class="notification-text font-small-3 text-muted">{{$_patients->data['title']}}:</p>
 //                            <small>
 //                              <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">{{$_patients->data['data']}}</time>
 //                            </small>
 //                          </div>
 //                        </div>
 //                      </a>
 //                    @endforeach
 //                  @endforeach

 // 