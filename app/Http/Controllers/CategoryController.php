<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Carbon\Carbon;


class CategoryController extends Controller
{
    public function CategoryView(){

        $data = Category::latest()->get();

        return view('admin.category.category',compact('data'));
    }


    public function Categorystore(Request $request){

        $data = array();
        $data['category_name'] = $request->category_name;
        $data['created_at'] = carbon::now();

        Category::insert($data);

        return back();

    }

    public function CategoryEdit($id){
        $data = Category::FindOrFail($id);

        return view('admin.category.Edit',compact('data'));
    }

    public function CategoryUpdate(Request $request){
        $id = $request->oldId;
        $data = array();
        $data['category_name'] = $request->category_name;
        // dd(Category::FindOrFail($id));
        Category::FindOrFail($id)->update($data);
        return redirect()->route('category.view');
    }

    public function CategoryDelete($id){
        Category::FindOrFail($id)->delete();
        return back();
    }


}
