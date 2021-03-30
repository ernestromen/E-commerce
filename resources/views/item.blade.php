@extends('master')
@section('main_content')
<div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
            <h1 class="h2">{{ $item['ptitle'] }}</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="{{ asset('') }}">Home</a></li>
                
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div class="container">
          <div class="row bar">
            <!-- LEFT COLUMN _________________________________________________________-->
            <div class="col-lg-9">
              <div id="productMain" class="row">
                <div class="col-sm-6">
                  <div data-slider-id="1" class="owl-carousel shop-detail-carousel">
                    <div> <img src="img/detailbig1.jpg" alt="" class="img-fluid"></div>
                    <div> <img src="img/detailbig2.jpg" alt="" class="img-fluid"></div>
                    <div> <img src="img/detailbig3.jpg" alt="" class="img-fluid"></div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="box">
                    <form>
                      <div class="sizes">
                        <h3>{{ $item['ptitle'] }}</h3>
                       
                      </div>
                      <p class="price">${{ $item['price'] }}</p>
                      <p class="text-center">
                      @if( ! Cart::get($item['id']))
   <button  data-pid="{{ $item['id'] }}" type="button" class="btn btn-template-outlined add-to-cart-btn"><i class="fa fa-shopping-cart"></i>
     add to cart
    </button>
   @else
   <button disabled="disabled"  type="button" class="btn btn-success ml-3 add-to-cart-btn">Product in cart!</button>
   @endif 
                        {{--  <a href="{{ url('shop/cart') }}" class="btn btn-template-outlined"><i class="fa fa-shopping-cart"></i> Add to cart</a> --}}
                          <a href="{{ url('shop/cart') }}" class="btn btn-template-outlined" style="margin-top: 0px;"><i class="fa fa-shopping-cart"></i>  Cart</a>
                      </p>
                    </form>
                  </div>
                <div>  <img class="img-fluid correction" src="{{ asset('images/' . $item['pimage']) }}" width="400">
                </div>
                </div>
              </div>
              <div id="details" class="box mb-4 mt-4">
                <p></p>
                <h4>Product details</h4>
                @foreach($products as $product)
                <p>{{ $product->particle }}</p>
                @endforeach
                <h4>Material & care</h4>
                <ul>
                  <li>Polyester</li>
                  <li>Machine wash</li>
                </ul>
                <h4>Size & Fit</h4>
                <ul>
                  <li>Regular fit</li>
                  <li>The model (height 5'8 "and chest 33") is wearing a size S</li>
                </ul>
                <blockquote class="blockquote">
                  <p class="mb-0"><em>Define style this season with Armani's new range of trendy tops, crafted with intricate details. Create a chic statement look by teaming this lace number with skinny jeans and pumps.</em></p>
                </blockquote>
              </div>
              <div id="product-social" class="box social text-center mb-5 mt-5">
                <h4 class="heading-light">Show it to your friends</h4>
                <ul class="social list-inline">
                  <li class="list-inline-item"><a href="#" data-animate-hover="pulse" class="external facebook"><i class="fa fa-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="#" data-animate-hover="pulse" class="external gplus"><i class="fa fa-google-plus"></i></a></li>
                  <li class="list-inline-item"><a href="#" data-animate-hover="pulse" class="external twitter"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#" data-animate-hover="pulse" class="email"><i class="fa fa-envelope"></i></a></li>
                </ul>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-6">
                  
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="product">
                    <div class="image"><a href="#"><img src="img/product2.jpg" alt="" class="img-fluid image1"></a></div>
                   
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="product">
                    <div class="image"><a href="#"><img src="img/product3.jpg" alt="" class="img-fluid image1"></a></div>
                    
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="product">
                    <div class="image"><a href="#"><img src="img/product1.jpg" alt="" class="img-fluid image1"></a></div>
                  
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-6">
               
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="product">
                    <div class="image"><a href="#"><img src="img/product3.jpg" alt="" class="img-fluid image1"></a></div>
                   
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="product">
                    <div class="image"><a href="#"><img src="img/product1.jpg" alt="" class="img-fluid image1"></a></div>
                    
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="product">
                    <div class="image"><a href="#"><img src="img/product2.jpg" alt="" class="img-fluid image1"></a></div>
                 
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <!-- MENUS AND FILTERS-->
             
              <div class="panel panel-default sidebar-menu">
                <div class="panel-heading d-flex align-items-center justify-content-between">
                </div>
                
                  </form>
                </div>
              </div>
           
            </div>
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
          <li class="nav-item"><a href="{{ asset('shop/' . $categorie['curl']) }}" class="nav-link d-flex align-items-center justify-content-between"><span>{{$categorie['ctitle']}} </span></a>
              
            </li>
            
            </li>
            
          </ul>
        </div>
        @endforeach
      </div>
@endsection