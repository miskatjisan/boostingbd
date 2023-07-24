@extends('user.layouts.master')
@section('title','Boostingbd Limited Boosting Your Business')
@section('content')
<main id="main">

<!--========================= PRODUCTS =========================-->
<section class="section products section__padding-t" id="services">
    <div class="container">
        <div class="section__header mb--60">
            <h1 class="section__title title--2">The Services We Provide</h1>
            <h1 class="section__title title--3">know everything</h1>
            <span class="section__subtitle">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,<br class="d-none d-xxl-inline" />
                by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of<br class="d-none d-xxl-inline" />
                Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</span>
        </div> <!-- /.section__header -->

        <!--=========== Products Content ===========-->
        <div class="products__content">
            <div class="row g-0 g--30">
                @foreach($data as $item)
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="product__card">
                        <div class="product__card-img">
                            <img src="./assets/img/house.png" alt="Product Image" class="img-fluid" />
                        </div> <!-- /.product__card-img -->

                        <div class="product__card-body">
                            <a href="{{route('service.details',$item->id)}}">
                            <h2 class="product__name d-flex align-items-center justify-content-between">{{$item->title}}
                                <span class="product__price d-inline-block">&#36;{{$item->price}}</span>
                            </h2>
                            </a>
                        
                            <p class="product__description">
                                 {!! $item->short_discr !!}
                                <span class="rating">
                                    <i class="fas fa-star"></i> 5.0 (1k+)
                                </span> <!-- /.rating -->
                            </p>
                            <div class="d-flex align-items-center justify-content-between">
                                <a href="{{route('buy.service',$item->id)}}" class="primary__button card--button">Buy Now</a>

                                <div class="favorite active d-inline-flex align-items-center justify-content-center">
                                    <span class="icon"></span>
                                </div> <!-- /.favorite -->
                            </div>
                        </div> <!-- /.product__card-body -->
                    </div> <!-- /.product__card -->
                </div> <!-- /.col- -->
    @endforeach
               
            </div> <!-- /.row -->
        </div> <!-- /.products__content -->
    </div> <!-- /.container -->
</section> <!-- /.products -->

<div class="section__padding-t"></div>

</main> <!-- /#main -->


@endsection  