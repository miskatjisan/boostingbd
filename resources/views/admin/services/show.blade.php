@extends('admin.layouts.master')
@section('title','Dashboard')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
        <div class="row">
                    <div class="page-header pull-left">
                        <h2 class="pageheader-title">Services Show</h2>
                        <div class="page-breadcrumb pull-left">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Services</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Show</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('services.index') }}"> Back</a>
                </div>
                </div>
      
            <div class="ecommerce-widget">
            <div class="card">
                <div class="card-body">

                <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Boost Type</th>
                    <th>Page Link</th>
                    <th>Boost Days</th>
                    <th>Total Budget</th>
                    <th>Post Link</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>{{ $service->boosttype }}</td>
                        <td>{{ $service->pagelink }}</td>
                        <td>{{ $service->boostday }}</td>
                        <td>{{ $service->totalbudget }}</td>
                        <td>{{ $service->postlink }}</td>
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