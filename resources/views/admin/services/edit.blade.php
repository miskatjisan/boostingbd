@extends('admin.layouts.master')
@section('title','Dashboard')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                    <div class="page-header pull-left">
                        <h2 class="pageheader-title">Services Edit</h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Services</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('services.index') }}">Back</a>
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
        <form action="{{ route('services.update',$service->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input type="hidden" name="userID" value="{{Auth::user()->id}}">
                </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">

                    <label for="boosttype">আপনি কোন ধরণের ক্যাম্পেইন করতে চাচ্ছেন  ?</label>
                <select name="boosttype" id="boosttype" class="form-control">
                <option value="{{$service->boosttype}}">{{$service->boosttype}}</option>
                    <option value="ম্যাসেজ বুস্ট">ম্যাসেজ বুস্ট</option>
                    <option value="পেজ প্রমোট">পেজ প্রমোট</option>
                    <option value="সেল বুস্ট">সেল বুস্ট</option>
                    <option value="ক্যাটালগ বুস্ট">ক্যাটালগ বুস্ট</option>
                    <option value="লিড জেনারেশন বুস্ট">লিড জেনারেশন বুস্ট</option>
                    <option value="ট্রাফিক বুস্ট">ট্রাফিক বুস্ট</option>
                </select>
                        @error('boosttype')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <label for="pagelink">আপনার পেজ লিংক</label>
                <input type="text" id="pagelink" class="form-control" name="pagelink" value="{{$service->pagelink}}">
                    @error('pagelink')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <label for="boostday">কত দিনের জন্যে বুস্ট করতে চাচ্ছেন : </label>
                <select name="boostday" id="boostday" class="form-control">
                <option value="{{$service->boostday}}">{{$service->boostday}}</option>
                <option value="১-৭">১-৭ </option>
                    <option value="১-১০">১-১০</option>
                    <option value="১-১৫">১-১৫</option>
                    <option value="১-৩০">১-৩০</option>
                    <option value="১-৪৫">১-৪৫</option>
                    <option value="১-৬০">১-৬০</option>
                    <option value="১-১২০">১-১২০</option>
                </select>
                    @error('boostday')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <label for="totalbudget">আপনার টোটাল বাজেট </label>
                <input type="text" id="totalbudget" class="form-control" name="totalbudget" placeholder="মিনিমাম ৫$ ম্যাক্সিম ১০০০০$" value="{{$service->totalbudget}}">
                    @error('totalbudget')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <label for="postlink">পোস্ট লিংক</label>
                    <input type="text" id="postlink" class="form-control" name="postlink" placeholder="" value="{{$service->postlink}}">
                    @error('postlink')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <label for="payment">পেমেন্ট :</label>
                <select name="payment" id="payment">
                <option value="{{$service->payment}}">{{$service->payment}}</option>
                    <option value="বুস্ট একটিভ হবার আগেই পেমেন্ট করবো ">বুস্ট একটিভ হবার আগেই পেমেন্ট করবো </option>
                    <option value="প্রতিদিনের পেমেন্ট প্রতিদিন করবো">প্রতিদিনের পেমেন্ট প্রতিদিন করবো</option>
                    <option value="পেমেন্ট করা আছে ">পেমেন্ট করা আছে </option>
                    <option value="এখন পেমেন্ট করবো">এখন পেমেন্ট করবো</option>
                </select>
                    @error('payment')
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