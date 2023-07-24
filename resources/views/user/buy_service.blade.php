@extends('user.layouts.master')
@section('title','Boostingbd Limited Boosting Your Business')
@section('content')

@php
    $aaa = $data['category']['id'];

    $category = DB::table('categories')->where('id',$aaa)->first();

@endphp



<main id="main">
    <section class="section home" id="home">
        <div class="container">
            <form action="{{ route('service.store') }}" method="POST">
            @csrf
            <input type="hidden" name="boosttype" value="{{$category->category_name}}" class="form-control">

            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input type="hidden" name="userID" value="{{Auth::user()->id}}">
                </div>
                </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <label >আপনি কোন ধরণের ক্যাম্পেইন করতে চাচ্ছেন  ?</label>
                <input type="text"  value="{{$category->category_name}}" disabled class="form-control">
               
                @error('boosttype')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                <label for="pagelink">আপনার পেজ লিংক</label>
                <input type="text" id="pagelink" class="form-control" name="pagelink">
                    @error('pagelink')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                <label for="boostday">কত দিনের জন্যে বুস্ট করতে চাচ্ছেন : </label>
                <select class="form-control" name="boostday" id="boostday">
                <option>একটি নির্বাচন করুন</option>
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
                <input type="text" id="totalbudget" class="form-control" name="totalbudget" placeholder="মিনিমাম ৫$ ম্যাক্সিম ১০০০০$">
                    @error('totalbudget')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                <label for="postlink">পোস্ট লিংক</label>
                <input type="text" id="postlink" class="form-control" name="postlink" placeholder="">
                    @error('postlink')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <label for="payment">পেমেন্ট :</label>
                <select name="payment" id="payment" class="form-control">
                <option>একটি নির্বাচন করুন</option>
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
                </div>
                <button type="submit" class="nav__button">Request</button>
                
            </form>
        </div>
    </section>
</main>

@endsection