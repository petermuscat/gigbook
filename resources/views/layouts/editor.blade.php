<div class="row">
	<div class="col-xs-12 col-md-3" style="">
	<!-- BEGIN PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                           
                                            <span class="caption-subject font-dark bold uppercase">@yield('editItemsTitle')</span>
                                        </div>
                                        <div class="actions">
                                            <a class="btn btn-circle btn-icon-only btn-default " href="javascript:;">
                                                <i class="fa fa-plus"></i>
                                            </a>
											<a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="fa fa-clone"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                     <ul>
										<li>Test Test</li>
										<ul>
										
                                    </div>
                                </div>
                                <!-- END PORTLET-->
	</div>
	<div class="col-xs-12 col-md-9">
	<!-- BEGIN PORTLET-->
                                <div class="portlet light bordered">
                                   
                                    <div class="portlet-body">
                                     @yield('editorForm')										
                                    </div>
                                </div>
                                <!-- END PORTLET-->
	</div>



</div>