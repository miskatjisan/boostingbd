<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\AdminService;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::orderBy('id','desc')->paginate(5);
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = AdminService::latest()->get();
        return view('user.service',compact('data'));
    }

    public function ServiceDetails($id){
        $data = AdminService::FindOrFail($id);
        return view('user.service_details',compact('data'));
    }

    public function BuyService($id){
        $data = AdminService::FindOrFail($id);
        return view('user.buy_service',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'pagelink' => 'required',
            'boostday' => 'required',
            'totalbudget' => 'required',
            'postlink' => 'required',
            'payment'=> 'required',
        ]);

$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

$pin = mt_rand(1000000, 9999999)
    . mt_rand(1000000, 9999999)
    . $characters[rand(0, strlen($characters) - 1)];

$randomId = str_shuffle($pin);


        $service = new Service;
            $service->userID = $request->input('userID') ;
            $service->boosttype = $request->input('boosttype');
            $service->pagelink = $request->input('pagelink');
            $service->boostday = $request->input('boostday');
            $service->totalbudget = $request->input('totalbudget');
            $service->postlink = $request->input('postlink');
            $service->payment = $request->input('payment');
            $service->boostTypeId = $randomId;
            $save = $service->save();
        if ($save){
                return redirect()->route('payment.create')->with('success','আপনার অনুরোধটি পেন্ডিং আছে আপনার ওয়েবসাইটের আপডেট চলে যাবে শিগ্রই ');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('admin.services.show',compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit',compact('service'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'boosttype' => 'required',
            'pagelink' => 'required',
            'boostday' => 'required',
            'totalbudget' => 'required',
            'postlink' => 'required',
            'payment'=> 'required',
        ]);

        $service->fill($request->post())->save();
        return redirect()->route('services.index')->with('success','Services Has Been updated successfully');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('services.index')->with('success','Service has been deleted successfully');
    }
}