<?php

namespace App\Http\Controllers;
use App\Models\Service;


use Illuminate\Http\Request;

class BoostTypeController extends Controller
{
    public function BoostLeadGenerationView(){
        $data = Service::where('boosttype','লিড জেনারেশন বুস্ট')->latest()->get();
        return view('admin.boostType.boostleadgeneration.boostleadgeneration_view',compact('data'));
    }
    public function CatalogBoostView(){
        $data = Service::where('boosttype','ক্যাটালগ বুস্ট')->latest()->get();

        return view('admin.boostType.catalogboost.catalogboost_view',compact('data'));
    }
    public function CellBoostView(){
        $data = Service::where('boosttype','সেল বুস্ট')->latest()->get();

        return view('admin.boostType.CellBoost.cellboost_view',compact('data'));
    }
    public function MessageBoostView(){
        $data = Service::where('boosttype', 'ম্যাসেজ বুস্ট')->latest()->get();

        return view('admin.boostType.MessageBoost.MessageBoost_view',compact('data'));
    }
    public function PromotePageView(){
        $data = Service::where('boosttype','পেজ প্রমোট')->latest()->get();

        return view('admin.boostType.promotePage.promotePage_view',compact('data'));
    }
    public function TrafficBoostView(){
        $data = Service::where('boosttype','ট্রাফিক বুস্ট')->latest()->get();
        return view('admin.boostType.trafficBoost.trafficBoost_view',compact('data'));
    }

    
 

 
 


}
