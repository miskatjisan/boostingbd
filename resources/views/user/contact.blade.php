@extends('user.layouts.master')
@section('title','Buy Service')
@section('content')
<main id="main">
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
</main>

@endsection