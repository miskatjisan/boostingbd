@extends('admin.layouts.master')
@section('title','service view')
@section('content')

<div class="container ps-5 pt-5 mt-5">
<div class="d-flex justify-content-end mb-5">
<a href="{{route('add.service')}}" class="btn btn-primary">Add Service</a>
</div>


<div class="pt-5 ps-5 ms-5">
<table class="table table-hover ms-5">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Card Title</th>
      <th scope="col">Price</th>
      <th scope="col">Category Name</th>

      <th scope="col">Created At</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

   @foreach($data as $item)
    <tr>
      <th scope="row">1</th>
      <td>{{$item->title}}</td>
      <td>{{$item->card_title}}</td>
      <td>{{$item->price}}</td>
      <td>{{$item->catagory_id}}</td>
      <td>{{$item->created_at}}</td>
     
     
     
      <td>
        <a href="{{route('admin.service.edit',$item->id)}}" class="btn btn-primary">Edit</a>
        <a href="{{route('admin.service.delete',$item->id)}}" class="btn btn-danger">Delete</a></td>
    </tr>
   @endforeach
  </tbody>
</table>

</div>

</div>




@endsection