<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="Web description" />
    <meta name="author" content="Web owner name" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- web title -->
    <title>@yield('title')</title>

    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{asset('./assets/img/header/favicon.png')}}" type="image/x-icon" />
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" type="text/css" media="all" />

    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' />
    <!-- main file -->
    <link rel="stylesheet" href="{{asset('./user/assets/css/style.min.css')}}" />




    <!-- Plugin css -->
    <link rel="stylesheet" href="{{asset('./assets/css/plugin.css')}}" type="text/css" media="all" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('./assets/css/bootstrap.min.css')}}" type="text/css" media="all" />
    <!-- Swiper Slider -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" type="text/css" media="all" />
    <!-- main CSS -->
    <link rel="stylesheet" href="{{asset('./assets/css/style.css')}}" type="text/css" media="all" />
    <!-- responsive CSS -->
    <link rel="stylesheet" href="{{asset('./assets/css/responsive.css')}}" type="text/css" media="all" />

    <!--[if lt IE 9]>
        <script src="bower_components/html5shiv/dist/html5shiv.js"></script>
    <![endif]-->
</head>

<body>
@include('user.layouts.navbar')
@yield('content')
@include('user.layouts.footer')
    <!--========= ALL JS FILE LINK =========-->
    <!-- Bootstrap -->
    <script src="{{asset('./assets/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Swiper -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <!-- jQuery -->
    <script src="{{asset('./assets/js/jquery-3.6.0.min.js')}}"></script>
    <!-- Plugin -->
    <script src="{{asset('./assets/js/plugin.js')}}"></script>
    <!-- Main js -->
    <script src="{{asset('./assets/js/main.js')}}"></script>
</body>

</html>