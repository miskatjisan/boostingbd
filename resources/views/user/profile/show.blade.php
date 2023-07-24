@extends('user.layouts.master')
@section('title','Update Profile')
@section('content')
    <!--========================= MAIN =========================-->
    <main id="main">

        <div class="account__settings">
            <div class="container-fluid">

                <div class="row g-0 g--30">
                    <div class="col-md-4">
                        <!--============= Sidebar Main ==============-->
                        <div class="sidebar__main">
                            <div class="sidebar__main-logo">
                                <!-- <img src="#" alt="Business Logo" /> -->
                                <a href="Home page.html">Your Profile</a>
                            </div> <!-- /.sidebar__main-logo -->

                            <ul class="sidebar__main-menus list-unstyled">
                            <li class="active"><a href="{{route('profile')}}">View Profile</a></li>
                                <li ><a href="{{route('profile.edit')}}">Update Profile</a></li>
                                <li><a href="{{route('balance.create')}}">Settings</a></li>
                               
                            </ul> <!-- /.sidebar__main-menus -->
                        </div> <!-- /.sidebar__main -->
                    </div> <!-- /.col -->

                    <div class="col-md-8">
                        <!--=========== Profile Settings ===========-->
                        <section class="section profile__settings section__padding-t __2">
                            <div class="section__header mb--60">
                                <div class="profile d-flex align-items-end">
                                    <div class="profile__img">
                                        <img src="{{asset('assets/img/'.$data->image)}}" alt="Profile" />
                                    </div> <!-- /.profile__img -->
                                   
                                     
                                    <div class="profile__content">
                                        <h2 class="profile__name">{{$data->fname}} {{$data->lname}}<br class="d-none d-sm-inline" />{{$data->username}}</h2>
                                       
                                    </div>
                                </div> <!-- /.profile -->
                            </div> <!-- /.section__header -->

                            <!-- Change Account Info -->
                            <div class="change__account-info box__container">
                                <h3 class="settings__title">Change Account Informations</h3>
                                <div>
                                    <div class="set__input-group">
                                        <label for="firstName">First Name</label>
                                        <label for="firstName">{{$data->fname}}</label>
                                       
                                    </div> <!-- /.set__input-group -->
                                    
                                    <div class="set__input-group">
                                        <label for="lastName">Last Name</label>
                                        <label for="firstName">{{$data->lname}}</label>
                                    </div> <!-- /.set__input-group -->
                                    
                                    <div class="set__input-group">
                                        <label for="userName">Username</label>
                                        <label for="firstName">{{$data->username}}</label>
                                    </div> <!-- /.set__input-group -->
                                    
                                    <div class="set__input-group">
                                        <label for="email">E-mail</label>
                                        <label for="firstName">{{$data->email}}</label>
                                    </div> <!-- /.set__input-group -->
                                    <div class="set__input-group">
                                        <label for="email">Phone</label>
                                        <label for="firstName">{{$data->phone}}</label>
                                    </div> <!-- /.set__input-group -->
                                    
                                    <div class="set__input-group">
                                        <label for="nid">NID</label>
                                        <label for="firstName">{{$data->nid}}</label>
                                    </div> <!-- /.set__input-group -->
                                </div>
                            </div> <!-- /.change__account-info -->

                 
                            </div> <!-- /.settings__footer -->
                        </section> <!-- /.profile__settings -->
                    </div> <!-- /.col -->
                </div> <!-- /.row -->
            </div> <!-- /.container-fluid -->
        </div> <!-- /.account__settings -->

        <!-- <div class="section__padding-t"></div> -->

    </main> <!-- /#main -->
    @endsection  