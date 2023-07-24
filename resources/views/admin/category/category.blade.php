@extends('admin.layouts.master')
@section('title','category view')
@section('content')

<div class="container ps-5 pt-5 mt-5 pb-5">
<div class="d-flex justify-content-end mb-5">
<button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary">Add category</button>
</div>


<div class="pt-5 ps-5 ms-5">
<table class="table table-hover ms-5">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Category Name</th>
      <th scope="col">Created At</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    @foreach($data as $item)
    <tr>
      <th scope="row">1</th>
      <td>{{$item->category_name}}</td>
      <td>{{$item->created_at}}</td>
      <td>
        <a href="{{route('category.edit',$item->id)}}" class="btn btn-primary">Edit</a>
        <a href="{{route('category.delete',$item->id)}}" class="btn btn-danger">Delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>

</div>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Category</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="{{route('category.store')}}" method="post">
        @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Category Name</label>
    <input type="text" name='category_name' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    
  </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Category</button>
      </div>
      </form>
    </div>
  </div>
</div>


@endsection