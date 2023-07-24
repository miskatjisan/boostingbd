@extends('admin.layouts.master')
@section('title','Payments Edit')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                    <div class="page-header pull-left">
                        <h2 class="pageheader-title">Payments Edit</h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Payments</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('payments.index') }}">Back</a>
                </div>
                </div>
    
            <div class="ecommerce-widget">
            <div class="card">
                <div class="card-body">

                @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('payments.update',$payment->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input type="hidden" name="useremail" value="{{Auth::user()->email}}">
                </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                <label for="paynumber">আপনি যেই নম্বর থেকে সেন্ড করেছেন নম্বরটি টাইপ করুন </label>
                <input type="text" id="paynumber" class="form-control" name="paynumber" placeholder="example +8801xxxxxxxx" value="$payment->paynumber">
                    @error('paynumber')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>
                    </div>
                  

                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                <label for="trackid">ট্রাজেকশন আইডি দিন </label>
                <input type="text" id="trackid" class="form-control" name="trackid" placeholder="ট্রাজেকশন আইডি দিন" value="$payment->trackid">
                    @error('totalbudget')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                <label for="amount">Amount </label>
                <input type="text" id="amount" class="form-control" name="amount" value="$payment->trackid">
                    @error('amount')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                <label for="screenshort">স্ক্রিনশট দিন (optional)</label>
                <input type="file" id="screenshort" class="form-control" name="screenshort" placeholder="Upload Your Screen Short">
                <div style="width:150px;hieght:150px;">
                    <img src="{{asset('assets/img/payment/'.$payment->screenshort)}}" alt="Payment Screenshort">
                </div>
                    @error('screenshort')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>
                    </div>

                <button type="submit" class="btn btn-primary ml-3">Update</button>
            </div>
        </form>
                </div>
            </div>   
        </div>    


</div> 
</div>
</div>
@endsection