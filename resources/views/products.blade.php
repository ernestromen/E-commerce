@extends('master')
@section('main_content')
<div id="heading-breadcrumbs">
    <div class="container">
      <div class="row d-flex align-items-center flex-wrap">
        <div class="col-md-7">
          <h1 >{{ $products[0]->ctitle }}</h1>
        
        </div>
        <div class="col-md-5">
          
        </div>
      </div>
    </div>
  </div>
  <div id="content">
    <div class="container">
      <div class="row bar">
        <!-- LEFT COLUMN _________________________________________________________-->
        @foreach($products as $product)
        <div class="col-lg-9">
          <p class="lead">Built purse maids cease her ham new seven among and. Pulled coming wooded tended it answer remain me be. So landlord by we unlocked sensible it. Fat cannot use denied excuse son law. Wisdom happen suffer common the appear ham beauty her had. Or belonging zealously existence as by resources.</p>
          <div id="productMain" class="row">
            <div class="col-sm-6">
              <div data-slider-id="1" class="owl-carousel shop-detail-carousel">
                <div>
                   <img src="{{asset('images/' . $product->pimage)}}" class="img-fluid"></div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="box">
                <form>
                  <div class="sizes">
                    <h3>{{ $product->ptitle }}</h3>
                    
                  </div>
                  <p class="price">$124.00</p>
                  <p class="text-center">
                   @if( ! Cart::get($product->id) )
                   <button data-pid="{{ $product->id }}" type="button" class="btn btn-template-outlined add-to-cart-btn"><i class="fas fa-cart-plus"></i>
                     add to cart
                   </button>
                   @else
                   <button disabled="disabled"  type="button" class="btn btn-success ml-3 add-to-cart-btn">Product in cart!</button>
     @endif
     <a style="margin-top: 0px;" href="{{ url('shop/' . $product->curl) . '/' .$product->purl }}" class="btn btn-template-outlined"><i class="fas fa-heart"></i> more details</a>
                  </p>
                </form>
              </div>
              <div data-slider-id="1" class="owl-thumbs">
                <button class="owl-thumb-item"><img src="img/detailsquare.jpg" alt="" class="img-fluid"></button>
                <button class="owl-thumb-item"><img src="img/detailsquare2.jpg" alt="" class="img-fluid"></button>
                <button class="owl-thumb-item"><img src="img/detailsquare3.jpg" alt="" class="img-fluid"></button>
              </div>
            </div>
          </div>
          <div id="details" class="box mb-4 mt-4">
            <p></p>
            <h4>Product details</h4>
            <p>White lace top, woven, has a round neck, short sleeves, has knitted lining attached</p>
           
            <blockquote class="blockquote">
              <p class="mb-0"><em>Define style this season with Armani's new range of trendy tops, crafted with intricate details. Create a chic statement look by teaming this lace number with skinny jeans and pumps.</em></p>
            </blockquote>
          </div>
          <div id="product-social" class="box social text-center mb-5 mt-5">
           
            <ul class="social list-inline">
              <li class="list-inline-item"><a href="#" data-animate-hover="pulse" class="external facebook"><i class="fa fa-facebook"></i></a></li>
              <li class="list-inline-item"><a href="#" data-animate-hover="pulse" class="external gplus"><i class="fa fa-google-plus"></i></a></li>
              <li class="list-inline-item"><a href="#" data-animate-hover="pulse" class="external twitter"><i class="fa fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="#" data-animate-hover="pulse" class="email"><i class="fa fa-envelope"></i></a></li>
            </ul>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div class="box text-uppercase mt-0 mb-small">
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="product">
                <div class="image"><a href="#"><img src="img/product2.jpg" alt="" class="img-fluid image1"></a></div>
                <div class="text">
                 
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="product">
                <div class="image"><a href="#"><img src="img/product3.jpg" alt="" class="img-fluid image1"></a></div>
                <div class="text">
                </div>  
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="product">
                <div class="image"><a href="#"><img src="img/product1.jpg" alt="" class="img-fluid image1"></a></div>
                <div class="text">
                </div>
              </div>
            </div>
          </div>
      
        </div>
        @endforeach
       
    </div>
    <div class="row">
      <div class="col">
        {{ $products->links() }}
      </div>
    </div>
  </div>
  <div class="panel panel-default sidebar-menu">
    <div class="panel-heading">
      <h3 class="h4 panel-title">Categories</h3>
    </div>
    @foreach($categories as $categorie)
    <div class="panel-body">
      <ul class="nav nav-pills flex-column text-sm category-menu">
      <li class="nav-item"><a href="{{ $categorie['curl'] }}" class="nav-link d-flex align-items-center justify-content-between"><span>{{$categorie['ctitle']}} </span></a></li>
           {{-- <li class="nav-item"><a href="{{ asset('shop/' .$categorie['curl']) }}" class="nav-link"></a></li>  --}}
      </ul>
    </div>
    @endforeach
  </div>
@endsection