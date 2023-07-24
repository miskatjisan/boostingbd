@extends('user.layouts.master')
@section('title','Boostingbd Limited Boosting Your Business')
@section('content')
    <!--========================= MAIN =========================-->
    <main id="main">
        <!--========================= HOME =========================-->
        <section class="section home" id="home">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <div class="home__content">
                            <span class="home__section-subtitle d-block">বুস্টিংবিডি লিমিটেড </span>
                            <h2 class="home__section-title">ডিজিটাল মার্কেটিং এজেন্সী </h2>
                            <p class="home__section-text">আমরা আমাদের গ্রাহকদের জন্য বুস্টিং সার্ভিস প্রদান করি। আপনাকে ব্যবসাকে ডিজিটাল ব্যাবসায় রূপান্তর করুন আমাদের মাধ্যমে  </p>

                            <div class="home__buttons d-flex align-items-center justify-content-center justify-content-lg-start">
                                <a href="javascript:void(0)" class="home__button">যোগাযোগ করুন </a>
                                <a href="catagories%20page.html" class="home__button __2">আরো জানুন </a>
                            </div> <!-- /.home__buttons -->
                        </div> <!-- /.home__content -->
                    </div> <!-- /.col- -->

                    <div class="col-md-10 col-lg-5 mx-auto">
                        <div class="home__image-box">
                            <img src="./assets/img/header/header-img.png" alt="Header Image"
                                class="home__image img-fluid" />
                        </div> <!-- /.home__image-box -->
                    </div> <!-- /.col- -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </section> <!-- /.home#home -->

        <!--========================= ABOUT =========================-->
        <section class="section about section__padding-t" id="about">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-5">
                        <div>
                            <h3 class="about__section-title text-capitalize">আমাদের সম্পর্কে জানুন </h3>
                            <p class="about__section-text"> বুস্টিংবিডি  লিমিটেড  যাত্রা শুরু করে ২০১৯ সালে I আমরা ইতিমধ্যে ৬০০+ অধিক পেজের কাজ সম্পন্ন করেছি I আমার ফেসবুক স্বীকৃত এজেন্ট ২০২১ সাল থেকে  I
                            </p>
                        </div>

                        <!--=========== VIDEO ===========-->
                        <div class="video__container">
                            <div class="video__player">
                                <button type="button" class="video__play-button">
                                    <i class="fas fa-play video__play-icon"></i>
                                </button>
                                
                                <video class="video__play" poster="./assets/img/video.jpg">
                                    <source  src="./assets/video/BOOSTING BD.mp4" type="video/mp4" />
                                </video> <!-- /.video__play -->
                            </div> <!-- /.video__player -->
                        </div> <!-- /.video__container -->
                    </div> <!-- /.col- -->

                    <div class="col-lg-5">
                        <div class="about__data-container">
                            <div class="about__data">
                                <h2 class="about__data-name">আমাদের লোকেশন
</h2>                                <p class="about__data-text">গ-৯ শাহজাদপুর গুলশান ঢাকা -১২১২

                                </p>
                                <div class="border__line">
                                    <div class="about__data-round"></div>
                                </div>
                            </div> <!-- /.about__data -->

                            <div class="about__data">
                                <h2 class="about__data-name">অভিজ্ঞতা</h2>
                                <p class="about__data-text">আমরা দক্ষতার সাথে ৫ বছরের বেশি সময় ধরে কাজ করছি I
                                </p>
                                <div class="border__line">
                                    <div class="about__data-round"></div>
                                </div>
                            </div> <!-- /.about__data -->

                            <div class="about__data">
                                <h2 class="about__data-name">আমাদের কাজ </h2>
                                <p class="about__data-text">আমরা ইতিমধ্যে ৬০০+ অধিক পেজের কাজ সম্পন্ন করেছি I আমার ফেসবুক স্বীকৃত এজেন্ট ২০২১ সাল থেকে I
                                </p>
                                <div class="border__line">
                                    <div class="about__data-round"></div>
                                </div>
                            </div> <!-- /.about__data -->

                            <!-- BUTTON -->
                            <a href="javascript:void(0)" class="primary__button">আরো জানুন   </a>
                        </div> <!-- /.about__data-container -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </section> <!-- /.about#about -->

        <!--========================= SERVICES =========================-->
        <section class="section services section__padding-t" id="services">
            <div class="container">
                <div class="section__header">
                    <h1 class="section__title title--2">কি ধরণের সার্ভিস আমরা দিচ্ছি</h1>
                    <span class="section__subtitle">ডিজাইন , ডেভেলপমেন্ট , ডিজিটাল মার্কেটিং সহ নানান রকম ডিজিটাল  সার্ভিস নিয়ে কাজ করছি আমরা I I
                    </span>
                </div> <!-- /.section__header -->

                <!--=========== services content ===========-->
                <div class="services__content">
                    <div class="row g-0 g--30">
                        <div class="col-md-6 col-lg-4">
                            <div class="services__content-card color--1">
                                <i class="fas fa-pencil-ruler services__content-icon"></i>
                                <h2 class="services__content-name">ডিজিটাল মার্কেটিং </h2>
                                <a href="service details.html" class="services-content__read-more dots">আরো জানুন </a>
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="javascript:void(0)" class="primary__button services__content-button">অর্ডার করুন </a>
                                    <span class="services__content-price">$ 3000-50000</span>
                                </div>
                            </div> <!-- /.services__content-card -->
                        </div> <!-- /.col- -->

                        <div class="col-md-6 col-lg-4">
                            <div class="services__content-card color--2">
                                <i class="fas fa-pencil-ruler services__content-icon"></i>
                                <h2 class="services__content-name">ওয়েবসাইট ডেভেলপমেন্ট </h2>
                                <a href="service details.html" class="services-content__read-more dots">আরো জানুন </a>
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="javascript:void(0)" class="primary__button services__content-button">অর্ডার করুন </a>
                                    <span class="services__content-price">$ 3000-50000</span>
                                </div>
                            </div> <!-- /.services__content-card -->
                        </div> <!-- /.col- -->
                        
                        <div class="col-md-6 col-lg-4">
                            <div class="services__content-card">
                                <i class="fas fa-pencil-ruler services__content-icon"></i>
                                <h2 class="services__content-name">মোবাইল এপ্লিকেশন ডেভেলপমেন্ট </h2>
                                <a href="service details.html" class="services-content__read-more dots">আরো জানুন </a>
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="javascript:void(0)" class="primary__button services__content-button">অর্ডার করুন </a>
                                    <span class="services__content-price">$ 3000-50000</span>
                                </div>
                            </div> <!-- /.services__content-card -->
                        </div> <!-- /.col- -->

                        <div class="col-md-6 col-lg-4">
                            <div class="services__content-card color--1">
                                <i class="fas fa-pencil-ruler services__content-icon"></i>
                                <h2 class="services__content-name">ডেস্কটপ এপ্লিকেশন ডেভেলপমেন্ট </h2>
                                <a href="service details.html" class="services-content__read-more dots">আরো জানুন </a>
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="javascript:void(0)" class="primary__button services__content-button">অর্ডার করুন </a>
                                    <span class="services__content-price">$ 3000-50000</span>
                                </div>
                            </div> <!-- /.services__content-card -->
                        </div> <!-- /.col- -->
                        
                        <div class="col-md-6 col-lg-4">
                            <div class="services__content-card color--2">
                                <i class="fas fa-pencil-ruler services__content-icon"></i>
                                <h2 class="services__content-name">ওয়েব এপ্লিকেশন ডেভেলপমেন্ট</h2>
                                
                                <a href="service details.html" class="services-content__read-more dots">আরো জানুন </a>
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="javascript:void(0)" class="primary__button services__content-button">অর্ডার করুন </a>
                                    <span class="services__content-price">$ 3000-50000</span>
                                </div>
                            </div> <!-- /.services__content-card -->
                        </div> <!-- /.col- -->

                        <div class="col-md-6 col-lg-4">
                            <div class="services__content-card">
                                <i class="fas fa-pencil-ruler services__content-icon"></i>
                                <h2 class="services__content-name">বিজনেস কনসালটেন্সি </h2>
                                <a href="service details.html" class="services-content__read-more dots">আরো জানুন </a>
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="javascript:void(0)" class="primary__button services__content-button">অর্ডার করুন </a>
                                    <span class="services__content-price">$ 3000-50000</span>
                                </div>
                            </div> <!-- /.services__content-card -->
                        </div> <!-- /.col- -->
                    </div> <!-- /.row -->
                </div> <!-- /.services__content -->

                <div class="text-center mt--50">
                    <a href="service Home.html" class="primary__button">View all</a>
                </div>
            </div> <!-- /.container -->
        </section> <!-- /.services -->

        <!--========================= CLIENTS =========================-->
        <section class="section clients section__padding-t" id="clients">
            <div class="container">
                <div class="section__header">
                    <h1 class="section__title">আমাদের ক্লায়েন্টগণ </h1>
                  <center>আমরা ইতিমধ্যে ৭০০ এর অধিক  ক্লায়েন্ট এর  কাজ সম্পন্ন করেছি</center>
                </div> <!-- /.section__header -->

                <!--=========== Clients Content ===========-->
                <div class="clients__content">
                    <div class="row g-0 g--30">
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="clients__content-card">
                                <div class="client__profile">
                                    <img class="img-fluid client__profile-image" src="./assets/img/clients/1.jpg" alt="Clients Image" />
                                    <div class="client__desc d-flex align-content-center justify-content-end flex-column">
                                        <h3 class="client__name">Client</h3>
                                        <span class="client__title">title</span>

                                        <!-- Socials -->
                                        <ul class="client__socials list-unstyled d-flex align-content-center justify-content-center">
                                            <li><a href="javascript:void(0)"><i class="fab fa-facebook-square"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-twitter-square"></i></a></li>
                                        </ul> <!-- /.client__socials -->
                                    </div> <!-- /.client__desc -->
                                </div> <!-- /.client__profile -->
                            </div> <!-- /.clients__content-card -->
                        </div>

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="clients__content-card">
                                <div class="client__profile">
                                    <img class="img-fluid client__profile-image" src="./assets/img/clients/2.jpg" alt="Clients Image" />
                                    <div class="client__desc d-flex align-content-center justify-content-end flex-column">
                                        <h3 class="client__name">Client</h3>
                                        <span class="client__title">title</span>

                                        <!-- Socials -->
                                        <ul class="client__socials list-unstyled d-flex align-content-center justify-content-center">
                                            <li><a href="javascript:void(0)"><i class="fab fa-facebook-square"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-twitter-square"></i></a></li>
                                        </ul> <!-- /.client__socials -->
                                    </div> <!-- /.client__desc -->
                                </div> <!-- /.client__profile -->
                            </div> <!-- /.clients__content-card -->
                        </div>

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="clients__content-card">
                                <div class="client__profile">
                                    <img class="img-fluid client__profile-image" src="./assets/img/clients/3.jpg" alt="Clients Image" />
                                    <div class="client__desc d-flex align-content-center justify-content-end flex-column">
                                        <h3 class="client__name">Client</h3>
                                        <span class="client__title">title</span>

                                        <!-- Socials -->
                                        <ul class="client__socials list-unstyled d-flex align-content-center justify-content-center">
                                            <li><a href="javascript:void(0)"><i class="fab fa-facebook-square"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-twitter-square"></i></a></li>
                                        </ul> <!-- /.client__socials -->
                                    </div> <!-- /.client__desc -->
                                </div> <!-- /.client__profile -->
                            </div> <!-- /.clients__content-card -->
                        </div>

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="clients__content-card">
                                <div class="client__profile">
                                    <img class="img-fluid client__profile-image" src="./assets/img/clients/4.jpg" alt="Clients Image" />
                                    <div class="client__desc d-flex align-content-center justify-content-end flex-column">
                                        <h3 class="client__name">Client</h3>
                                        <span class="client__title">title</span>

                                        <!-- Socials -->
                                        <ul class="client__socials list-unstyled d-flex align-content-center justify-content-center">
                                            <li><a href="javascript:void(0)"><i class="fab fa-facebook-square"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-twitter-square"></i></a></li>
                                        </ul> <!-- /.client__socials -->
                                    </div> <!-- /.client__desc -->
                                </div> <!-- /.client__profile -->
                            </div> <!-- /.clients__content-card -->
                        </div>

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="clients__content-card">
                                <div class="client__profile">
                                    <img class="img-fluid client__profile-image" src="./assets/img/clients/5.jpg" alt="Clients Image" />
                                    <div class="client__desc d-flex align-content-center justify-content-end flex-column">
                                        <h3 class="client__name">Client</h3>
                                        <span class="client__title">title</span>

                                        <!-- Socials -->
                                        <ul class="client__socials list-unstyled d-flex align-content-center justify-content-center">
                                            <li><a href="javascript:void(0)"><i class="fab fa-facebook-square"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-twitter-square"></i></a></li>
                                        </ul> <!-- /.client__socials -->
                                    </div> <!-- /.client__desc -->
                                </div> <!-- /.client__profile -->
                            </div> <!-- /.clients__content-card -->
                        </div>

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="clients__content-card">
                                <div class="client__profile">
                                    <img class="img-fluid client__profile-image" src="./assets/img/clients/6.jpg" alt="Clients Image" />
                                    <div class="client__desc d-flex align-content-center justify-content-end flex-column">
                                        <h3 class="client__name">Client</h3>
                                        <span class="client__title">title</span>

                                        <!-- Socials -->
                                        <ul class="client__socials list-unstyled d-flex align-content-center justify-content-center">
                                            <li><a href="javascript:void(0)"><i class="fab fa-facebook-square"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-twitter-square"></i></a></li>
                                        </ul> <!-- /.client__socials -->
                                    </div> <!-- /.client__desc -->
                                </div> <!-- /.client__profile -->
                            </div> <!-- /.clients__content-card -->
                        </div>

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="clients__content-card">
                                <div class="client__profile">
                                    <img class="img-fluid client__profile-image" src="./assets/img/clients/7.jpg" alt="Clients Image" />
                                    <div class="client__desc d-flex align-content-center justify-content-end flex-column">
                                        <h3 class="client__name">Client</h3>
                                        <span class="client__title">title</span>

                                        <!-- Socials -->
                                        <ul class="client__socials list-unstyled d-flex align-content-center justify-content-center">
                                            <li><a href="javascript:void(0)"><i class="fab fa-facebook-square"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-twitter-square"></i></a></li>
                                        </ul> <!-- /.client__socials -->
                                    </div> <!-- /.client__desc -->
                                </div> <!-- /.client__profile -->
                            </div> <!-- /.clients__content-card -->
                        </div>

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="clients__content-card">
                                <div class="client__profile">
                                    <img class="img-fluid client__profile-image" src="./assets/img/clients/8.jpg" alt="Clients Image" />
                                    <div class="client__desc d-flex align-content-center justify-content-end flex-column">
                                        <h3 class="client__name">Client</h3>
                                        <span class="client__title">title</span>

                                        <!-- Socials -->
                                        <ul class="client__socials list-unstyled d-flex align-content-center justify-content-center">
                                            <li><a href="javascript:void(0)"><i class="fab fa-facebook-square"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-twitter-square"></i></a></li>
                                        </ul> <!-- /.client__socials -->
                                    </div> <!-- /.client__desc -->
                                </div> <!-- /.client__profile -->
                            </div> <!-- /.clients__content-card -->
                        </div>

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="clients__content-card">
                                <div class="client__profile">
                                    <img class="img-fluid client__profile-image" src="./assets/img/clients/9.jpg" alt="Clients Image" />
                                    <div class="client__desc d-flex align-content-center justify-content-end flex-column">
                                        <h3 class="client__name">Client</h3>
                                        <span class="client__title">title</span>

                                        <!-- Socials -->
                                        <ul class="client__socials list-unstyled d-flex align-content-center justify-content-center">
                                            <li><a href="javascript:void(0)"><i class="fab fa-facebook-square"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-twitter-square"></i></a></li>
                                        </ul> <!-- /.client__socials -->
                                    </div> <!-- /.client__desc -->
                                </div> <!-- /.client__profile -->
                            </div> <!-- /.clients__content-card -->
                        </div>

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="clients__content-card">
                                <div class="client__profile">
                                    <img class="img-fluid client__profile-image" src="./assets/img/clients/10.jpg" alt="Clients Image" />
                                    <div class="client__desc d-flex align-content-center justify-content-end flex-column">
                                        <h3 class="client__name">Client</h3>
                                        <span class="client__title">title</span>

                                        <!-- Socials -->
                                        <ul class="client__socials list-unstyled d-flex align-content-center justify-content-center">
                                            <li><a href="javascript:void(0)"><i class="fab fa-facebook-square"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-twitter-square"></i></a></li>
                                        </ul> <!-- /.client__socials -->
                                    </div> <!-- /.client__desc -->
                                </div> <!-- /.client__profile -->
                            </div> <!-- /.clients__content-card -->
                        </div>

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="clients__content-card">
                                <div class="client__profile">
                                    <img class="img-fluid client__profile-image" src="./assets/img/clients/11.jpg" alt="Clients Image" />
                                    <div class="client__desc d-flex align-content-center justify-content-end flex-column">
                                        <h3 class="client__name">Client</h3>
                                        <span class="client__title">title</span>

                                        <!-- Socials -->
                                        <ul class="client__socials list-unstyled d-flex align-content-center justify-content-center">
                                            <li><a href="javascript:void(0)"><i class="fab fa-facebook-square"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-twitter-square"></i></a></li>
                                        </ul> <!-- /.client__socials -->
                                    </div> <!-- /.client__desc -->
                                </div> <!-- /.client__profile -->
                            </div> <!-- /.clients__content-card -->
                        </div>

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="clients__content-card">
                                <div class="client__profile">
                                    <img class="img-fluid client__profile-image" src="./assets/img/clients/12.jpg" alt="Clients Image" />
                                    <div class="client__desc d-flex align-content-center justify-content-end flex-column">
                                        <h3 class="client__name">Client</h3>
                                        <span class="client__title">title</span>

                                        <!-- Socials -->
                                        <ul class="client__socials list-unstyled d-flex align-content-center justify-content-center">
                                            <li><a href="javascript:void(0)"><i class="fab fa-facebook-square"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-twitter-square"></i></a></li>
                                        </ul> <!-- /.client__socials -->
                                    </div> <!-- /.client__desc -->
                                </div> <!-- /.client__profile -->
                            </div> <!-- /.clients__content-card -->
                        </div>

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="clients__content-card">
                                <div class="client__profile">
                                    <img class="img-fluid client__profile-image" src="./assets/img/clients/13.jpg" alt="Clients Image" />
                                    <div class="client__desc d-flex align-content-center justify-content-end flex-column">
                                        <h3 class="client__name">Client</h3>
                                        <span class="client__title">title</span>

                                        <!-- Socials -->
                                        <ul class="client__socials list-unstyled d-flex align-content-center justify-content-center">
                                            <li><a href="javascript:void(0)"><i class="fab fa-facebook-square"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-twitter-square"></i></a></li>
                                        </ul> <!-- /.client__socials -->
                                    </div> <!-- /.client__desc -->
                                </div> <!-- /.client__profile -->
                            </div> <!-- /.clients__content-card -->
                        </div>

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="clients__content-card">
                                <div class="client__profile">
                                    <img class="img-fluid client__profile-image" src="./assets/img/clients/14.jpg" alt="Clients Image" />
                                    <div class="client__desc d-flex align-content-center justify-content-end flex-column">
                                        <h3 class="client__name">Client</h3>
                                        <span class="client__title">title</span>

                                        <!-- Socials -->
                                        <ul class="client__socials list-unstyled d-flex align-content-center justify-content-center">
                                            <li><a href="javascript:void(0)"><i class="fab fa-facebook-square"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-twitter-square"></i></a></li>
                                        </ul> <!-- /.client__socials -->
                                    </div> <!-- /.client__desc -->
                                </div> <!-- /.client__profile -->
                            </div> <!-- /.clients__content-card -->
                        </div>

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="clients__content-card">
                                <div class="client__profile">
                                    <img class="img-fluid client__profile-image" src="./assets/img/clients/15.jpg" alt="Clients Image" />
                                    <div class="client__desc d-flex align-content-center justify-content-end flex-column">
                                        <h3 class="client__name">Client</h3>
                                        <span class="client__title">title</span>

                                        <!-- Socials -->
                                        <ul class="client__socials list-unstyled d-flex align-content-center justify-content-center">
                                            <li><a href="javascript:void(0)"><i class="fab fa-facebook-square"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-twitter-square"></i></a></li>
                                        </ul> <!-- /.client__socials -->
                                    </div> <!-- /.client__desc -->
                                </div> <!-- /.client__profile -->
                            </div> <!-- /.clients__content-card -->
                        </div>

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="clients__content-card">
                                <div class="client__profile">
                                    <img class="img-fluid client__profile-image" src="./assets/img/clients/16.jpg" alt="Clients Image" />
                                    <div class="client__desc d-flex align-content-center justify-content-end flex-column">
                                        <h3 class="client__name">Client</h3>
                                        <span class="client__title">title</span>

                                        <!-- Socials -->
                                        <ul class="client__socials list-unstyled d-flex align-content-center justify-content-center">
                                            <li><a href="javascript:void(0)"><i class="fab fa-facebook-square"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-twitter-square"></i></a></li>
                                        </ul> <!-- /.client__socials -->
                                    </div> <!-- /.client__desc -->
                                </div> <!-- /.client__profile -->
                            </div> <!-- /.clients__content-card -->
                        </div>

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="clients__content-card">
                                <div class="client__profile">
                                    <img class="img-fluid client__profile-image" src="./assets/img/clients/17.jpg" alt="Clients Image" />
                                    <div class="client__desc d-flex align-content-center justify-content-end flex-column">
                                        <h3 class="client__name">Client</h3>
                                        <span class="client__title">title</span>

                                        <!-- Socials -->
                                        <ul class="client__socials list-unstyled d-flex align-content-center justify-content-center">
                                            <li><a href="javascript:void(0)"><i class="fab fa-facebook-square"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-twitter-square"></i></a></li>
                                        </ul> <!-- /.client__socials -->
                                    </div> <!-- /.client__desc -->
                                </div> <!-- /.client__profile -->
                            </div> <!-- /.clients__content-card -->
                        </div>

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="clients__content-card">
                                <div class="client__profile">
                                    <img class="img-fluid client__profile-image" src="./assets/img/clients/18.jpg" alt="Clients Image" />
                                    <div class="client__desc d-flex align-content-center justify-content-end flex-column">
                                        <h3 class="client__name">Client</h3>
                                        <span class="client__title">title</span>

                                        <!-- Socials -->
                                        <ul class="client__socials list-unstyled d-flex align-content-center justify-content-center">
                                            <li><a href="javascript:void(0)"><i class="fab fa-facebook-square"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-twitter-square"></i></a></li>
                                        </ul> <!-- /.client__socials -->
                                    </div> <!-- /.client__desc -->
                                </div> <!-- /.client__profile -->
                            </div> <!-- /.clients__content-card -->
                        </div>

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="clients__content-card">
                                <div class="client__profile">
                                    <img class="img-fluid client__profile-image" src="./assets/img/clients/19.jpg" alt="Clients Image" />
                                    <div class="client__desc d-flex align-content-center justify-content-end flex-column">
                                        <h3 class="client__name">Client</h3>
                                        <span class="client__title">title</span>

                                        <!-- Socials -->
                                        <ul class="client__socials list-unstyled d-flex align-content-center justify-content-center">
                                            <li><a href="javascript:void(0)"><i class="fab fa-facebook-square"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-twitter-square"></i></a></li>
                                        </ul> <!-- /.client__socials -->
                                    </div> <!-- /.client__desc -->
                                </div> <!-- /.client__profile -->
                            </div> <!-- /.clients__content-card -->
                        </div>

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="clients__content-card">
                                <div class="client__profile">
                                    <img class="img-fluid client__profile-image" src="./assets/img/clients/20.jpg" alt="Clients Image" />
                                    <div class="client__desc d-flex align-content-center justify-content-end flex-column">
                                        <h3 class="client__name">Client</h3>
                                        <span class="client__title">title</span>

                                        <!-- Socials -->
                                        <ul class="client__socials list-unstyled d-flex align-content-center justify-content-center">
                                            <li><a href="javascript:void(0)"><i class="fab fa-facebook-square"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-twitter-square"></i></a></li>
                                        </ul> <!-- /.client__socials -->
                                    </div> <!-- /.client__desc -->
                                </div> <!-- /.client__profile -->
                            </div> <!-- /.clients__content-card -->
                        </div>

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="clients__content-card">
                                <div class="client__profile">
                                    <img class="img-fluid client__profile-image" src="./assets/img/clients/21.jpg" alt="Clients Image" />
                                    <div class="client__desc d-flex align-content-center justify-content-end flex-column">
                                        <h3 class="client__name">Client</h3>
                                        <span class="client__title">title</span>

                                        <!-- Socials -->
                                        <ul class="client__socials list-unstyled d-flex align-content-center justify-content-center">
                                            <li><a href="javascript:void(0)"><i class="fab fa-facebook-square"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-twitter-square"></i></a></li>
                                        </ul> <!-- /.client__socials -->
                                    </div> <!-- /.client__desc -->
                                </div> <!-- /.client__profile -->
                            </div> <!-- /.clients__content-card -->
                        </div>

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="clients__content-card">
                                <div class="client__profile">
                                    <img class="img-fluid client__profile-image" src="./assets/img/clients/22.jpg" alt="Clients Image" />
                                    <div class="client__desc d-flex align-content-center justify-content-end flex-column">
                                        <h3 class="client__name">Client</h3>
                                        <span class="client__title">title</span>

                                        <!-- Socials -->
                                        <ul class="client__socials list-unstyled d-flex align-content-center justify-content-center">
                                            <li><a href="javascript:void(0)"><i class="fab fa-facebook-square"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-twitter-square"></i></a></li>
                                        </ul> <!-- /.client__socials -->
                                    </div> <!-- /.client__desc -->
                                </div> <!-- /.client__profile -->
                            </div> <!-- /.clients__content-card -->
                        </div>

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="clients__content-card">
                                <div class="client__profile">
                                    <img class="img-fluid client__profile-image" src="./assets/img/clients/23.jpg" alt="Clients Image" />
                                    <div class="client__desc d-flex align-content-center justify-content-end flex-column">
                                        <h3 class="client__name">Client</h3>
                                        <span class="client__title">title</span>

                                        <!-- Socials -->
                                        <ul class="client__socials list-unstyled d-flex align-content-center justify-content-center">
                                            <li><a href="javascript:void(0)"><i class="fab fa-facebook-square"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-twitter-square"></i></a></li>
                                        </ul> <!-- /.client__socials -->
                                    </div> <!-- /.client__desc -->
                                </div> <!-- /.client__profile -->
                            </div> <!-- /.clients__content-card -->
                        </div>

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="clients__content-card">
                                <div class="client__profile">
                                    <img class="img-fluid client__profile-image" src="./assets/img/clients/24.jpg" alt="Clients Image" />
                                    <div class="client__desc d-flex align-content-center justify-content-end flex-column">
                                        <h3 class="client__name">Client</h3>
                                        <span class="client__title">title</span>

                                        <!-- Socials -->
                                        <ul class="client__socials list-unstyled d-flex align-content-center justify-content-center">
                                            <li><a href="javascript:void(0)"><i class="fab fa-facebook-square"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-twitter-square"></i></a></li>
                                        </ul> <!-- /.client__socials -->
                                    </div> <!-- /.client__desc -->
                                </div> <!-- /.client__profile -->
                            </div> <!-- /.clients__content-card -->
                        </div>

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="clients__content-card">
                                <div class="client__profile">
                                    <img class="img-fluid client__profile-image" src="./assets/img/clients/25.jpg" alt="Clients Image" />
                                    <div class="client__desc d-flex align-content-center justify-content-end flex-column">
                                        <h3 class="client__name">Client</h3>
                                        <span class="client__title">title</span>

                                        <!-- Socials -->
                                        <ul class="client__socials list-unstyled d-flex align-content-center justify-content-center">
                                            <li><a href="javascript:void(0)"><i class="fab fa-facebook-square"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-twitter-square"></i></a></li>
                                        </ul> <!-- /.client__socials -->
                                    </div> <!-- /.client__desc -->
                                </div> <!-- /.client__profile -->
                            </div> <!-- /.clients__content-card -->
                        </div>

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="clients__content-card">
                                <div class="client__profile">
                                    <img class="img-fluid client__profile-image" src="./assets/img/clients/26.jpg" alt="Clients Image" />
                                    <div class="client__desc d-flex align-content-center justify-content-end flex-column">
                                        <h3 class="client__name">Client</h3>
                                        <span class="client__title">title</span>

                                        <!-- Socials -->
                                        <ul class="client__socials list-unstyled d-flex align-content-center justify-content-center">
                                            <li><a href="javascript:void(0)"><i class="fab fa-facebook-square"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-twitter-square"></i></a></li>
                                        </ul> <!-- /.client__socials -->
                                    </div> <!-- /.client__desc -->
                                </div> <!-- /.client__profile -->
                            </div> <!-- /.clients__content-card -->
                        </div>

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="clients__content-card">
                                <div class="client__profile">
                                    <img class="img-fluid client__profile-image" src="./assets/img/clients/27.jpg" alt="Clients Image" />
                                    <div class="client__desc d-flex align-content-center justify-content-end flex-column">
                                        <h3 class="client__name">Client</h3>
                                        <span class="client__title">title</span>

                                        <!-- Socials -->
                                        <ul class="client__socials list-unstyled d-flex align-content-center justify-content-center">
                                            <li><a href="javascript:void(0)"><i class="fab fa-facebook-square"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-twitter-square"></i></a></li>
                                        </ul> <!-- /.client__socials -->
                                    </div> <!-- /.client__desc -->
                                </div> <!-- /.client__profile -->
                            </div> <!-- /.clients__content-card -->
                        </div>

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="clients__content-card">
                                <div class="client__profile">
                                    <img class="img-fluid client__profile-image" src="./assets/img/clients/28.jpg" alt="Clients Image" />
                                    <div class="client__desc d-flex align-content-center justify-content-end flex-column">
                                        <h3 class="client__name">Client</h3>
                                        <span class="client__title">title</span>

                                        <!-- Socials -->
                                        <ul class="client__socials list-unstyled d-flex align-content-center justify-content-center">
                                            <li><a href="javascript:void(0)"><i class="fab fa-facebook-square"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-twitter-square"></i></a></li>
                                        </ul> <!-- /.client__socials -->
                                    </div> <!-- /.client__desc -->
                                </div> <!-- /.client__profile -->
                            </div> <!-- /.clients__content-card -->
                        </div>

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="clients__content-card">
                                <div class="client__profile">
                                    <img class="img-fluid client__profile-image" src="./assets/img/clients/29.jpg" alt="Clients Image" />
                                    <div class="client__desc d-flex align-content-center justify-content-end flex-column">
                                        <h3 class="client__name">Client</h3>
                                        <span class="client__title">title</span>

                                        <!-- Socials -->
                                        <ul class="client__socials list-unstyled d-flex align-content-center justify-content-center">
                                            <li><a href="javascript:void(0)"><i class="fab fa-facebook-square"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-twitter-square"></i></a></li>
                                        </ul> <!-- /.client__socials -->
                                    </div> <!-- /.client__desc -->
                                </div> <!-- /.client__profile -->
                            </div> <!-- /.clients__content-card -->
                        </div>

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="clients__content-card">
                                <div class="client__profile">
                                    <img class="img-fluid client__profile-image" src="./assets/img/clients/30.jpg" alt="Clients Image" />
                                    <div class="client__desc d-flex align-content-center justify-content-end flex-column">
                                        <h3 class="client__name">Client</h3>
                                        <span class="client__title">title</span>

                                        <!-- Socials -->
                                        <ul class="client__socials list-unstyled d-flex align-content-center justify-content-center">
                                            <li><a href="javascript:void(0)"><i class="fab fa-facebook-square"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-twitter-square"></i></a></li>
                                        </ul> <!-- /.client__socials -->
                                    </div> <!-- /.client__desc -->
                                </div> <!-- /.client__profile -->
                            </div> <!-- /.clients__content-card -->
                        </div>
                    </div> <!-- /.row -->
                </div> <!-- /.clients__content -->

                <div class="text-center mt--50">
                    <a href="javascript:void(0)" class="primary__button">View all</a>
                </div>
            </div> <!-- /.container -->
        </section> <!-- /.clients -->
        
        <!--========================= OUR TEAMS =========================-->
        <section class="section clients section__padding-t" id="teams">
            <div class="container">
                <div class="section__header">
                    <h1 class="section__title">আমাদের টীম </h1>
                    <span class="section__subtitle">আমরা সততা নিষ্ঠা ও দৃঢ়তার সাথে কাজ করে যাচ্ছি I 
                    </span>
                </div> <!-- /.section__header -->

                <!--=========== Clients Content ===========-->
                <div class="clients__content">
                    <div class="row g-0 g--30">
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="clients__content-card">
                                <div class="client__profile">
                                    <img class="img-fluid client__profile-image" src="./assets/img/team/sohel.jpg" alt="team Image" />
                                    <div class="client__desc d-flex align-content-center justify-content-end flex-column">
                                        <h3 class="client__name">Sohel</h3>
                                        <span class="client__title"> Chairmen </span>

                                        <!--========== SOCIALS ==========-->
                                        <ul class="client__socials list-unstyled d-flex align-content-center justify-content-center">
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fab fa-facebook-square"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fab fa-twitter-square"></i>
                                                </a>
                                            </li>
                                        </ul> <!-- /.client__socials -->
                                    </div> <!-- /.client__desc -->
                                </div> <!-- /.client__profile -->
                            </div> <!-- /.clients__content-card -->
                        </div> <!-- /.col- -->

<!-- custom member loop -->
                        @foreach($teams as $team)
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="clients__content-card">
                                <div class="client__profile">
                                    <img class="img-fluid client__profile-image" src="{{asset('assets/img/team/'.$team->image)}}" alt="Client Image" />
                                    <div class="client__desc d-flex align-content-center justify-content-end flex-column">
                                        <h3 class="client__name">{{$team->name}}</h3>
                                        <span class="client__title">{{$team->post}}</span>

                                        <!--========== SOCIALS ==========-->
                                        <ul class="client__socials list-unstyled d-flex align-content-center justify-content-center">
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fab fa-facebook-square"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fab fa-twitter-square"></i>
                                                </a>
                                            </li>
                                        </ul> <!-- /.client__socials -->
                                    </div> <!-- /.client__desc -->
                                </div> <!-- /.client__profile -->
                            </div> <!-- /.clients__content-card -->
                        </div> <!-- /.col- -->
@endforeach

<!-- custom member loop -->
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="clients__content-card">
                                <div class="client__profile">
                                    <img class="img-fluid client__profile-image" src="./assets/img/team/khaled.jpg " alt="Client Image" />
                                    <div class="client__desc d-flex align-content-center justify-content-end flex-column">
                                        <h3 class="client__name">Khaled</h3>
                                        <span class="client__title">Managing Director</span>

                                        <!--========== SOCIALS ==========-->
                                        <ul class="client__socials list-unstyled d-flex align-content-center justify-content-center">
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fab fa-facebook-square"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fab fa-twitter-square"></i>
                                                </a>
                                            </li>
                                        </ul> <!-- /.client__socials -->
                                    </div> <!-- /.client__desc -->
                                </div> <!-- /.client__profile -->
                            </div> <!-- /.clients__content-card -->
                        </div> <!-- /.col- -->

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="clients__content-card">
                                <div class="client__profile">
                                    <img class="img-fluid client__profile-image" src="./assets/img/team/raji-ahsan.jpg" alt="Client Image" />
                                    <div class="client__desc d-flex align-content-center justify-content-end flex-column">
                                        <h3 class="client__name">Raji Ahsan</h3>
                                        <span class="client__title">Cheif Oparation Officer</span>

                                        <!--========== SOCIALS ==========-->
                                        <ul class="client__socials list-unstyled d-flex align-content-center justify-content-center">
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fab fa-facebook-square"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fab fa-twitter-square"></i>
                                                </a>
                                            </li>
                                        </ul> <!-- /.client__socials -->
                                    </div> <!-- /.client__desc -->
                                </div> <!-- /.client__profile -->
                            </div> <!-- /.clients__content-card -->
                        </div> <!-- /.col- -->

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="clients__content-card">
                                <div class="client__profile">
                                    <img class="img-fluid client__profile-image" src="./assets/img/team/waliul-islam.jpg" alt="Client Image" />
                                    <div class="client__desc d-flex align-content-center justify-content-end flex-column">
                                        <h3 class="client__name">Waliul Islam</h3>
                                        <span class="client__title">Team Leader</span>

                                        <!--========== SOCIALS ==========-->
                                        <ul class="client__socials list-unstyled d-flex align-content-center justify-content-center">
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fab fa-facebook-square"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fab fa-twitter-square"></i>
                                                </a>
                                            </li>
                                        </ul> <!-- /.client__socials -->
                                    </div> <!-- /.client__desc -->
                                </div> <!-- /.client__profile -->
                            </div> <!-- /.clients__content-card -->
                        </div> <!-- /.col- -->


                <div class="text-center mt--50">
                    <a href="{{route('allteam')}}" class="primary__button">View all</a>
                </div>
            </div> <!-- /.container -->
        </section> <!-- /.clients -->
       
        <!--========================= FAQ =========================-->
        <section class="section faq" id="faq">
            <div class="container">
                <div class="section__header">
                    <h1 class="section__title">FAQ</h1>
                    <span class="section__subtitle">আপনার দরকারি প্রশ্নের উত্তর জেনে নিন 
                    </span>
                </div> <!-- /.section__header -->

                <!-- FAQ Lists -->
                <div class="faq__lists">
                    <dl>
                        <dt>
                            <div>
                                <i class="fas fa-chevron-right start__icon"></i> বুস্টিং এর চার্জ কেমন আপনাদের ?
                            </div>
                            <i class="fas fa-chevron-down end__icon"></i>
                        </dt>
                        <dd><strong>উত্তর :</strong> বুস্টিং এর চার্জ ডলার রেট এর উপরে নির্ভর করে I 
আমরা ডলার রেট এর উপরে ১০-১৫% সার্ভিস চার্জ নির্ধারণ করেন কাজের ভিত্তির উপরে নির্ভর করে I
                        </dd>

                        <dt>
                            <div>
                                <i class="fas fa-chevron-right start__icon"></i> বুস্টিং করার জন্যে কি করতে হবে ?
                            </div>
                            <i class="fas fa-chevron-down end__icon"></i>
                        </dt>
                        <dd><strong>Ans:</strong> বুস্টিং করার জন্যে আমাদের হোয়াটস্যাপ নম্বর নক দিতে হবে I 
তারপরে একটা প্যাকেজ নির্বাচন করতে হবে কিংবা আপনার সুবিধামতো বাজেট আলোচনা করে আমাদের একটা আইডিকে এডিটর করতে হবে I 
তারপরে ১ -৬ ঘন্টার মধ্যে আপনার এড একটিভ করে দেয়া হবে 
                        </dd>

                        <dt>
                            <div>
                                <i class="fas fa-chevron-right start__icon"></i> আপনাদের অফিস কোথায় ?

                            </div>
                            <i class="fas fa-chevron-down end__icon"></i>
                        </dt>
                        <dd><strong>Ans:</strong> আমাদের ঠিকানা ? গ-৯, শাহজাদপুর , গুলশান , ঢাকা ১২১২ (ঢাকা ব্যাংকের বিপরীতে )

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
        </section> <!-- /.categories -->

        <!--========================= Contact =========================-->
        <section class="section contact section__padding-t" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-6">
                        <div>
                            <h3 class="contact__section-title text-capitalize">যোগাযোগ </h3>
                            <p class="contact__section-text">আপনার যদি কোনো অভিযোগ / পরামর্শ কিংবা কোনো সার্ভিস নিয়ে জানার আগ্রহ থাকে তাইলেআমাদেরকে ইমেইল করে রাখতে পারেন  আমরা দ্রুত উত্তর জানানোর চেষ্টা করবো
                            </p>
                        </div>
                    </div> <!-- /.col- -->
                </div> <!-- /.row -->

                <div class="row g-0 g--40">
                    <div class="col-lg-6">
                        <!--=========== Contact Form ===========-->
                        <div class="contact__form">
                            <form action="{{route('contact.store')}}" method="POST">
                                @csrf
                                <div class="input__group">
                                <input type="hidden" name="userID" value="{{Auth::user()->id}}">
                                    <input type="text" name="name" id="name" class="input form-control" placeholder="আপনার নাম " autocomplete="off" />
                                    
                                </div> <!-- /.input__group -->

                               
                                <div class="input__group">
                                    <input type="number" name="phone" id="phone" class="input" placeholder="ফোন নম্বর" autocomplete="off" />
                                    <input type="email" name="email" id="email" class="input" placeholder="ইমেইল " autocomplete="off" />
                                </div> <!-- /.input__group -->

                                <div class="input__single">
                                    <input type="text" name="worktype" id="worktype" class="input" placeholder="কাজের ধরণ" autocomplete="off" />
                                </div> <!-- /.input__single -->

                                <div class="input__single">
                                    <input type="number" name="budget" id="budget" class="input" placeholder="বাজেট" autocomplete="off" />
                                </div> <!-- /.input__single -->
                                
                                <div class="input__single">
                                    <textarea name="details" id="details" cols="30" rows="3" class="input" placeholder="বিস্তারিত জানান"></textarea>
                                </div> <!-- /.input__single -->

                                <div class="text-end">
                                    <input type="submit" value="পাঠিয়ে দিন" class="input__button" />
                                </div>
                            </form>
                        </div> <!-- /.contact__form -->
                    </div> <!-- /.col- -->

                    <div class="col-md-9 col-lg-6 mx-auto">
                        <div class="contact__image">
                            <img src="{{asset('./assets/img/contact/contact.png')}}" alt="Contact Image" class="img-fluid" />
                        </div>

                        <ul class="contact__socials list-unstyled d-flex align-items-center justify-content-center">
                            <li><a href="javascript:void(0)"><i class="fab fa-whatsapp"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fab fa-facebook-messenger"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fab fa-whatsapp"></i> <a href="https://wa.link/xaschl/"></a></a></li>
                        </ul> <!-- /.contact__socials -->
                    </div> <!-- /.col- -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </section> <!-- /.contact -->

    </main> <!-- /#main -->
@endsection  