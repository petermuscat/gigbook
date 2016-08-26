<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

@include('layouts.header')
@include('layouts.top-bar')
<body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-content-white">

<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"></div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    @include('layouts.sidebar')
            <!-- BEGIN CONTENT -->
@if (!Auth::guest())
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
		            <!-- BEGIN PAGE BAR -->
			
            <div class="page-toolbar">
				<div class="toolbar-title">
					<h3>@yield('pageTitle')</h3>
				</div>
				<div class="controls">
					 <a href="javascript:;"><i class="fa fa-pencil"></i></a>
					 <a href="javascript:;"><i class="fa fa-save"></i></a>
					 <a href="javascript:;"><i class="fa fa-ban"></i></a>
					 <a href="javascript:;"><i class="fa fa-refresh"></i></a>
					 <a href="javascript:;"><i class="fa fa-download"></i></a>
					 <a href="javascript:;"><i class="fa fa-upload"></i></a>
				</div>
			</div>

            <!-- END PAGE BAR -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->



            <!-- END PAGE HEADER-->

            <div class="row">
                <div class="col-lg-12">
                    @yield('content')
                </div>
            </div>

        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
@endif

<div class="page-footer">
    <div class="page-footer-inner"> 2016 &copy; Generator by InfyOm
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>	
</div>
<!-- END FOOTER -->

@include('layouts.footer-scripts')

</body>
</html>