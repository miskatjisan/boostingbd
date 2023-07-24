@extends('admin.layouts.master')
@section('title','Job Application Edit')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                    <div class="page-header pull-left">
                        <h2 class="pageheader-title">Job Application Edit</h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Job Apply</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('jobapplies.index') }}">Back</a>
                </div>
                </div>
    
            <div class="ecommerce-widget">
            <div class="card">
            <div class="card-header p-3 text-center">
                <h2>Update Job Application</h2>
            </div>
            <div class="card-body">

                @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('jobapplies.update', $jobapply->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                    <div class="row">
                        <div class="col-12">
                            <label class="form-group mb-3" for="name" style="font-weight:bold">Your Name :</label>
                            <input type=" text" class="form-control" name="name" id="name" value="{{$jobapply->name}}" placeholder="Enter Your Name...">
                        </div>
                        <div class="col-12">
                            <label class="form-group mb-3 mt-3" for="" style="font-weight:bold">Your Education :</label>
                            <input type=" text" class="form-control" name="education" value="{{$jobapply->education}}" placeholder="Enter Your Education With GPA/CGPA...">
                        </div>
                        <div class="col-12">
                            <label class="form-group mb-3 mt-3" for="nid" style="font-weight:bold">Your NID Number:</label>
                            <input type="text" class="form-control" id="nid" name="nid" value="{{$jobapply->nid}}"  placeholder="Enter Your NID Number...">
                        </div>
                        <div class="col-12">
                            <label class="form-group mb-3 mt-3" for="resume" style="font-weight:bold">Upload Your Resume With Work Link :</label>
                            <input type="file" class="form-control" id="resume" name="resume">
                            <div class="mt-3">  
                            <img style="width:100px;height:100px" src="{{asset($jobapply->resume)}}" alt="pdf" srcset=""> <span class="ml-5">{{$jobapply->resume}}</span>
                        </div>
                            
                        </div>
                        <div class="col-12">
                            <label class="form-group mb-3 mt-3" for="jobTopic" style="font-weight:bold">Which Topic For You Applied :</label>
                            <select name="jobTopic" class="form-select form-select-md mb-3"
                                aria-label=".form-select-lg example" id="jobTopic">
                            <option value="{{$jobapply->jobTopic}}">{{$jobapply->jobTopic}}</option>
                                <option value="Web Designer">Web Designer</option>
                                <option value="Web Developer">Web Developer</option>
                                <option value="Digital Marketing">Digital Marketing</option>
                                <option value="Graphic Designer">Graphic Designer</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-group mb-3 mt-3" for="joinType" style="font-weight:bold">You Are Interested To Join Immediate :</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="joinType"
                                    value="Yes. I want To Join Immediate" id="joinType">
                                <label class="form-check-label" for="joinType" checked>
                                    Yes. I Want To Join Immediate.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="joinType"
                                    value="No. I Want To Join Later." id="joinType">
                                <label class="form-check-label" for="joinType">
                                    No. I Want To Join Later.
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-group mb-3 mt-3" for="" style="font-weight:bold">Do You Want To Work From Home :</label>
                            <div class="form-check">
                                <input class="" type="radio" name="workType"
                                    value="Yes. I want To Work From Home." id="workType">
                                <label class="form-check-label" for="workType" checked>
                                    Yes. I want To Work From Home.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="workType"
                                    value="No. I Want To Work in Office." id="workType">
                                <label class="form-check-label" for="workType">
                                    No. I Want To Work in Office.
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-secondary px-5 py-2 mt-4">Update Application</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>   
        </div>   
</div> 
</div>
</div>
@endsection