    <!--========================= HEADER =========================-->
    <header class="header fixed-top" id="header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- LOGO -->
                <a class="navbar-brand" href="/">
                    <img src="./assets/img/header/logo.png" alt="Logo" class="img-fluid" />
                </a> <!-- /.navbar-brand -->

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> <!-- /.navbar-toggler -->

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                       @guest 
                       <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('login')}}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('register')}}">Registration</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#home">হোম</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">আমাদের সম্পর্কে </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('service.create')}}">সার্ভিস</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#clients">ক্লায়েন্টগন</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('allteam')}}">টীম</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#pricing">চার্জসমূহ</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('payment.create')}}">পেমেন্ট</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav__button" style="color:white;" href="#contact">যোগাযোগ করুন </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav__button" style="color:white;" href="{{ route('logout') }}">Logout</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('profile')}}">{{Auth::user()->fname}} {{Auth::user()->lname}}</a>
                        </li>
                        @endguest
                    </ul>
                </div> <!-- /.collapse -->
            </div> <!-- /.container -->
        </nav> <!-- /.navbar -->
    </header> <!-- /.header#header -->