@extends('master')
@section('main_content')
<div class="container">

    <div class="row" style="background-image: url('background_2.jpg');">
        <div class="col-lg-6">
            <form action="" method="POST" novalidate="novalidate" autocomplete="off">
                @csrf()
                @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
                <div class="form-group">
                    <label for="email">* Email</label>
                <input value="{{ old('email') }}" type="email" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">* Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <input type="submit" value="Sign In" class="btn-btn-primary" name="submit">
                @if( !empty($sign_error) )
            <span class="text-danger">{{ $sign_error }}</span>
                @endif
            </form>
        </div>
    </div>
    </div>
@endsection

 