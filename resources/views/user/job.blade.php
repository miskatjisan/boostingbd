@extends('user.layouts.master')
@section('title','Apply For Job')
@section('content')
<main id="main">
    <div class="container" style="margin-top: 135px">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="card">
            <div class="card-header p-3 text-center">
                <h2>Job Apply Form</h2>
             <img src="{{asset('assets/img/jobs/20221210182750.pdf')}}" alt="" srcset="">   
            </div>
            <div class="card-body">
                <form action="{{ route('job.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                    <div class="row">
                        <div class="col-12">
                            <label class="form-group mb-3" for="name" style="font-weight:bold">Your Name :</label>
                            <input type=" text" class="form-control" name="name" id="name" placeholder="Enter Your Name...">
                        </div>
                        @if ($errors->has('education'))
                        <span class="text-danger">{{ $errors->first('education') }}</span>
                        @endif
                        <div class="col-12">
                            <label class="form-group mb-3 mt-3" for="education" style="font-weight:bold">Your Education :</label>
                            <input type="text" class="form-control" name="education" id="education" placeholder="Enter Your Education With GPA/CGPA...">
                        </div>
                        @if ($errors->has('nid'))
                        <span class="text-danger">{{ $errors->first('nid') }}</span>
                        @endif
                        <div class="col-12">
                            <label class="form-group mb-3 mt-3" for="nid" style="font-weight:bold">Your NID Number :</label>
                            <input type="text" class="form-control" id="nid" name="nid" placeholder="Enter Your NID Number...">
                        </div>
                        @if ($errors->has('resume'))
                        <span class="text-danger">{{ $errors->first('resume') }}</span>
                        @endif
                        <div class="col-12">
                            <label class="form-group mb-3 mt-3" for="resume" style="font-weight:bold">Upload Your Resume With
                                Work
                                Link :</label>
                            <input type="file" class="form-control" id="resume" name="resume">
                        </div>
                        @if ($errors->has('jobTopic'))
                        <span class="text-danger">{{ $errors->first('jobTopic') }}</span>
                        @endif
                        <div class="col-12">
                            <label class="form-group mb-3 mt-3" for="jobTopic" style="font-weight:bold">Which Topic For You Applied :</label>
                            <select name="jobTopic" class="form-select form-select-md mb-3" aria-label=".form-select-lg example" id="jobTopic">
                                <option>Choose One</option>
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
                            <label class="form-group mb-3 mt-3" for="" style="font-weight:bold">Do You Want To Work From
                                Home
                                :</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="workType"
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
                            <button type="submit" class="btn btn-secondary px-5 py-2 mt-4">Apply</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main> <!-- /#main -->
@endsection