@extends('cms.cms_master')
@section('cms_content')
@include('utils.cms_header', ['title' => 'Edit User'])
<div class="row">
    <div class="col-md-8">
    <form action="{{ url('cms/users/' . $item['id']) }}" method="POST" novalidate="novalidate" autocomplete="off">
        @csrf
        {{ method_field('PUT') }}
    <input type="hidden" name="item_id" value="{{ $item['id'] }}">
            <div class="form-group">
                <label for="name">* Name</label>
              {{--  @php $link_value = !empty(old('name')) ? old('link') : $item['link']; @endphp --}}
            <input class="form-control origin-text" type="text" name="name" id="name" value="{{ $item['name'] }}">
            <span class="text-danger">{{ $errors->first('name') }}</span> 
            </div>
            <div class="form-group">
                <label for="email">* Email</label>
            <input  class="form-control target-text" type="text" name="email" id="email" value="{{ $item['email'] }}"> 
            <span class="text-danger">{{ $errors->first('email') }}</span> 
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
                
            <span class="text-danger">{{ $errors->first('kind') }}</span>  
            </div> 
           
            <input type="submit" value="Update User" class="btn btn-primary" name="submit">
        <a href="{{ url('cms/users') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection