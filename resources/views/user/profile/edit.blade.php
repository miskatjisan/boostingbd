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
                            <li ><a href="{{route('profile')}}">View Profile</a></li>
                                <li class="active" ><a href="{{route('profile.edit')}}">Update Profile</a></li>
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
                                    <form action="{{route('profile.update')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                    <div class="profile__content">
                                        <h2 class="profile__name">{{$data->fname}} {{$data->lname}}<br class="d-none d-sm-inline" />{{$data->username}}</h2>
                                        <div class="profile__input-file">
                                            <input type="file" id="inputFile" name="image" class="input__file inputfile-2" data-multiple-caption="{count} files selected" multiple />
                                            <label for="inputFile">
                                                <span>Choose a file</span>
                                            </label>
                                        </div> <!-- /.profile__input-file -->
                                    </div>
                                </div> <!-- /.profile -->
                            </div> <!-- /.section__header -->

                            <!-- Change Account Info -->
                            <div class="change__account-info box__container">
                                <h3 class="settings__title">Change Account Informations</h3>
                                <div>
                                    <div class="set__input-group">
                                        <label for="firstName">First Name</label>
                                        <input type="text" class="input" placeholder="Write first name" id="firstName" name="fname" value="{{$data->fname}}"/>
                                    </div> <!-- /.set__input-group -->
                                    
                                    <div class="set__input-group">
                                        <label for="lastName">Last Name</label>
                                        <input type="text" class="input" placeholder="Write first name" id="lastName" name="lname" value="{{$data->lname}}"/>
                                    </div> <!-- /.set__input-group -->
                                    
                                    <div class="set__input-group">
                                        <label for="userName">Username</label>
                                        <input type="text" class="input" placeholder="Write username name" id="userName" name="username" value="{{$data->username}}"/>
                                    </div> <!-- /.set__input-group -->
                                    
                                    <div class="set__input-group">
                                        <label for="email">E-mail</label>
                                        <input type="text" class="input" placeholder="Write new email" id="email" name="email" value="{{$data->email}}"/>
                                    </div> <!-- /.set__input-group -->
                                    <div class="set__input-group">
                                        <label for="email">Phone</label>
                                        <input type="tel" class="input" placeholder="Write new phone Number" id="phone" name="phone" value="{{$data->phone}}"/>
                                    </div> <!-- /.set__input-group -->
                                    
                                    <div class="set__input-group">
                                        <label for="nid">NID</label>
                                        <input type="text" class="input" placeholder="Write new NID" id="nid" value="{{$data->nid}}"/>
                                    </div> <!-- /.set__input-group -->
                                </div>
                            </div> <!-- /.change__account-info -->

                            <!-- Change Password -->
                            <div class="change__password box__container">
                                <h3 class="settings__title">Change Password</h3>
                              </div>
                                    
                                    <div class="set__input-group">
                                        <label for="newPass">New password</label>
                                        <div class="input__box">
                                            <input type="text" class="input" placeholder="Write new password" name="password" id="newPass" value="{{$data->password}}"/>
                                            <i class="input__icon"></i>
                                        </div> <!-- /.input__box -->
                                    </div> <!-- /.set__input-group -->
                                    
                                </div>
                                <div class="text-end">
                                    <input type="submit" value="Update Profile" class="input__button" />
                                </div>
</form>
                            </div> <!-- /.change__password -->
                            </div> <!-- /.settings__footer -->
                        </section> <!-- /.profile__settings -->
                    </div> <!-- /.col -->
                </div> <!-- /.row -->
            </div> <!-- /.container-fluid -->
        </div> <!-- /.account__settings -->

        <!-- <div class="section__padding-t"></div> -->

    </main> <!-- /#main -->
    @endsection  