@extends('admin.layouts.master')
@section('title','Balance Show')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
        <div class="row">
                    <div class="page-header pull-left">
                        <h2 class="pageheader-title">Balance Show</h2>
                        <div class="page-breadcrumb pull-left">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Balance</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Show</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('balances.index') }}"> Back</a>
                </div>
                </div>
      
            <div class="ecommerce-widget">
            <div class="card">
                <div class="card-body">

                <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Payment Number</th>
                    <th>Tracktion Id</th>
                    <th>Screenshort</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                    <td>{{ $payment->paynumber }}</td>
                    <td>{{ $payment->trackid }}</td>
                    <td>{{ $payment->screenshort }}</td>
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