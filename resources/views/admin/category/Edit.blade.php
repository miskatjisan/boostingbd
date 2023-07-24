@extends('admin.layouts.master')
@section('title','Dashboard')
@section('content')

<div class="container ps-5 pt-5 mt-5 pb-5">
<div class="d-flex justify-content-end mb-5">
<a href="{{route('category.view')}}" class="btn btn-primary">All category</a>
</div>


<div class="pt-5 ps-5 ms-5 container">
<form action="{{route('category.update')}}" method="post">
        @csrf
    <input type="hidden" name='oldId' value="{{$data->id}}" >

  <div class="mb-3 ps-5 ms-5">
    <label for="exampleInputEmail1" class="form-label">Category Name</label>
    <input type="text" name='category_name' value="{{$data->category_name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="ms-5">
  <button type="submit" class="btn btn-primary  ms-5">Update Category</button>

  </div>
   
   </form>

      </div>

    

</div>

</div>



</div>


@endsection