<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="Web description" />
    <meta name="author" content="Web owner name" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- web title -->
    <title>Sign Up | Boosting BD</title>

    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{asset('./assets/img/header/favicon.png')}}" type="image/x-icon" />
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" type="text/css" media="all" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('./assets/css/bootstrap.min.css')}}" type="text/css" media="all" />
    <!-- Swiper Slider -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" type="text/css" media="all" />
    <!-- Plugin Css -->
    <link rel="stylesheet" href="{{asset('./assets/css/plugin.css')}}" type="text/css" media="all" />
    <!-- main CSS -->
    <link rel="stylesheet" href="{{asset('./assets/css/style.css')}}" type="text/css" media="all" />
    <!-- responsive CSS -->
    <link rel="stylesheet" href="{{asset('./assets/css/responsive.css')}}" type="text/css" media="all" />

</head>

<body>
    <!--========================= MAIN =========================-->
    <main id="main">

        <!--======== Sign Up =======-->
        <section class="sign__up">
            <div class="sign__log-container container-fluid">
                <div class="sign__log-contents">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-7">
                            <div class="img__bx">
                                <img src="{{asset('./assets/img/sign-up.png')}}" alt="Sign Up Image" />
                            </div> <!-- /.img__bx -->
                        </div> <!-- /.col- -->
                        
                        <div class="col-md-5">
                            <div class="sign__log-data">
                                <div class="section__header">
                                    <h2 class="section__title text-start">Sign Up</h2>
                                    <span class="section__subtitle text-start">Please signup or login our website</span>
                                </div> <!-- /.section__header -->

                                <div class="sign__with">
                                    <a href="javascript:void(0)" class="sign__with-btn">
                                        <i class="fab fa-facebook-f sign__with-icon"></i>
                                        Sign up with facebook
                                    </a>
                                    <a href="javascript:void(0)" class="sign__with-btn">
                                        <i class="fab fa-google sign__with-icon"></i>
                                        Sign up with google
                                    </a>
                                </div> <!-- /.sign__with -->

                                <form action="{{ route('register.post') }}" method="POST" class="sign__log-forms">
                                    @csrf
                                    <div class="input__group">
                                        <div class="input__single">
                                            <label for="fname" class="text-uppercase">First Name</label>
                                            <input type="text" placeholder="Enter your name" class="input" name="fname" autocomplete="off" id="fname"/>
                                            @if ($errors->has('fname'))
                                        <span class="text-danger">{{ $errors->first('fname') }}</span>
                                        @endif
                                        </div> 
                                        
                                        <div class="input__single">
                                            <label for="lname" class="text-uppercase">Last Name</label>
                                            <input type="text" placeholder="Enter your name" class="input" name="lname" autocomplete="off" id="lname"/>
                                            @if ($errors->has('lname'))
                                        <span class="text-danger">{{ $errors->first('lname') }}</span>
                                        @endif
                                        </div><!-- /.input__single -->

                                        <div class="input__single">
                                            <label for="email" class="text-uppercase">Email</label>
                                            <input type="email" placeholder="uiuxmdomith@gmail.com" name="email" class="input" autocomplete="off" id="email"/>
                                            @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div> <!-- /.input__single -->
                                    </div> <!-- /.input__group -->
                                    
                                    <div class="input__group">
                                        <div class="input__single">
                                            <label for="password" class="text-uppercase">Password</label>
                                            <div class="input__box">
                                                <input type="password" class="input" name="password" placeholder="************" id="password" />
                                                <i class="input__icon"></i>
                                                @if ($errors->has('password'))
                                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                              @endif
                                            </div> <!-- /.input__box -->
                                        </div> <!-- /.input__single -->

                                        <div class="input__single">
                                            <label for="confPass" class="text-uppercase">Confirm Password</label>
                                            <div class="input__box">
                                                <input type="password" class="input" placeholder="************" id="confPass" />
                                                <i class="input__icon"></i>
                                            </div> <!-- /.input__box -->
                                        </div> <!-- /.input__single -->
                                    </div> <!-- /.input__group -->

                                    <div class="save__info d-flex mb--30">
                                        <div>
                                            <div class="input__checkbox">
                                                <input type="checkbox" name="Save Info" id="saveInfo">
                                                <i class="fas fa-check"></i>
                                            </div> <!-- /.input__checkbox -->
                                        </div>
                                        <label for="saveInfo">I aegree with all terms and conditions and privacy<br class="d-md-none d-lg-inline" /> 
                                            of website
                                        </label>
                                    </div> <!-- /.save__info -->

                                    <!-- <input type="submit" value="Sign Up" class="primary__button submit__btn mb--30" /> -->
                                    <button type="submit"  class="primary__button submit__btn mb--30">Sign Up</button>
                                   

                                    <p class="form__footer-text">Already have an account? <a href="javascript:void(0)" class="link">Sign In</a></p>
                                </form> <!-- /.sign__log-forms -->
                            </div> <!-- /.sign__log-data -->
                        </div> <!-- /.col- -->
                    </div> <!-- /.row -->
                </div> <!-- /.sign__log-contents -->
            </div> <!-- /.sign__log-container -->
        </section> <!-- /.sign__up -->
        
    </main> <!-- /#main -->

    <!--========= ALL JS FILE LINK =========-->
    <!-- Bootstrap -->
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <!-- Swiper -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <!-- jQuery -->
    <script src="./assets/js/jquery-3.6.0.min.js"></script>
    <!-- Slick Slider -->
    <script src="./assets/js/plugin.js"></script>
    <!-- Main js -->
    <script src="./assets/js/main.js"></script>
</body>

</html>