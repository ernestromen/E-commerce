@extends('cms.cms_master')
@section('cms_content')
@include('utils.cms_header', ['title' => '+Add new Menu Link'])
<div class="row">
    <div class="col-md-8">
    <form action="{{ url('cms/menu') }}" method="POST" novalidate="novalidate" autocomplete="off">
        @csrf
            <div class="form-group">
                <label for="link">* Link</label>
            <input class="form-control origin-text" type="text" name="link" id="link" value="{{ old('link') }}">
            <span class="text-danger">{{ $errors->first('link') }}</span>
            </div>
            <div class="form-group">
                <label for="url">* Url</label>
            <input  class="form-control target-text" type="text" name="url" id="url" value="{{ old('url') }}">
            <span class="text-danger">{{ $errors->first('url') }}</span>
            </div>
            <div class="form-group">
                <label for="title">*Title </label>
            <input  class="form-control" type="text" name="title" id="title" value="{{ old('title') }}">
            <span class="text-danger">{{ $errors->first('title') }}</span>
            </div>
            <input type="submit" value="Save Menu" class="btn btn-primary" name="submit">
        <a href="{{ url('cms/menu') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection