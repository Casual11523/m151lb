@extends('layouts.main')
@section('content')
@if(Auth::check())
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Auto Liste</div>

                <div class="panel-body">
                  <div class="table-responsive" >
                      <table class="table table-hover" >
                          <tr>
                              <th>Auto ID</th>
                              <th>Marke</th>
                              <th>Modell</th>
                              <th>Leistung in PS</th>
                          </tr>
                          <?php
                            foreach ($autos as $auto) {
                                echo '<tr class="clickable-row" data-href="/"><td>',$auto->autoId,'</td><td>',$auto->marke,'</td><td>',$auto->modell,'</td><td>',$auto->hp,'</td></tr>';     
                            }
                          ?>
                      </table>
                  </div>
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