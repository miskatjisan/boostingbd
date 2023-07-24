@extends('admin.layouts.master')
@section('title','service')
@section('content')

<div class="container ps-5 pt-5 mt-5">
<div class="d-flex justify-content-end mb-5">
<a href="{{route('category.view')}}" class="btn btn-primary">All Service</a>
</div>


<div class="pt-5 ps-5 ms-5 container">
<form action="{{route('admin.service.store')}}"  enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
            <div class="col-6">
            <div class="mb-3 ps-5 ms-5">
    <label for="exampleInputEmail1" class="form-label">Category</label>
    <select class="form-select" name="catagory_id" aria-label="Default select example" required>
  <option selected disabled>select category</option>
@foreach($category as $item)
  <option value="{{$item->id}}">{{$item->category_name}}</option>
@endforeach
</select>
  </div>
            </div>
            <div class="col-6">
            <div class="mb-3 ps-5 ms-5">
    <label for="exampleInputEmail1" class="form-label">Title</label>
    <input type="text" name='title' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    
  </div>
            </div>
            <div class="col-6">

            <div class="mb-3 ps-5 ms-5">
    <label for="exampleInputEmail1" class="form-label">Price</label>
    <input type="text" name='price' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    
  </div>

            </div>
            <div class="col-6">

            <div class="mb-3 ps-5 ms-5">
    <label for="exampleInputEmail1" class="form-label">Card Title</label>
    <input type="text" name='card_title' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    
  </div>

            </div>
            <div class="col-6">

            <div class="mb-3 ps-5 ms-5">
    <label for="exampleInputEmail1" class="form-label"> Image</label>
    <input class="form-control" name="image" type="file" id="formFile">
  </div>

            </div>
            <div class="col-6">

            <div class="mb-3 ps-5 ms-5">
    <label for="exampleInputEmail1" class="form-label">Short Description</label>
    <textarea class="form-control" name="short_discr" id="exampleFormControlTextarea1" rows="3" required></textarea>
  </div>

            </div>
            <div class="col-6">

            <div class="mb-3 ps-5 ms-5">
    <label for="exampleInputEmail1" class="form-label">Long Description</label>
    <textarea class="form-control" name="discr" id="exampleFormControlTextarea1" rows="3" required></textarea>
  </div>
            </div>
            <div class="col-6">
            <div class="mb-3 ps-5 ms-5">
    <label for="exampleInputEmail1" class="form-label">Card Feature 1</label>
    <input type="text" name='feature1' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
            </div>
            <div class="col-6">
            <div class="mb-3 ps-5 ms-5">
    <label for="exampleInputEmail1" class="form-label">Card Feature2</label>
    <input type="text" name='feature2' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
            </div>
            <div class="col-6">
            <div class="mb-3 ps-5 ms-5">
    <label for="exampleInputEmail1" class="form-label">Card Feature3</label>
    <input type="text" name='feature3' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
            </div>
            <div class="col-6">
            <div class="mb-3 ps-5 ms-5">
    <label for="exampleInputEmail1" class="form-label">Card Feature4</label>
    <input type="text" name='feature4' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
            </div>
            <div class="col-6">
            <div class="mb-3 ps-5 ms-5">
    <label for="exampleInputEmail1" class="form-label">Card Feature5</label>
    <input type="text" name='feature5' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
            </div>
            <div class="col-6">
            <div class="mb-3 ps-5 ms-5">
    <label for="exampleInputEmail1" class="form-label">Card Feature6</label>
    <input type="text" name='feature6' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
            </div>
            <div class="col-6">
            <div class="mb-3 ps-5 ms-5">
    <label for="exampleInputEmail1" class="form-label">Card Feature7</label>
    <input type="text" name='feature7' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
            </div>
            <div class="col-6">
            <div class="mb-3 ps-5 ms-5">
    <label for="exampleInputEmail1" class="form-label">Card Feature8</label>
    <input type="text" name='feature8' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
            </div>
        </div>
    

  <div class="ms-5">
  <button type="submit" class="btn btn-primary  ms-5">Add Service</button>

  </div>
   
   </form>

      </div>

    

</div>

</div>



</div>


@endsection