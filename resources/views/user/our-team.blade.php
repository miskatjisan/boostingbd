@extends('user.layouts.master')
@section('title','Our Team Members')
@section('content')
<main id="main">

<!--========================= PRODUCTS =========================-->
<section class="section products section__padding-t" id="our-teams">
<div class="container">
    <div class="row">
        @foreach($teams as $team)
        <div class="col-6 mb-3">
            <div class="card mb-3">
                <img src="{{asset('assets/img/team/'.$team->image)}}" class="card-img-top" alt="Member Image">
                    <div class="card-body">
                        <h5 class="card-title">{{$team->name}}</h5>
                        <p class="card-text">{{$team->post}}</p>
                            <p class="card-text">{{$team->detail}}</p>
                                <p class="card-text"><small class="text-muted">{{$team->created_at}}</small></p>
                    </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
</section>
</main>
@endsection