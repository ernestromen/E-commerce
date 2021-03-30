@extends('cms.cms_master')
@section('cms_content')
@include('utils.cms_header', ['title' => '+Add new Content'])
<div class="row">
    <div class="col-md-8">
    <form action="{{ url('cms/content') }}" method="POST" novalidate="novalidate" autocomplete="off">
        @csrf
        <div class="form-group">
            <label for="menu-id">* Menu Link</label>
<select name="menu_id" id="menu-id" class="form-control">
    <option value="">Choose Menu Link</option>
    @foreach($menu as $menu_item)
<option @if( old('menu_id')==$menu_item['id'] ) selected="selected" @endif value="{{ $menu_item['id'] }}">{{ $menu_item['link'] }}</option>
    @endforeach
</select>
            <span class="text-danger">{{ $errors->first('menu_id') }}</span>
        </div>
            <div class="form-group">
                <label for="title">* Title</label>
            <input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}">
            <span class="text-danger">{{ $errors->first('title') }}</span>
            </div>
            <div class="form-group">
                <label for="article">* Article</label>
                <textarea class="form-control" name="article" id="article" cols="30" rows="10"> {{ old('article') }} </textarea>
                <span class="text-danger">{{ $errors->first('article') }}</span>
            </div>
            <input type="submit" value="Save Content" class="btn btn-primary" name="submit">
        <a href="{{ url('cms/content') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection