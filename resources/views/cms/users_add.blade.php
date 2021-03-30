@extends('cms.cms_master')
@section('cms_content')
@include('utils.cms_header', ['title' => '+Add new User'])
<div class="row">
    <div class="col-md-8">
    <form action="{{ url('cms/users') }}" method="POST" novalidate="novalidate" autocomplete="off">
        @csrf
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
      {{--  <div class="form-group">
           <label for="password-confirmation">* Confirm Password</label>
            <input type="password" name="password_confirmation" id="password-confirmation" class="form-control">
        </div> --}}
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
            <div class="form-group">
                <label for="kind">*Kind </label>
             <select  class="form-control" name="kind" id="kind">
                 <option value="">choose the type of user..</option>
                 @foreach($option as $op)
                 <option value="{{ $op->id }}">{{ $op->id }}</option>
                 @endforeach
             </select>
             <span>*1-Admin, 2-Authenticated User, 3-Content Editor</span>
         {{--  <input  class="form-control" type="text" name="kind" id="kind" value="">--}}
                <br>
            <span class="text-danger">{{ $errors->first('kind') }}</span>  
            </div> 
           {{-- <div class="form-group">
                <label for="kind">*Kind </label>
            <input  class="form-control" type="text" name="kind" id="kind" value="{{ old('kind') }}">
            <span class="text-danger">{{ $errors->first('kind') }}</span>
            </div> --}}
            <input type="submit" value="Save User" class="btn btn-primary" name="submit">
        <a href="{{ url('cms/users') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection