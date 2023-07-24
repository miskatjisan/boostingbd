<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\AdminService;
use Carbon\Carbon;

class AdminServiceController extends Controller
{
    public function ServicesView(){
        $data = AdminService::latest()->get();
        return view('admin.service.service_view',compact('data'));
    }
    public function ServicesAdd(){
        $category = Category::latest()->get();
        return view('admin.service.add',compact('category'));
    }
    public function ServicesDetails(){
        return view('user.service_details');
    }

    public function ServicesStore(Request $request){


        $data = array();
        
        $data['catagory_id'] = $request->catagory_id;
        $data['title'] = $request->title;
        $data['short_discr'] = $request->short_discr;
        $data['discr'] = $request->discr;
        $data['image'] = "image";
        $data['card_title'] = $request->card_title;
        $data['price'] = $request->price;
        $data['feature1'] = $request->feature1;
        $data['feature2'] = $request->feature2;
        $data['feature3'] = $request->feature3;
        $data['feature4'] = $request->feature4;
        $data['feature5'] = $request->feature5;
        $data['feature6'] = $request->feature6;
        $data['feature7'] = $request->feature7;
        $data['feature8'] = $request->feature8;
        $data['created_at'] = carbon::now();

        AdminService::insert($data);

        return redirect()->route('services.view');
    }

    public function ServicesEdit($id){
        $category = Category::latest()->get();
        $data = AdminService::FindOrFail($id);
        return view('admin.service.edit',compact('data','category'));
    }

    public function ServicesUpdate(Request $request){

        $id = $request->id;

        $data = array();
        
        $data['catagory_id'] = $request->catagory_id;
        $data['title'] = $request->title;
        $data['short_discr'] = $request->short_discr;
        $data['discr'] = $request->discr;
        $data['image'] = "image";
        $data['card_title'] = $request->card_title;
        $data['price'] = $request->price;
        $data['feature1'] = $request->feature1;
        $data['feature2'] = $request->feature2;
        $data['feature3'] = $request->feature3;
        $data['feature4'] = $request->feature4;
        $data['feature5'] = $request->feature5;
        $data['feature6'] = $request->feature6;
        $data['feature7'] = $request->feature7;
        $data['feature8'] = $request->feature8;

        AdminService::FindOrFail($id)->update($data);

        return redirect()->route('services.view');

    }

    public function ServicesDelete($id){
        AdminService::FindOrFail($id)->delete();
        return back();
    }


}
