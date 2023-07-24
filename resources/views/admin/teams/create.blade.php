@extends('admin.layouts.master')
@section('title','Create Team Member')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                    <div class="page-header pull-left">
                        <h2 class="pageheader-title">Create New Member</h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Team Member</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('teams.index') }}">Back</a>
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

<form action="{{route('teams.store')}}" method="post" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="mb-3">
    <label  class="form-label">Post</label>
    <input type="text" class="form-control" name="post" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Details</label>
    <textarea name="detail" class="form-control" cols="20" rows="10"></textarea>
  </div>
  <div class="mb-3">
    <label  class="form-label">Image</label>
    <input type="file" name="image">
  </div>
  
  <button type="submit" class="btn btn-primary">Add New Member</button>
</form>

        </div>
            </div>   
        </div>    


</div> 
</div>
</div>
@endsection