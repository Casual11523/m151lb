@extends('layouts.main')
@section('content')
@if(Auth::check())
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Willkommen</div>

                <div class="panel-body">
                    Du bist eingelogt!<br><br> 
                    Bitte Fahre weiter.
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@if(Auth::guest())
    <div class="container">
        <div class="row firstlog">
          <div class="col-xs-12 col-sm-6 col-md-3 col-md-offset-5 col-lg-3 col-lg-offset-4 col-sm-offset-3 ">
            <a href="{{ route('login') }}" class="btn btn-block btn-warning">Bitte zuerst Anmelden</a>
          </div>
        </div>
    </div>
@endif
@endsection