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
    <div class="jumbotron">
        <div class="container-fluid text-center">
            <h1>Hi, Alex!</h1>
            <h2>Your next scheduled roster:</h2>
            <h2>03 Nov 2016</h2>
            <br>
            <br>
            <a href="#" class="btn btn-lg btn-primary">Contact leaders</a>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-6 col-sm-push-2 col-sm-2 col-md-push-2 col-md-2 text-center">
                <h1><span class="glyphicon glyphicon-calendar"></span></h1>
                <h3>KidsLife Roster</h3>
            </div>

            <div class="col-xs-6 col-sm-push-2 col-sm-2 col-md-push-2 col-md-2 text-center">
                <h1><span class="glyphicon glyphicon-th-list"></span></h1>
                <h3>Term Programs</h3>
            </div>

            <div class="col-xs-6 col-sm-push-2 col-sm-2 col-md-push-2 col-md-2 text-center">
                <h1><span class="glyphicon glyphicon-file"></span></h1>
                <h3>Download Documents</h3>
            </div>

            <div class="col-xs-6 col-sm-push-2 col-sm-2 col-md-push-2 col-md-2 text-center">
                <h1><span class="glyphicon glyphicon-comment"></span></h1>
                <h3>KidsLife Billboard</h3>
            </div>
        </div>
    </div>
@endsection