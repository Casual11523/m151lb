@extends('layouts.main')
@section('content')
@if(Auth::check())
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Kontakt</div>

                <div class="panel-body">
                    Armend Ponik<br><br> Tel.: 0764769492
                </div>
                <!--Google API Anbindung-->
                <iframe width="750" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=berg%20&key=AIzaSyDX6T64UbmjXWHUFD6E2LRDrmJlWrGHac0" allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
</div>
@endif
@if(Auth::guest())
    <div class="row firstlog">
      <div class="col-xs-12 col-sm-6 col-md-3 col-md-offset-5 col-lg-3 col-lg-offset-4 col-sm-offset-3 ">
        <a href="{{ route('login') }}" class="btn btn-block btn-warning">Bitte zuerst Anmelden</a>
      </div>
    </div>
    @endif
@endsection