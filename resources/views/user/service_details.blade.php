@extends('user.layouts.master')
@section('title','Boostingbd Limited Boosting Your Business')
@section('content')

<main id="main">

<!--========================= PRODUCTS =========================-->
<section class="section products section__padding-t" id="services">
    <div class="container">
        <div class="section__header mb--60">
            <h1 class="section__title title--3 text-start">{{$data->title}}</h1>
            <span class="section__subtitle text-start">
            {!! $data->short_discr !!}
            </span>
        </div> <!-- /.section__header -->

        <!--========= Slider ==========-->
        <div class="row g-0 g--30">
            <div class="col-md-6">
                <div class="row g-0 gy--30">
                    <!--=========== Products Info ===========-->
                    <div class="swiper product__info-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="./assets/img/house.png" alt="Slider Image" />
                            </div>
                            <div class="swiper-slide">
                                <img src="./assets/img/products/1.png" alt="Slider Image" />
                            </div>
                            <div class="swiper-slide">
                                <img src="./assets/img/products/2.png" alt="Slider Image" />
                            </div>
                            <div class="swiper-slide">
                                <img src="./assets/img/products/2.png" alt="Slider Image" />
                            </div>
                        </div> <!-- /.swiper-wrapper -->
                    </div> <!-- /.product__info-slider -->

                    <!--===== Product Info Thumbnail =====-->
                    <div class="swiper product-info__slider-thumb">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="./assets/img/products/1.png" alt="Slider Image" />
                            </div>
                            <div class="swiper-slide">
                                <img src="./assets/img/products/1.png" alt="Slider Image" />
                            </div>
                            <div class="swiper-slide">
                                <img src="./assets/img/products/2.png" alt="Slider Image" />
                            </div>
                            <div class="swiper-slide">
                                <img src="./assets/img/products/2.png" alt="Slider Image" />
                            </div>
                        </div> <!-- /.swiper-wrapper -->
                    </div> <!-- product-info__slider-thumb -->
                </div> <!-- /.col- -->
            </div> <!-- /.row -->

            <div class="col-md-6">
                <div class="product__info">
                    <div>
                        <h2 class="product__name d-flex align-items-center justify-content-between">
                        {{ $data->card_title }}
                            <span class="product__price">$ {{ $data->price }}</span>
                        </h2>
                    </div>

                    <div class="product__info-lists">
                        <ul class="list-unstyled">
                            <li><i class="fas fa-chevron-right"></i> {{ $data->feature1 }}</li>
                            <li><i class="fas fa-chevron-right"></i> {{ $data->feature2 }}</li>
                            <li><i class="fas fa-chevron-right"></i> {{ $data->feature3 }}</li>
                            <li><i class="fas fa-chevron-right"></i> {{ $data->feature4 }}</li>
                            <li><i class="fas fa-chevron-right"></i> {{ $data->feature5 }}</li>
                            <li><i class="fas fa-chevron-right"></i> {{ $data->feature6 }}</li>
                            <li><i class="fas fa-chevron-right"></i> {{ $data->feature7 }}</li>
                        </ul>
                    </div> <!-- /.product__info-lists -->
                </div> <!-- /.product__info -->

                <div class="product__info-footer">
                    <div class="row g-0 g--30">
                        <div class="col-3 col-xxl-2">
                            <div class="favorite active d-inline-flex align-items-center justify-content-center">
                                <span class="icon"></span>
                            </div>
                        </div>
                        <div class="col">
                            <a href="{{route('buy.service',$data->id)}}" class="primary__button product__info-button d-inline-flex align-items-center justify-content-center transpaent--bg">Buy Now</a>
                        </div>
                    </div> <!-- /.row -->
                </div> <!-- /.product__info-footer -->
            </div> <!-- /.col- -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section> <!-- /.products -->

<!--============= Share ===============-->
<section class="share">
    <div class="container">
        <div class="share__options d-flex justify-content-end">
            <div>
                <h3 class="share__title">Share</h3>
                <ul class="list-unstyled">
                    <li><a href="javascript:void(0)" class="share__btn"><i class="fas fa-share-alt"></i></a></li>
                    <li><a href="javascript:void(0)" class="copy"><i class="far fa-copy"></i></a></li>
                    <li><a href="javascript:void(0)" class="whatsapp"><i class="fab fa-whatsapp"></i></a></li>
                </ul>
            </div>
        </div> <!-- /.share__options -->
    </div> <!-- /.container -->
</section> <!-- /.share -->

<!--============= Product  About ===============-->
<section class="section product__about">
    <div class="container">
        <div class="section__header mb-0">
            <h1 class="section__title title--3 text-start">About this business Card</h1>
            {!! $data->discr !!}
        </div> <!-- /.section__header -->
    </div> <!-- /.container -->
</section> <!-- /.product__about -->

<!--============== FAQ =================-->
<section class="section faq __2 section__padding-t" id="faq">
    <div class="container">
        <div class="section__header">
            <h1 class="section__title mb-0 text-start">FAQ</h1>
        </div> <!-- /.section__header -->

        <!-- FAQ Lists -->
        <div class="faq__lists col-md-11">
            <dl>
                <dt class="">
                    <div>
                        <i class="fas fa-chevron-right start__icon"></i> There are many variations of passages of Lorem Ipsum but the majority have suffered?
                    </div>
                    <i class="fas fa-chevron-down end__icon"></i>
                </dt>
                <dd class="" style="display: none;"><strong>Ans:</strong> There are many variations of passages of Lorem Ipsum but the majority have suffered, 
                    he majority have suffered.
                </dd>

                <dt>
                    <div>
                        <i class="fas fa-chevron-right start__icon"></i> There are many variations of passages of Lorem Ipsum but the majority?
                    </div>
                    <i class="fas fa-chevron-down end__icon"></i>
                </dt>
                <dd><strong>Ans:</strong> There are many variations of passages of Lorem Ipsum but the majority have suffered, 
                    
                    he majority have suffered.
                </dd>

                <dt>
                    <div>
                        <i class="fas fa-chevron-right start__icon"></i> There are many variations of passages of Lorem Ipsum but the majority have suffered?
                    </div>
                    <i class="fas fa-chevron-down end__icon"></i>
                </dt>
                <dd><strong>Ans:</strong> There are many variations of passages of Lorem Ipsum but the majority have suffered, 
                    
                    he majority have suffered.
                </dd>

                <dt>
                    <div>
                        <i class="fas fa-chevron-right start__icon"></i> There are many variations of passages of Lorem Ipsum but the majority have suffered?
                    </div>
                    <i class="fas fa-chevron-down end__icon"></i>
                </dt>
                <dd><strong>Ans:</strong> There are many variations of passages of Lorem Ipsum but the majority have suffered, 
                    
                    he majority have suffered.
                </dd>

                <dt>
                    <div>
                        <i class="fas fa-chevron-right start__icon"></i> There are many variations of passages of Lorem Ipsum but?
                    </div>
                    <i class="fas fa-chevron-down end__icon"></i>
                </dt>
                <dd>
                    <strong>Ans:</strong> There are many variations of passages of Lorem Ipsum but.
                </dd>

                <dt>
                    <div>
                        <i class="fas fa-chevron-right start__icon"></i> There are many variations of passages of Lorem Ipsum but the majority have suffered?
                    </div>
                    <i class="fas fa-chevron-down end__icon"></i>
                </dt>
                <dd>
                    <strong>Ans:</strong> There are many variations of passages of Lorem Ipsum but.
                </dd>

                <dt>
                    <div>
                        <i class="fas fa-chevron-right start__icon"></i> There are many variations of passages of Lorem Ipsum?
                    </div>
                    <i class="fas fa-chevron-down end__icon"></i>
                </dt>
                <dd>
                    <strong>Ans:</strong> There are many variations of passages of Lorem Ipsum but.
                </dd>

                <dt>
                    <div>
                        <i class="fas fa-chevron-right start__icon"></i> There are many variations of passages of Lorem Ipsum but the?
                    </div>
                    <i class="fas fa-chevron-down end__icon"></i>
                </dt>
                <dd>
                    <strong>Ans:</strong> There are many variations of passages of Lorem Ipsum but.
                </dd>

                <dt>
                    <div>
                        <i class="fas fa-chevron-right start__icon"></i> There are many variations of passages of Lorem Ipsum but the majority?
                    </div>
                    <i class="fas fa-chevron-down end__icon"></i>
                </dt>
                <dd>
                    <strong>Ans:</strong> There are many variations of passages of Lorem Ipsum but.
                </dd>
            </dl>
        </div> <!-- /.faq__lists -->
    </div> <!-- /.container -->
</section> <!-- /.faq -->

<!--============== Testimonial =================-->
<section class="section testimonial section__padding-t">
    <div class="container">
        <div class="section__header mb--45">
            <h1 class="section__title title--3">Whats Say Clients About Us</h1>
            <span class="section__subtitle">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, 
                or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, 
                you need to be sure there isn't anything embarrassing hidden in the middle of text.
            </span>
        </div> <!-- /.section__header -->
        
        <div class="swiper testimonial__slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonial__item">
                        <img src="./assets/img/clients/9.png" alt="Client" class="testimonial__img" />

                        <div class="testimonial__item-body">
                            <h2 class="testimonial__client-name">Mr. Devid Lisnar</h2>
                            <time class="testimonial__time" datetime="2021-03-20">20 - 03 - 2021</time>
                            <p class="testimonial__para">Lorem ipsum dolor sit amet, conse ctetur adipi a scing errtf  dolore Lorem elit, sed do eiusmod tempor incididunt uttin labore et dolore Lorem ipsum dolor sit amet, 
                                consectetur adipiscing errtf  elit, sed do eiusmod tempor incididunt ut labore et dolore
                            </p>

                            <div class="ratings d-flex flex-wrap">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div> <!-- /.ratings -->
                        </div> <!-- /.testimonial__item-body -->
                    </div> <!-- /.testimonial__slider-item -->
                </div> <!-- /.swiper-slide -->
                
                <div class="swiper-slide">
                    <div class="testimonial__item">
                        <img src="./assets/img/clients/1.jpg" alt="Client" class="testimonial__img" />

                        <div class="testimonial__item-body">
                            <h2 class="testimonial__client-name">Mr. Devid Lisnar</h2>
                            <time class="testimonial__time" datetime="2021-03-20">20 - 03 - 2021</time>
                            <p class="testimonial__para">Lorem ipsum dolor sit amet, conse ctetur adipi a scing errtf  dolore Lorem elit, sed do eiusmod tempor incididunt uttin labore et dolore Lorem ipsum dolor sit amet, 
                                consectetur adipiscing errtf  elit, sed do eiusmod tempor incididunt ut labore et dolore
                            </p>

                            <div class="ratings">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div> <!-- /.ratings -->
                        </div> <!-- /.testimonial__item-body -->
                    </div> <!-- /.testimonial__slider-item -->
                </div> <!-- /.swiper-slide -->
                
                <div class="swiper-slide">
                    <div class="testimonial__item">
                        <img src="./assets/img/clients/2.jpg" alt="Client" class="testimonial__img" />

                        <div class="testimonial__item-body">
                            <h2 class="testimonial__client-name">Mr. Devid Lisnar</h2>
                            <time class="testimonial__time" datetime="2021-03-20">20 - 03 - 2021</time>
                            <p class="testimonial__para">Lorem ipsum dolor sit amet, conse ctetur adipi a scing errtf  dolore Lorem elit, sed do eiusmod tempor incididunt uttin labore et dolore Lorem ipsum dolor sit amet, 
                                consectetur adipiscing errtf  elit, sed do eiusmod tempor incididunt ut labore et dolore
                            </p>

                            <div class="ratings d-flex flex-wrap">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div> <!-- /.ratings -->
                        </div> <!-- /.testimonial__item-body -->
                    </div> <!-- /.testimonial__slider-item -->
                </div> <!-- /.swiper-slide -->
                
                <div class="swiper-slide">
                    <div class="testimonial__item">
                        <img src="./assets/img/clients/1.jpg" alt="Client" class="testimonial__img" />

                        <div class="testimonial__item-body">
                            <h2 class="testimonial__client-name">Mr. Devid Lisnar</h2>
                            <time class="testimonial__time" datetime="2021-03-20">20 - 03 - 2021</time>
                            <p class="testimonial__para">Lorem ipsum dolor sit amet, conse ctetur adipi a scing errtf  dolore Lorem elit, sed do eiusmod tempor incididunt uttin labore et dolore Lorem ipsum dolor sit amet, 
                                consectetur adipiscing errtf  elit, sed do eiusmod tempor incididunt ut labore et dolore
                            </p>

                            <div class="ratings">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div> <!-- /.ratings -->
                        </div> <!-- /.testimonial__item-body -->
                    </div> <!-- /.testimonial__slider-item -->
                </div> <!-- /.swiper-slide -->
                
                <div class="swiper-slide">
                    <div class="testimonial__item">
                        <img src="./assets/img/clients/2.jpg" alt="Client" class="testimonial__img" />

                        <div class="testimonial__item-body">
                            <h2 class="testimonial__client-name">Mr. Devid Lisnar</h2>
                            <time class="testimonial__time" datetime="2021-03-20">20 - 03 - 2021</time>
                            <p class="testimonial__para">Lorem ipsum dolor sit amet, conse ctetur adipi a scing errtf  dolore Lorem elit, sed do eiusmod tempor incididunt uttin labore et dolore Lorem ipsum dolor sit amet, 
                                consectetur adipiscing errtf  elit, sed do eiusmod tempor incididunt ut labore et dolore
                            </p>

                            <div class="ratings d-flex flex-wrap">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div> <!-- /.ratings -->
                        </div> <!-- /.testimonial__item-body -->
                    </div> <!-- /.testimonial__slider-item -->
                </div> <!-- /.swiper-slide -->
                
                <div class="swiper-slide">
                    <div class="testimonial__item">
                        <img src="./assets/img/clients/1.jpg" alt="Client" class="testimonial__img" />

                        <div class="testimonial__item-body">
                            <h2 class="testimonial__client-name">Mr. Devid Lisnar</h2>
                            <time class="testimonial__time" datetime="2021-03-20">20 - 03 - 2021</time>
                            <p class="testimonial__para">Lorem ipsum dolor sit amet, conse ctetur adipi a scing errtf  dolore Lorem elit, sed do eiusmod tempor incididunt uttin labore et dolore Lorem ipsum dolor sit amet, 
                                consectetur adipiscing errtf  elit, sed do eiusmod tempor incididunt ut labore et dolore
                            </p>

                            <div class="ratings">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div> <!-- /.ratings -->
                        </div> <!-- /.testimonial__item-body -->
                    </div> <!-- /.testimonial__slider-item -->
                </div> <!-- /.swiper-slide -->
            </div> <!-- /.swiper-wrapper -->

            <div class="slider__bottom d-flex align-items-center justify-content-end">
                <div class="d-flex align-items-center">
                    <h5 class="title">Total Review</h5>
                    <span class="rating">
                        <i class="fas fa-star"></i> 5.0 (1k+)
                    </span>
                </div>

                <div>
                    <div class="swiper-button-prev d-inline-flex align-items-center justify-content-center">
                        <i class="fas fa-arrow-left"></i>
                        <!-- <img src="./assets/img/arrow-left.png" alt="Left Arrow" /> -->
                    </div>
                    <div class="swiper-button-next d-inline-flex align-items-center justify-content-center">
                        <i class="fas fa-arrow-right"></i>
                        <!-- <img src="./assets/img/arrow-right.png" alt="right Arrow" /> -->
                    </div>
                </div>
            </div> <!-- /.slider__bottom -->
        </div> <!-- /.testimonial__slider -->
    </div> <!-- /.container -->
</section> <!-- /.testimonial -->

<div class="section__padding-t"></div>

</main> <!-- /#main -->



@endsection  