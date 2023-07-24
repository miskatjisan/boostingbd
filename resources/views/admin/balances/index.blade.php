@extends('admin.layouts.master')
@section('title','Balances')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                    <div class="page-header pull-left">
                        <h2 class="pageheader-title">Balances</h2>
                        <div class="page-breadcrumb  ">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Balances</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">All Balances</li>
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
                    <th>User Email</th>
                    <th>Payment Number</th>
                    <th>Tracktion Id</th>
                    <th>Balance</th>
                    <th>Screenshort</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 0;
                @endphp
                @foreach ($balances as $balance)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $balance->useremail }}</td>
                        <td>{{ $balance->paynumber }}</td>
                        <td>{{ $balance->trackid }}</td>
                        <td>{{ $balance->balance }}</td>
                        <td>{{ $balance->screenshort }}</td>
                        <td> 
                     <input data-id="{{$balance->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $balance->status ? 'checked' : '' }}> 
                  </td>
                        <td>
                            <form action="{{ route('balances.destroy',$balance->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('balances.edit',$balance->id) }}">Edit</a>
                                <a class="btn btn-secondary" href="{{ route('balances.show',$balance->id) }}">View</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
            <script>
   $(function() { 
           $('.toggle-class').change(function() { 
           var status = $(this).prop('checked') == true ? 1 : 0;  
           var balance_id = $(this).data('id');  
           $.ajax({ 
    
               type: "GET", 
               dataType: "json", 
               url: '/status/update', 
               data: {'status': status, 'balance_id': balance_id}, 
               success: function(data){ 
               console.log(data.success) 
            } 
         }); 
      }) 
   }); 
</script>
        </table>
        {!! $balances->links() !!}

                    </div>
                </div>   
            </div>    

</div> 
</div>
</div>

@endsection