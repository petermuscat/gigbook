@extends('layouts.app')
@section('pageTitle', 'Gigs')
@section('editItemsTitle','Active Gigs')
@section('editorForm')

<form class="horizontal-form" action="#">
                                                        <div class="form-body">
                                                            <h3 class="form-section"></h3>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">First Name</label>
                                                                        <input class="form-control" id="firstName" type="text" placeholder="Chee Kin">
                                                                        <span class="help-block"> This is inline help </span>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                                <div class="col-md-6">
                                                                    <div class="form-group has-error">
                                                                        <label class="control-label">Last Name</label>
                                                                        <input class="form-control" id="lastName" type="text" placeholder="Lim">
                                                                        <span class="help-block"> This field has error. </span>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>
                                                            <!--/row-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Gender</label>
                                                                        <select class="form-control">
                                                                            <option value="">Male</option>
                                                                            <option value="">Female</option>
                                                                        </select>
                                                                        <span class="help-block"> Select your gender </span>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Date of Birth</label>
                                                                        <input class="form-control" type="text" placeholder="dd/mm/yyyy"> </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>
                                                            <!--/row-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Category</label>
                                                                        <select tabindex="1" class="form-control" data-placeholder="Choose a Category">
                                                                            <option value="Category 1">Category 1</option>
                                                                            <option value="Category 2">Category 2</option>
                                                                            <option value="Category 3">Category 5</option>
                                                                            <option value="Category 4">Category 4</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Membership</label>
                                                                        <div class="radio-list">
                                                                            <label class="radio-inline">
                                                                                <input name="optionsRadios" id="optionsRadios1" type="radio" checked="" value="option1"> Option 1 </label>
                                                                            <label class="radio-inline">
                                                                                <input name="optionsRadios" id="optionsRadios2" type="radio" value="option2"> Option 2 </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>
                                                            <!--/row-->
                                                            <h3 class="form-section">Address</h3>
                                                            <div class="row">
                                                                <div class="col-md-12 ">
                                                                    <div class="form-group">
                                                                        <label>Street</label>
                                                                        <input class="form-control" type="text"> </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>City</label>
                                                                        <input class="form-control" type="text"> </div>
                                                                </div>
                                                                <!--/span-->
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>State</label>
                                                                        <input class="form-control" type="text"> </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>
                                                            <!--/row-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Post Code</label>
                                                                        <input class="form-control" type="text"> </div>
                                                                </div>
                                                                <!--/span-->
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Country</label>
                                                                        <select class="form-control"> </select>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>
                                                        </div>
                                                        <div class="form-actions right">
                                                            <button class="btn default" type="button">Cancel</button>
                                                            <button class="btn blue" type="submit">
                                                                <i class="fa fa-check"></i> Save</button>
                                                        </div>
                                                    </form>

@endsection

@section('content')
@include('layouts.editor')

@endsection
