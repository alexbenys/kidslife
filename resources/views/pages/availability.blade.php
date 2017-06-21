<!--
*
*
-->

@extends('app')

@section('css')

@endsection

@section('js')

@endsection

@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="page-header">
                <h1>Availability Form</h1>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Availability</div>
                <div class="panel-body">
                    <form action="POST" class="form-horizontal">
                        <div class="row form-group has-feedback">
                            <label for="name" class="col-xs-2 col-sm-2 col-md-2 control-label">Name*</label>

                            <div class="col-xs-8 col-sm-8 col-md-8">
                                <div class="form-group">
                                    <input class="form-control" placeholder="John Smith" data-error="Name is invalid" required="required" name="name" type="text" id="name">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row form-group has-feedback">
                            <label for="email" class="col-xs-2 col-sm-2 col-md-2 control-label">Email address *</label>

                            <div class="col-xs-8 col-sm-8 col-md-8">
                                <div class="form-group">
                                    <input class="form-control" placeholder="john.smith@example.com" data-error="Email is invalid" required="required" name="email" type="email" id="email">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row form-group has-feedback">
                            <label for="phone-number" class="col-xs-2 col-sm-2 col-md-2 control-label">Mobile number *</label>

                            <div class="col-xs-8 col-sm-8 col-md-8">
                                <div class="form-group">
                                    <input class="form-control" placeholder="04123456" data-error="Phone number is invalid" required="required" name="phone-number" type="text" id="phone-number">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row form-group has-feedback">
                            <label for="available-dates" class="col-xs-2 col-sm-2 col-md-2 control-label">Available dates</label>

                            <div class="col-xs-8 col-sm-8 col-md-8">
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="30-april">30 April</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="07-may">07 May</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="14-may">14 May</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row form-group has-feedback">
                            <label for="feedback" class="col-xs-2 col-sm-2 col-md-2 control-label">Feedback</label>

                            <div class="col-xs-8 col-sm-8 col-md-8">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="KidsLife is awesome"  name="feedback"
                                              id="feedback" rows="5"></textarea>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-xs-offset-2 col-sm-offset-2 col-md-offset-2">
                                <input class="btn btn-primary btn-lg" type="submit" value="Submit Form">
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection