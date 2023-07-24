@extends('admin.layouts.master')
@section('title','Job Aplication List')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                    <div class="page-header pull-left">
                        <h2 class="pageheader-title">Job Application list</h2>
                        <div class="page-breadcrumb  ">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Job application list</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">All applications</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
         
            <div class="ecommerce-widget">
                <div class="card">
                    <div class="card-body">

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Education</th>
                    <th>NId</th>
                    <th>Resume</th>
                    <th>Job Topic</th>
                    <th>Join Type</th>
                    <th>Work Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
              <?php   $i=1; ?>
                @foreach ($jobs as $job)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $job->name }}</td>
                        <td>{{ $job->education }}</td>
                        <td>{{ $job->nid }}</td>
                        <td><img style="width:55px;height:55px" src="{{asset($job->resume)}}" alt="image" > 
                        <td>{{ $job->jobTopic }}</td>
                        <td>{{ $job->joinType }}</td>
                        <td>{{ $job->workType }}</td>
                        <td>
                            <form action="{{ route('jobapplies.destroy',$job->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('jobapplies.edit',$job->id) }}">Edit</a>
                                <a class="btn btn-secondary" href="{{ route('jobapplies.show',$job->id) }}">View</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $jobs->links() !!}

                    </div>
                </div>   
            </div>    

</div> 
</div>
</div>

@endsection