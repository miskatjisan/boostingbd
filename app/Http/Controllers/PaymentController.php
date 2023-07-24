<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Balance;
use Auth;

class PaymentController extends Controller
{

    public function bkash(){
        return view('user.payments.bkash');
    }
    public function rocket(){
        return view('user.payments.rocket');
    }
    public function nogod(){
        return view('user.payments.nogod');
    }
    public function surecash(){
        return view('user.payments.surecash');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = Payment::orderBy('id','desc')->paginate(5);
        return view('admin.payments.index', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Create()
    {
       
        return view('user.payment');
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

        $data =Auth::user();
        $payment = Payment::where('useremail', $data->email)->where('status', 0 )->sum('amount');
        $balance = Balance::where('useremail', $data->email)->where('status', 0 )->sum('amount');
        if( $payment > $balance ){
            return redirect()->back()->with('error','Not enough money . Please recharge your account.');
        }

        $payment = new Payment;
        $payment->useremail = $request->input('useremail') ;
        $payment->paynumber = $request->input('paynumber');
        $payment->trackid = $request->input('trackid');
        $payment->amount = $request->input('amount');

        if ($image = $request->file('screenshort')) {
            $destinationPath = 'assets/img/payment/';
            $screenshort = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $screenshort);
            $input['screenshort'] = "$screenshort";
        }

        $save = $payment->save();
    if ($save){
            return redirect()->route('home')->with('success','আপনার অনুরোধটি পেন্ডিং আছে আপনার ওয়েবসাইটের আপডেট চলে যাবে শিগ্রই ');
    }
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        return view('admin.payments.show',compact('payment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        return view('admin.payments.edit',compact('payment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaymentRequest  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaymentRequest $request, Payment $payment)
    {
        $request->validate([
            'paynumber' => 'required',
            'trackid' => 'required',
            'screenshort' => 'required|screenshort|mimes:jpeg,png,jpg,gif,svg|max:3000',
        ]);
        if ($image = $request->file('screenshort')) {
            $destinationPath = 'assets/img/payment/';
            $screenshort = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $screenshort);
            $input['screenshort'] = "$screenshort";
        }else{
            unset($input['screenshort']);
        }
       
        $payment->fill($request->post())->save();
        return redirect()->route('payments.index')->with('success','Payment Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        $payment->delete();
        return redirect()->route('payments.index')->with('success','Payment has been deleted successfully');
    }
}
