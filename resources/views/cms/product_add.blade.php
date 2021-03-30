@extends('cms.cms_master')
@section('cms_content')
@include('utils.cms_header', ['title' => '+ Add new Product'])
<div class="row">
    <div class="col-md-8 mb-5">
    <form action="{{ url('cms/products') }}" method="POST" novalidate="novalidate" autocomplete="off" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="categorie-id">Category</label>
          <select class="form-control" name="categorie_id" id="categorie-id">
            <option value="">Choose Category...</option>
            @foreach($categories as $category)
          <option @if(old('categorie_id') == $category['id']) selected="selected" @endif value="{{ $category['id'] }}">{{ $category['ctitle'] }}</option>
            @endforeach
          </select>
          <span class="text-danger">{{ $errors->first('categorie_id') }}</span>
        </div>
            <div class="form-group">
                <label for="title">* Title</label>
            <input class="form-control origin-text" type="text" name="title" id="title" value="{{ old('title') }}">
            <span class="text-danger">{{ $errors->first('title') }}</span>
            </div>
            <div class="form-group">
                <label for="url">* Url</label>
            <input  class="form-control target-text" type="text" name="url" id="url" value="{{ old('url') }}">
            <span class="text-danger">{{ $errors->first('url') }}</span>
            </div>
            <div class="form-group">
              <label for="price">* Price</label>
          <input  class="form-control" type="text" name="price" id="price" value="{{ old('price') }}">
          <span class="text-danger">{{ $errors->first('price') }}</span>
          </div>
            <div class="form-group">
                <label for="article">* Article</label>
                <textarea class="form-control" name="article" id="article" cols="30" rows="10"> {{ old('article') }} </textarea>
                <span class="text-danger">{{ $errors->first('article') }}</span>
            </div>
            <div class="form-group">
                <label for="image">Product Image</label>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                </div>
                <div class="custom-file">
                  <input name="image" type="file" class="custom-file-input" id="image">
                  <label class="custom-file-label" for="image">Choose file</label>
                </div>
              </div>
              <div class="form-group">
                <span class="text-danger">{{ $errors->first('image') }}</span>
              </div>
            <input type="submit" value="Save Product" class="btn btn-primary" name="submit">
        <a href="{{ url('cms/products') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection