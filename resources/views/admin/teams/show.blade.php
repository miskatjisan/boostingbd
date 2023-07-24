@extends('admin.layouts.master')
@section('title','Team Member Show')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
        <div class="row">
                    <div class="page-header pull-left">
                        <h2 class="pageheader-title">Team Member Show</h2>
                        <div class="page-breadcrumb pull-left">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Team Member</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Show</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('teams.index') }}"> Back</a>
                </div>
                </div>
      
            <div class="ecommerce-widget">
            <div class="card">
                <div class="card-body">

                <table class="table table-bordered">
            <thead>
                <tr>
                <th>Name</th>
                <th>Post</th>
                <th>Details</th>
                <th>image</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$team->name}}</td>
                    <td>{{ $team->post }}</td>
                    <td>{{ $team->detail }}</td>
                    <td><img src="{{asset('assets/img/team/'.$team->image)}}" style="width:50px;height:50px;" alt="Member Image"></td>
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