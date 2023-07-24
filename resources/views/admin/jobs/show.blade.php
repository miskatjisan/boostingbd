@extends('admin.layouts.master')
@section('title','Job Application Show')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
        <div class="row">
                    <div class="page-header pull-left">
                        <h2 class="pageheader-title">Job Application Show</h2>
                        <div class="page-breadcrumb pull-left">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Job Application</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Show</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('jobapplies.index') }}"> Back</a>
                </div>
                </div>
      
            <div class="ecommerce-widget">
            <div class="card">
                <div class="card-body">

                <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Education</th>
                    <th>NId</th>
                    <th>Resume</th>
                    <th>Job Topic</th>
                    <th>Join Type</th>
                    <th>Work Type</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                    <td>{{ $jobapply->name }}</td>
                    <td><img src="{{asset($jobapply->resume)}}" alt="" > 
                    <td>{{ $jobapply->education }}</td>
                    <td>{{ $jobapply->jobTopic }}</td>
                    <td>{{ $jobapply->joinType }}</td>
                    <td>{{ $jobapply->WorkType }}</td>
                    </tr>
            </tbody>
        </table>

                </div>
            </div>   
        </div>    

</div>
</div>   
</div>    

@endsection