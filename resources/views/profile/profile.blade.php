@extends('layouts.app')
@section('pageTitle', 'Profile')
@section('pageScripts')
<link href="../assets/pages/css/profile.css" rel="stylesheet" type="text/css" />

@endsection
@section('content')
			<div class="row">
                            <div class="col-md-12">
                                @include('profile.layouts.profileSidebar')
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


