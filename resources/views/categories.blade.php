{{-- <div class="ribbon-holder">
            <div class="ribbon sale">SALE</div>
            <div class="ribbon new">NEW</div>
          </div>--}}
@extends('master')
@section('main_content')
<div class="container">
<div class="row">
<div class="col">
<h1>welcome the shop categories!</h1>
</div>
</div>
<div class="row">
@if($categories)
@foreach($categories as $categorie)
<div class="col-lg-6 col-xl-4">
<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Categorie</strong>
          <h3 class="mb-0">{{$categorie['ctitle']}}</h3>
         
          <p class="card-text mb-auto">{{$categorie['carticle']}}</p>
          <a href={{url('shop/' . $categorie['curl'])}} class="stretched-link">view products</a>
        </div>
        <div class="col-auto d-none d-lg-block">
        <img class="img-fluid image1" src="{{ asset('images/' . $categorie['cimage'])}}">
        </div>
      </div>
</div>
@endforeach
@else
<div class="col">
<p><i>no categorie avaliable</i><p>
</div>
@endif
</div>
</div>
@endsection
{{--@section('main_content')
<div class="container">
    <div class="row">
@if($categories) 
@foreach($categories as $categorie) 
<div class="row bar">
    <div class="col-md-12">
      <div class="products-big">
        <div class="row products">
          <div class="col-lg-3 col-md-4">
            <div class="product">
              <div class="image"><img src="{{ asset('images/' . $categorie['cimage'])}}"  class="img-fluid image1"></div>
              <div class="text">
                <h3 class="h5"><a href={{url('shop/' . $categorie['curl'])}}>{{$categorie['ctitle']}}</a></h3>
                
              </div>
            </div>
          </div>
          
        
         
          
          
        </div>
      </div>
      
     
    </div>
  </div>
</div>
</div>

@endforeach 
@else 
<div class="col">
    <p><i>no categorie avaliable</i><p>
    </div>
@endif 
    </div>
      
      
    

@endsection--}}
