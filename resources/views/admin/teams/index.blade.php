@extends('admin.layouts.master')
@section('title','Team Members')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                    <div class="page-header pull-left">
                        <h2 class="pageheader-title">Team members</h2>
                        <div class="page-breadcrumb  ">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Team Members</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">All Team Members</li>
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
                    <th>Post</th>
                    <th>Details</th>
                    <th>image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1; ?>
                @foreach ($teams as $team)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$team->name}}</td>
                        <td>{{ $team->post }}</td>
                        <td>{{ $team->detail }}</td>
                        <td><img src="{{asset('assets/img/team/'.$team->image)}}" style="width:50px;height:50px;" alt="Member Image"></td>
                        <td>
                            <form action="{{ route('teams.destroy',$team->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('teams.edit',$team->id) }}">Edit</a>
                                <a class="btn btn-secondary" href="{{ route('teams.show',$team->id) }}">View</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $teams->links() !!}

                    </div>
                </div>   
            </div>    

</div> 
</div>
</div>

@endsection