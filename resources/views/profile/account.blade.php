@extends('layouts.app')
@section('pageTitle', 'Profile')
@section('pageScripts')
<link href="../assets/pages/css/profile.css" rel="stylesheet" type="text/css" />

@endsection
@section('content')
			<div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN PROFILE SIDEBAR -->
                                <div class="profile-sidebar">
                                    <!-- PORTLET MAIN -->
                                    <div class="portlet light profile-sidebar-portlet ">
                                        <!-- SIDEBAR USERPIC -->
                                        <div class="profile-userpic">
                                            <img src="../assets/pages/media/profile/profile_user.jpg" class="img-responsive" alt=""> </div>
                                        <!-- END SIDEBAR USERPIC -->
                                        <!-- SIDEBAR USER TITLE -->
                                        <div class="profile-usertitle">
                                            <div class="profile-usertitle-name">{!! Auth::user()->name !!}</div>
                                            <div class="profile-usertitle-job"> {!! Auth::user()->role !!}</div>
                                        </div>
                                        <!-- END SIDEBAR USER TITLE -->
                                        <!-- SIDEBAR BUTTONS -->
                                        <div class="profile-userbuttons">
                                            <button type="button" class="btn btn-circle green btn-sm">Follow</button>
                                            <button type="button" class="btn btn-circle red btn-sm">Message</button>
										<div class="profile-usertitle-job" style="font-style:italic; margin-top:5px;">ID #{!! Auth::user()->id !!} </div>
                                        </div>
                                        <!-- END SIDEBAR BUTTONS -->
                                        <!-- SIDEBAR MENU -->
                                        <div class="profile-usermenu">
                                            <ul class="nav">
                                                <li class="active">
                                                    <a href="page_user_profile_1.html">
                                                        <i class="icon-home"></i>Personal Details</a>
                                                </li>
                                                <li class="">
                                                    <a href="page_user_profile_1_account.html">
                                                        <i class="icon-settings"></i> Account Settings </a>
                                                </li>
                                                <li>
                                                    <a href="page_user_profile_1_help.html">
                                                        <i class="icon-info"></i> Privacy Settings </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- END MENU -->
                                    </div>
                                    <!-- END PORTLET MAIN -->
                                    <!-- PORTLET MAIN -->
                                    <div class="portlet light ">
                                       <div>
                                            <h4 class="profile-desc-title">Social Media</h4>
                                            <span class="profile-desc-text"> These appear on your Gigbook profile</span>
                                            <div class="margin-top-20 profile-desc-link">
                                                <i class="fa fa-globe"></i>
                                                <a href="http://{!! Auth::user()->url !!}">{!! Auth::user()->url !!}</a>
                                            </div>
                                            <div class="margin-top-20 profile-desc-link">
                                                <i class="fa fa-twitter"></i>
                                                <a href="http://twitter.com/{!! Auth::user()->twitter !!}">{!! Auth::user()->twitter !!}</a>
                                            </div>
                                            <div class="margin-top-20 profile-desc-link">
                                                <i class="fa fa-facebook"></i>
                                                <a href="http://www.facebook.com/{!! Auth::user()->facebook !!}">{!! Auth::user()->facebook !!}</a>
                                            </div>
											<div class="margin-top-20 profile-desc-link">
                                                <i class="fa fa-instagram"></i>
                                                <a href="http://www.instagram.com/{!! Auth::user()->instagram !!}">{!! Auth::user()->instagram !!}</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END PORTLET MAIN -->
                                </div>
                                <!-- END BEGIN PROFILE SIDEBAR -->
                                <!-- BEGIN PROFILE CONTENT -->
                                <div class="profile-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="portlet light ">
											<div class="portlet-title tabbable-line">
                                                    <div class="caption caption-md">
                                                        <i class="icon-globe theme-font hide"></i>
                                                        <span class="caption-subject font-blue-madison bold uppercase">Your Account Details</span>
                                                    </div>
                                     </div>
                                                <div class="portlet-body">
                                                    <div class="tab-content">
                                                        <!-- PERSONAL INFO TAB -->
														
                                                        <div class="tab-pane active" id="tab_1_1">
														<form role="form" action="store" method="post">
                                                                <div class="form-group">
                                                                    <label for="name" class="control-label">First Name</label>
                                                                    <input type="text" placeholder="" name="name" class="form-control" value="{!! Auth::user()->name !!}"/> </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Last Name</label>
                                                                    <input type="text" placeholder="Doe" class="form-control" /> </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Mobile Number</label>
                                                                    <input type="text" placeholder="Enter your mobile phone number)" class="form-control" value="{!! Auth::user()->cellphone !!}"/> </div>
																<div class="form-group">
                                                                    <label for="role" class="control-label">Role</label>
                                                                    <input type="text" placeholder="" name="role" class="form-control" value="{!! Auth::user()->role !!}"/> </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">About</label>
                                                                    <textarea class="form-control" rows="3" placeholder="Tell us about yourself">{!! Auth::user()->bio !!}</textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Website Url</label>
                                                                    <input type="text" placeholder="http://www.example.com" class="form-control" value="{!! Auth::user()->url !!}"/> </div>
                                                                
																
																<div class="margiv-top-10">
																	<a href="javascript:;" class="btn green"> Save Changes </a>
                                                                    <a href="javascript:;" class="btn default"> Cancel </a>
                                                                </div>
                                                            </form>
														
														
                                                            
                                                        </div>
                                                        <!-- END PERSONAL INFO TAB -->
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                                <!-- END PROFILE CONTENT -->
                            </div>
@endsection


