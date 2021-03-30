@extends('master')
@section('main_content')

<div class="container">
    <div class="row">
      @if($contents)
      @foreach($contents as $content)
 <div class="col-12">
    <h3>{{ $content->ctitle }}</h3>
    <p>{!! $content->article !!}</p>
 </div>
      @endforeach
      @else
      <div class="col-12">
          <p><i>No content avaliable...</i></p>
      </div>
      @endif
    </div>
</div>
@endsection