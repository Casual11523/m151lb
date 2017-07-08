@extends('layouts.main')
@section('content')
@if(Auth::check())
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Info</div>
                <!--put the loggin name on view-->
                <div class="panel-body">
                    Willkommen Sie sind angemeldet als: {{ Auth::user()->name }}
                </div>
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