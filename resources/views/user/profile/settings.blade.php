@extends('user.layouts.master')
@section('title','Profile Settings')
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
                                <a href="">Your Profile</a>
                            </div> <!-- /.sidebar__main-logo -->

                            <ul class="sidebar__main-menus list-unstyled">
                            <li><a href="{{route('profile')}}">View Profile</a></li>
                                <li><a href="{{route('profile.edit')}}">Update Profile</a></li>
                                <li class="active"><a href="{{route('balance.create')}}">Settings</a></li>
                               
                            </ul> <!-- /.sidebar__main-menus -->
                        </div> <!-- /.sidebar__main -->
                    </div> <!-- /.col -->

                    <div class="col-md-8">
                        <!--=========== Profile Settings ===========-->
                        <section class="section profile__settings section__padding-t __2">
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                        @endif
                        

                            <div class="section__header mb--60">
                                <div class="profile d-flex align-items-end">
                                    <div class="profile__img">
                                        <img src="{{asset('assets/img/'.$data->image)}}" alt="Profile" />
                                    </div> <!-- /.profile__img -->
                                    <div class="profile__content">
                                        <h2 class="profile__name">{{$data->username}} Your Balance: {{$UserTotalBalance}} Taka</h2>
                                        
                                    <div class="alert alert-error">
                                    <p style="color:red"> <?php  if($UserTotalBalance <= 10) {
                                        echo "Your Acount blance is Running Low! Please Recharge.";} ?> 
                                        </p>
                                     </div>
                                    
                                    </div>
                                </div> <!-- /.profile -->
                            </div> <!-- /.section__header -->
                            <!-- Recharge Your Account  -->
                            <div class="change__account-info box__container">
                                <h3 class="settings__title">Recharge Your Account</h3>
                            </div>
                                <form action="{{ route('balance.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                    <div class="set__input-group">
                                        <input type="hidden" class="input" id="useremail" name="useremail" value="{{Auth::user()->email}}"/>
                                    </div> <!-- /.set__input-group -->

                                @error('paynumber')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                    <div class="set__input-group">
                                        <label for="paynumber">আপনি যেই নম্বর থেকে সেন্ড করেছেন নম্বরটি টাইপ করুন</label>
                                        <input type="text" class="input" placeholder="example +8801xxxxxxxx" id="paynumber" name="paynumber" />
                                    </div> <!-- /.set__input-group -->
                                    
                                    @error('trackid')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                    <div class="set__input-group">
                                        <label for="trackid">ট্রাজেকশন আইডি দিন</label>
                                        <input type="text" class="input" placeholder="Example- xxx-xxx-xxx-xxxx" id="trackid" name="trackid"/>
                                    </div> <!-- /.set__input-group -->

                                    @error('amount')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                    <div class="set__input-group">
                                        <label for="amount">আপনি কত টাকা রিচার্জ করতে চান ?</label>
                                        <input type="number" class="input" placeholder="example- 500" id="amount" name="amount"/> Taka
                                    </div> 
                                    
                                    <div class="set__input-group">
                                    <label for="screenshort">স্ক্রিনশট দিন (optional)</label>
                                    <input type="file" id="inputFile" name="screenshort" class="input__file inputfile-2" data-multiple-caption="{count} files selected" multiple />
                                            <label for="inputFile">
                                                <span>Choose a file</span>
                                            </label>
                                    </div> <!-- /.set__input-group --> 
                                    <div class="text-end">
                                    <input type="submit" value="Recharge" class="input__button" />
                                </div>
                                </form>   
                                
                                </div>
                               
                            
                        </section> <!-- /.profile__settings -->
                    </div> <!-- /.col -->
                </div> <!-- /.row -->
            </div> <!-- /.container-fluid -->
        </div> <!-- /.account__settings -->

        <!-- <div class="section__padding-t"></div> -->

    </main> <!-- /#main -->
    @endsection  