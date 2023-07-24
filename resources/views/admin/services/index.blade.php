@extends('admin.layouts.master')
@section('title','Dashboard')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                    <div class="page-header pull-left">
                        <h2 class="pageheader-title">Services</h2>
                        <div class="page-breadcrumb  ">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Services</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">All Services</li>
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
                    <th>User ID</th>
                    <th>Boost Type</th>
                    <th>Page Link</th>
                    <th>Boost Days</th>
                    <th>Total Budget</th>
                    <th>Post Link</th>
                    <th>Payment Type</th>
                    <th>Status</th> 
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr>
                        <td>{{$service->id}}</td>
                        <td>{{ $service->userID }}</td>
                        <td>{{ $service->boosttype }}</td>
                        <td>{{ $service->pagelink }}</td>
                        <td>{{ $service->boostday }}</td>
                        <td>{{ $service->totalbudget }}</td>
                        <td>{{ $service->postlink }}</td>
                        <td>{{ $service->payment }}</td>
                        <td>{{ $service->status }}</td>
                        <td>
                            <form action="{{ route('services.destroy',$service->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('services.edit',$service->id) }}">Edit</a>
                                <a class="btn btn-secondary" href="{{ route('services.show',$service->id) }}">View</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $services->links() !!}

                    </div>
                </div>   
            </div>    

</div> 
</div>
</div>

@endsection