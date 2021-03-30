@php
$menu = App\Menu::all()->toArray();
@endphp
@extends('master')
@section('main_content')
<div id="content">
    <div class="container">
      <div id="error-page" class="col-md-8 mx-auto text-center">
        <div class="box">
          <h3>We are sorry - this page is not here anymore</h3>
          <h4 class="text-muted">Error 404 - Page not found</h4>
        <p class="buttons"><a href="{{ url('') }}" class="btn btn-template-outlined"><i class="fa fa-home"></i> Go to Homepage</a></p>
        </div>
      </div>
    </div>
  </div>
  <!-- GET IT-->
  
@endsection
