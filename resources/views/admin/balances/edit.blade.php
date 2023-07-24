@extends('admin.layouts.master')
@section('title','Balance Edit')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                    <div class="page-header pull-left">
                        <h2 class="pageheader-title">Balance Edit</h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Balance</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('balances.index') }}">Back</a>
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
        <form action="{{ route('balances.update',$balance->id) }}" method="POST" enctype="multipart/form-data">
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
                <input type="text" id="paynumber" class="form-control" name="paynumber" placeholder="example +8801xxxxxxxx" value="$balance->paynumber">
                    @error('paynumber')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>
                    </div>
                  

                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                <label for="trackid">ট্রাজেকশন আইডি দিন </label>
                <input type="text" id="trackid" class="form-control" name="trackid" placeholder="ট্রাজেকশন আইডি দিন" value="$balance->trackid">
                    @error('totalbudget')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                <label for="balance">Balance </label>
                <input type="text" id="balance" class="form-control" name="balance" value="$balance->balance">
                    @error('balance')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                <label for="screenshort">স্ক্রিনশট দিন (optional)</label>
                <input type="file" id="screenshort" class="form-control" name="screenshort" placeholder="Upload Your Screen Short">
                <div style="width:150px;hieght:150px;">
                    <img src="{{asset('assets/img/balance/'.$balance->screenshort)}}" alt="Balance Screenshort">
                </div>
                    @error('screenshort')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>
                    </div>

                <button type="submit" class="btn btn-primary ml-3">Update Balance</button>
            </div>
        </form>
                </div>
            </div>   
        </div>    


</div> 
</div>
</div>
@endsection