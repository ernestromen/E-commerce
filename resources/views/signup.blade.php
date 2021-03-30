@extends('master')
@section('main_content')
<div id="heading-breadcrumbs">
    <div class="container">
      <div class="row d-flex align-items-center flex-wrap">
        <div class="col-md-7">
          <h1 class="h2">New Account / Sign In</h1>
        </div>
        <div class="col-md-5">
          <ul class="breadcrumb d-flex justify-content-end">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">New Account / Sign In</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div id="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="box">
            <h2 class="text-uppercase">New account</h2>
            <p class="lead">Not our registered customer yet?</p>
            <p>With registration with us new world of fashion, fantastic discounts and much more opens to you! The whole process will not take you more than a minute!</p>
            <p class="text-muted">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>
            <hr>
            <form action="" method="POST" novalidate="novalidate" autocomplete="off">
                @csrf()
                <div class="form-group">
                    <label for="name">* Name</label>
                <input value="{{ old('name') }}" type="text" name="name" id="name" class="form-control">
                <span class="text-danger">{{ $errors->first('name') }}</span>
                </div>
                <div class="form-group">
                    <label for="email">* Email</label>
                <input value="{{ old('email') }}" type="email" name="email" id="email" class="form-control">
                <span class="text-danger">{{ $errors->first('email') }}</span>
                </div>
                <div class="form-group">
                    <label for="password">* Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                </div>
                <div class="form-group">
                    <label for="password-confirmation">* Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password-confirmation" class="form-control">
                </div>
                <div class="form-group">
                    <label for="country">* Your country</label>
                   <select name="country" id="country" class="form-control">
                       <option value="">Choose Country...</option>
                       @foreach($countries as $country)
                   <option value="{{ $country->name }}">{{ $country->name }}</option>
                       @endforeach
                   </select>
                   <span class="text-danger">{{ $errors->first('country') }}</span>
                </div>
                <input type="submit" value="Sign up" class="btn-btn-primary" name="submit">
            <a href="{{ url('user/signin' . $rn) }}">Already signed</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- GET IT-->
  <div class="get-it">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 text-center p-3">
          <h3>Do you want cool website like this one?</h3>
        </div>
        <div class="col-lg-4 text-center p-3">   <a href="#" class="btn btn-template-outlined-white">Buy this template now</a></div>
      </div>
    </div>
  </div>
@endsection