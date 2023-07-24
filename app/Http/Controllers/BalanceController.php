<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Balance;
use Illuminate\Http\Request;
use Auth;


class BalanceController extends Controller
{
    public function index()
    {
        $balances = Balance::orderBy('id','desc')->paginate(5);
        return view('admin.balances.index', compact('balances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Create()
    {
        $data =Auth::user();
        $payment = Payment::where('useremail', $data->email)->where('status', 0 )->sum('amount');
        $balance = Balance::where('useremail', $data->email)->where('status', 0 )->sum('amount');
        
       $UserTotalBalance = $balance - $payment;
       
        return view('user.profile.settings', compact('data','UserTotalBalance'));
        
        if($UserTotalBalance = ''){
            $UserTotalBalance = 0;
            }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePaymentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function Store(Request $request)
    {
        $request->validate([
            'paynumber' => 'required',
            'trackid' => 'required',
            'amount' => 'required',
            
        ]);
        $this->validate($request, [
            'screenshort' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $balance = new Balance;
        $balance->useremail = $request->input('useremail') ;
        $balance->paynumber = $request->input('paynumber');
        $balance->trackid = $request->input('trackid');
        $balance->amount = $request->input('amount');

        if ($image = $request->file('screenshort')) {
            $destinationPath = 'assets/img/balance/';
            $screenshort = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $screenshort);
            $input['screenshort'] = "$screenshort";
        }

        $save = $balance->save();
    if ($save){
            return redirect()->back()->with('success','আপনার অনুরোধটি পেন্ডিং আছে আপনার ওয়েবসাইটের আপডেট চলে যাবে শিগ্রই ');
    }
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $balance
     * @return \Illuminate\Http\Response
     */
    public function show(Balance $balance)
    {
        return view('admin.balances.show',compact('balance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $balance
     * @return \Illuminate\Http\Response
     */
    public function edit(Balance $balance)
    {
        return view('admin.balances.edit',compact('balance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaymentRequest  $request
     * @param  \App\Models\Payment  $balance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Balance $balance)
    {
        $request->validate([
            'paynumber' => 'required',
            'trackid' => 'required',
            'screenshort' => 'required|screenshort|mimes:jpeg,png,jpg,gif,svg|max:3000',
        ]);
        if ($image = $request->file('screenshort')) {
            $destinationPath = 'assets/img/Balance/';
            $screenshort = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $screenshort);
            $input['screenshort'] = "$screenshort";
        }else{
            unset($input['screenshort']);
        }
       
        $balance->fill($request->post())->save();
        return redirect()->route('balances.index')->with('success','Balance Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $balance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Balance $balance)
    {
        $balance->delete();
        return redirect()->route('payments.index')->with('success','Payment has been deleted successfully');
    }

    public function changeStatus(Request $request)
    {
        $balance = Balance::find($request->balance_id);
        $balance->status = $request->status;
        $balance->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }
}
