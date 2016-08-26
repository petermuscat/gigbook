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
                                                <li class="{{ Ekko::areActiveRoutes(['profile', 'editProfile']) }}">
                                                    <a href="page_user_profile_1.html">
                                                        <i class="icon-home"></i>Personal Details</a>
                                                </li>
                                                <li class="{{ Ekko::areActiveRoutes([]) }}">
                                                    <a href="page_user_profile_1_account.html">
                                                        <i class="icon-settings"></i> Account Settings </a>
                                                </li>
                                                <li class="{{ Ekko::areActiveRoutes([]) }}">
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