<?php

namespace App\Http\Controllers\Vendors;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
// use Gate;
use App\Product;
use App\ProductImage;
use App\Size;
use App\Color;		
use Auth;
class ProductController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        // $edit = Product::findOrFail(33);
        // $ggg=json_decode($edit->size);
        // dd($ggg);

        $products=Product::all();
        foreach ($products as $item) {
            // $item->images= ProductImage::where('productId',$item->id)->get();
        }
        
        $categories=Category::all();
        return view('vendors.products.all',compact('products','categories'));
    }
    public function create()
    {
        
        $categories=Category::all();
        return view('vendors.products.create',compact('categories'));
    }
    

    public function store(Request $request)
    {
         $userid = Auth::guard('vendors')->user();
        $add = new Product;
        $file_extension = $request -> file('image') -> getClientOriginalExtension();
        $file_name = time().rand(1,100).'.'.$file_extension;
        $path = 'img/product/';
        $request-> file('image') ->move($path,$file_name);
        $add->vendorId    = $userid->id;
        $add->name_ar    = $request->name_ar;
        $add->name_en    = $request->name_ar;

        $add->description_ar    = $request->description_ar;
        $add->description_en    = $request->description_ar;
        $add->price    = $request->price;
        $add->quantity    = $request->quantity;
        $add->cover_img    = $file_name;
        $add->save();
        return redirect()->route('products.index')->with("message", 'تم الإضافة بنجاح');
    }

    public function edit(Product $product)
    {
        $categories=Category::all();
        return view('vendors.products.edit',compact('product','categories'));
    }

    public function update(Request $request,Product $product)
    {   
        $edit = Product::findOrFail($product->id);
        if($file=$request->file('image'))
        {
            $img_extension = $request -> file('image') -> getClientOriginalExtension();
            $img_name = time().'.'.$img_extension;
            $img_path = 'img/product/';
            $request-> file('image') ->move($img_path,$img_name);
            $edit->cover_img  =$img_name;
        }else{
            $edit->cover_img  = $edit->cover_img; 
        }
        // $edit->categoryId    = $request->categoryId;
        $edit->name_ar    = $request->name_ar;
        $edit->name_en    = $request->name_ar;

        $edit->description_ar    = $request->description_ar;
        $edit->description_en    = $request->description_ar;

        $edit->price    = $request->price;
        $edit->quantity    = $request->quantity;
        $edit->save();
    	
        return back()->with("message", 'تم التعديل بنجاح'); 
    }

    public function destroy(Request $request )
    {
        $delete = Product::findOrFail($request->id);
        $delete->delete();
        // dd($request->id);
        return back()->with("message",'تم الحذف بنجاح'); 
    } 

    

    public function productSizeUpdate(Request $request)
    {   
        $edit = Size::findOrFail($request->id);
       
        $edit->title    = $request->title;
        $edit->description  = $request->description;
        
        $edit->price    = $request->price;
        $edit->quantity    = $request->quantity;
        $edit->slug    = $request->title;
        $edit->save();

        if($filess = $request->file('imagee'))
        {
            $length_file = count($filess);
            if($length_file > 0)
            {
                for($i=0; $i<$length_file; $i++)
                {
                    $file_extension = $filess[$i] -> getClientOriginalExtension();
                    $file_name = time().rand(1,100).'.'.$file_extension;
                    $filess[$i]->move('assets_admin/products/', $file_name);   

                    $add_image= new Image;
                    $add_image->productId    =  $edit->id;
                    $add_image->url  = $file_name;             
                    // $add_image->title    =  $request->title[$i];       
                    $add_image->save();
                }
            }
        }else{

        }
        return back()->with("message", 'تم التعديل بنجاح'); 
    }

}
