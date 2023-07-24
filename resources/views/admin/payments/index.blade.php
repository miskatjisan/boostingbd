@extends('admin.layouts.master')
@section('title','Payments')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                    <div class="page-header pull-left">
                        <h2 class="pageheader-title">Payments</h2>
                        <div class="page-breadcrumb  ">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Payments</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">All Payments</li>
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
                    <th>User Emai</th>
                    <th>Payment Number</th>
                    <th>Tracktion Id</th>
                    <th>Amount</th>
                    <th>Screenshort</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($payments as $payment)
                    <tr>
                        <td>{{ $payment->id  }}</td>
                        <td>{{ $payment->useremail }}</td>
                        <td>{{ $payment->paynumber }}</td>
                        <td>{{ $payment->trackid }}</td>
                        <td>{{ $payment->screenshort }}</td>
                        <td>{{ $payment->status }}</td>
                        <td>
                            <form action="{{ route('payments.destroy',$payment->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('payments.edit',$payment->id) }}">Edit</a>
                                <a class="btn btn-secondary" href="{{ route('payments.show',$payment->id) }}">View</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
   
        </table>
        {!! $payments->links() !!}

                    </div>
                </div>   
            </div>    

</div> 
</div>
</div>

@endsection