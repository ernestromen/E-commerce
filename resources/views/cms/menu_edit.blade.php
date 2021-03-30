@extends('cms.cms_master')
@section('cms_content')
@include('utils.cms_header', ['title' => 'Edit Menu Link'])
<div class="row">
    <div class="col-md-8">
    <form action="{{ url('cms/menu/' . $item['id']) }}" method="POST" novalidate="novalidate" autocomplete="off">
        @csrf
        {{ method_field('PUT') }}
    <input type="hidden" name="item_id" value="{{ $item['id'] }}">
            <div class="form-group">
                <label for="link">* Link</label>
                @php $link_value = !empty(old('link')) ? old('link') : $item['link']; @endphp
            <input class="form-control origin-text" type="text" name="link" id="link" value="{{ $link_value }}">
            <span class="text-danger">{{ $errors->first('link') }}</span>
            </div>
            <div class="form-group">
                <label for="url">* Url</label>
                @php $url_value = !empty(old('url')) ? old('url') : $item['url']; @endphp
            <input  class="form-control target-text" type="text" name="url" id="url" value="{{  $url_value }}">
            <span class="text-danger">{{ $errors->first('url') }}</span>
            </div>
            <div class="form-group">
                <label for="title">*Title </label>
                @php $title_value = !empty(old('title')) ? old('title') : $item['title']; @endphp
            <input  class="form-control" type="text" name="title" id="title" value="{{  $title_value }}">
            <span class="text-danger">{{ $errors->first('title') }}</span>
            </div>
            <input type="submit" value="Update Menu" class="btn btn-primary" name="submit">
        <a href="{{ url('cms/menu') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection