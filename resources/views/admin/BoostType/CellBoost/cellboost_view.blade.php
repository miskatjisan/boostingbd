@extends('admin.layouts.master')
@section('title','Cell Boost view')
@section('content')

<div class="container ps-5 pt-5 mt-5">


<div class="pt-5 ps-5 ms-5">
<table class="table table-hover ms-5">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Boost Type</th>
      <th scope="col">Page Link</th>
      <th scope="col">Boost Days</th>
      <th scope="col">Total Budget</th>
      <th scope="col">Payment</th>
      <th scope="col">Created At</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  @foreach($data as $item)
    <tr>
      <th scope="row">1</th>
      <td>{{$item->boosttype}}</td>
      <td>{{$item->pagelink}}</td>
      <td>{{$item->boostday}}</td>
      <td>{{$item->totalbudget}}</td>
      <td>{{$item->payment}}</td>
      <td>{{$item->created_at}}</td>
      <td></td>
      
       
    </tr>
  @endforeach
  
  </tbody>
</table>

</div>

</div>





@endsection