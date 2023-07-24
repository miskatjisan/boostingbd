@extends('user.layouts.master')
@section('title','Payment')
@section('content')



<main id="main mt-5 pt-5">


<section class="payment__section" style="margin-top:120px">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="pay__with-container --2">
                            <div class="pay__with-box">
                                <h1 class="payment__title">Pay with rocket</h1>
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <div class="img__bx">
                                            <img src="{{asset('payment/assets/img/rocket.png')}}" alt="Rocket" />
                                        </div>
                                        <h4 class="way__name">Rocket Personal</h4>
                                        <h4 class="account__num">017560637291</h4>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="qr__box">
                                            <p class="qr__title">BOOSTINGBD LIMITED</p>
                                            <div class="qrcode">
                                                <img src="{{asset('payment/assets/img/pay-qrcode.png')}}" alt="qrCode" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.col- -->
                </div> <!-- /.row -->
            </div>
        </section>
    <section class="section home" id="home">
        <div class="container">
            <form action="{{ route('payment.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input type="hidden" name="userID" value="{{Auth::user()->id}}">
                </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                <label for="paynumber">আপনি যেই নম্বর থেকে সেন্ড করেছেন নম্বরটি টাইপ করুন </label>
                <input type="text" id="paynumber" class="form-control" name="paynumber" placeholder="example +8801xxxxxxxx">
                    @error('paynumber')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>
                    </div>
                  

                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                <label for="trackid">ট্রাজেকশন আইডি দিন </label>
                <input type="text" id="trackid" class="form-control" name="trackid" placeholder="ট্রাজেকশন আইডি দিন">
                    @error('totalbudget')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                <label for="screenshort">স্ক্রিনশট দিন (optional)</label>
                <input type="file" id="screenshort" class="form-control" name="screenshort" placeholder="Upload Your Screen Short">
                    @error('screenshort')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>
                    </div>
                </div>
                <button type="submit" class="nav__button mt-4">Request</button>
            </form>
        </div>
    </section>
</main>

@endsection  