@extends('admin.layouts.master')
@section('title','Contacts Edit')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                    <div class="page-header pull-left">
                        <h2 class="pageheader-title">Contact Edit</h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Contact</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('contacts.index') }}">Back</a>
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
        <form action="{{ route('contacts.update',$contact->id) }}" method="POST">
            @csrf
            @method('PUT')
                        <div class="input__group">
                                <input type="hidden" name="userID" value="{{Auth::user()->id}}">
                                    <input type="text" name="name" id="name" class="input form-control" value="{{$contact->name}}" placeholder="আপনার নাম " autocomplete="off" />
                                    
                                </div> <!-- /.input__group -->

                               
                                <div class="input__group">
                                    <input type="number" name="phone" id="phone" class="input form-control" placeholder="ফোন নম্বর" autocomplete="off" value="{{$contact->phone}}" />
                                    <input type="email" name="email" id="email" class="input form-control" placeholder="ইমেইল " autocomplete="off" value="{{$contact->email}}"/>
                                </div> <!-- /.input__group -->

                                <div class="input__single">
                                    <input type="text" name="worktype" id="worktype" class="input form-control" placeholder="কাজের ধরণ" autocomplete="off" value="{{$contact->worktype}}"/>
                                </div> <!-- /.input__single -->

                                <div class="input__single">
                                    <input type="number" name="budget form-control" id="budget" class="input" placeholder="বাজেট" autocomplete="off" value="{{$contact->budget}}"/>
                                </div> <!-- /.input__single -->
                                
                                <div class="input__single">
                                    <textarea name="details" id="details" cols="30" rows="3" class="input form-control" placeholder="বিস্তারিত জানান">{{$contact->details}}</textarea>
                                </div> <!-- /.input__single -->
                <button type="submit" class="btn btn-primary ml-3">Update</button>
        </form>
                </div>
            </div>   
        </div>    


</div> 
</div>
</div>
@endsection