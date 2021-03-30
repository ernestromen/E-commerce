@extends('cms.cms_master')
@section('cms_content')
@include('utils.cms_header', ['title' => 'Edit Content'])
<div class="row">
    <div class="col-md-8">
        <form action="{{ url('cms/content/' . $item['id']) }}" method="POST" novalidate="novalidate" autocomplete="off">
            @csrf
            {{ method_field('PUT') }}
        <div class="form-group">
            <label for="menu-id">* Menu Link</label>
<select name="menu_id" id="menu-id" class="form-control">
    @foreach($menu as $menu_item)
<option @if( $item['menu_id']==$menu_item['id'] ) selected="selected" @endif value="{{ $menu_item['id'] }}">{{ $menu_item['link'] }}</option>
    @endforeach
</select>
            <span class="text-danger">{{ $errors->first('menu_id') }}</span>
        </div>
            <div class="form-group">
                <label for="title">* Title</label>
            <input class="form-control" type="text" name="title" id="title" value="{{ $item['ctitle'] }}">
            <span class="text-danger">{{ $errors->first('title') }}</span>
            </div>
            <div class="form-group">
                <label for="article">* Article</label>
                <textarea class="form-control" name="article" id="article" cols="30" rows="10"> {{ $item['article'] }} </textarea>
                <span class="text-danger">{{ $errors->first('article') }}</span>
            </div>
            <input type="submit" value="Update Content" class="btn btn-primary" name="submit">
        <a href="{{ url('cms/content') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection