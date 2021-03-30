<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous /">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href={{ asset('lib/distribution/vendor/bootstrap/css/bootstrap.min.css') }}>
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href={{ asset('lib/distribution/vendor/font-awesome/css/font-awesome.min.css') }}>
    <!-- Google fonts - Roboto-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href={{ asset('lib/distribution/vendor/bootstrap-select/css/bootstrap-select.min.css') }}>
    <!-- owl carousel-->
    <link rel="stylesheet" href={{ asset('lib/distribution/vendor/owl.carousel/assets/owl.carousel.css') }}>
    <link rel="stylesheet" href={{ asset('lib/distribution/vendor/owl.carousel/assets/owl.theme.default.css') }}>
    <!-- theme stylesheet-->
    <link rel="stylesheet" href={{ asset('lib/distribution/css/style.default.css') }} id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href={{ asset('lib/distribution/css/custom.css') }}>
    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href={{ asset('lib/distribution/img/favicon.ico') }} type="image/x-icon">
    <link rel="apple-touch-icon" href={{ asset('lib/distribution/img/apple-touch-icon.png') }}>
    <link rel="apple-touch-icon" sizes="57x57" href={{ asset('lib/distribution/img/apple-touch-icon-57x57.png') }}>
    <link rel="apple-touch-icon" sizes="72x72" href={{ asset('lib/distribution/img/apple-touch-icon-72x72.png') }}>
    <link rel="apple-touch-icon" sizes="76x76" href={{ asset('lib/distribution/img/apple-touch-icon-76x76.png') }}>
    <link rel="apple-touch-icon" sizes="114x114" href={{ asset('lib/distribution/img/apple-touch-icon-114x114.png') }}>
    <link rel="apple-touch-icon" sizes="120x120" href={{ asset('lib/distribution/img/apple-touch-icon-120x120.png') }}>
    <link rel="apple-touch-icon" sizes="144x144" href={{ asset('lib/distribution/img/apple-touch-icon-144x144.png') }}>
    <link rel="apple-touch-icon" sizes="152x152" href={{ asset('lib/distribution/img/apple-touch-icon-152x152.png') }}>
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}"> 
    <script> var BASE_URL= "{{ url('') }}/" </script>
  <title>{{ $page_title ?? '' }}</title>
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div id="all">
      <!-- Top bar-->
      <div class="top-bar">
        <div class="container">
          <div class="row d-flex align-items-center">
            <div class="col-md-6 d-md-block d-none">
            </div>
            <div class="col-md-6">
              <div class="d-flex justify-content-md-end justify-content-between">
                <ul class="list-inline contact-info d-block d-md-none">
                  <li class="list-inline-item"><a href="#"><i class="fa fa-phone"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                </ul>
                <div class="login">
                  @if(! Session::has('user_id') )
                  <a href="{{ url('user/signin') }}"  class="login-btn"><i class="fa fa-sign-in"></i><span class="d-none d-md-inline-block">Sign In</span></a>
                  <a href="{{ url('user/signup') }}" class="signup-btn"><i class="fa fa-user"></i><span class="d-none d-md-inline-block">Sign Up</span></a>
                  @else
                  <a href="{{ url('user/profile') }}" class="signup-btn"><i class="fa fa-user"></i><span class="d-none d-md-inline-block">{{ Session::get('user_name') }}</span></a>
                  @if( Session::has('is_admin') )
      
        <a class="signup-btn" href="{{ url('cms/dashboard') }}">Admin Panel </a>
      
      @endif
     
     <a class="signup-btn" href="{{ url('user/logout') }}">Logout</a> 
      @endif
                </div>
                <ul class="social-custom list-inline">
                  <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Top bar end-->
      <!-- Login Modal-->
      <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true" class="modal fade">
        <div role="document" class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 id="login-modalLabel" class="modal-title">Customer Login</h4>
              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
         
         
              <p class="text-center text-muted">Not registered yet?</p>
              <p class="text-center text-muted"><a href="customer-register.html"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Login modal end-->
      <!-- Navbar Start-->
      
      <header class="nav-holder make-sticky">
        <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
          <div class="container"><a href="{{ url('') }}" class="navbar-brand home"><img src={{ asset('lib/distribution/img/logo.png') }} alt="Universal logo" class="d-none d-md-inline-block"><img src="lib/distribution/img/logo-small.png" alt="Universal logo" class="d-inline-block d-md-none"><span class="sr-only">Universal - go to homepage</span></a>
            <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            <div id="navigation" class="navbar-collapse collapse">
              <ul class="nav navbar-nav ml-auto">
              <li class="nav-item dropdown menu-large"><a href="{{ url('') }}"  data-hover="dropdown" data-delay="200" >Home <b class="caret"></b></a>
                </li>
              <div style="background: #4fbfa8 !important;
    color: #fff !important;
    text-decoration: none !important;
    border-color: #3aa18c !important;">  <a class="nav-link text-light" href="{{ url('shop/cart') }}">
      <i class="fas fa-shopping-cart  " style="
    margin-left: 18px;
    margin-top: 21px;
    margin-right: 16px"></i>
  @if( ! Cart::isEmpty() )
 <div style="margin-top: -43px;
    margin-left: 23px;" class="total-items-in-cart  ">{{ Cart::getTotalQuantity() }}</div>
 @endif
 
</a></div>
                
                  @if(!empty($menu))
      @foreach($menu as $menu_item)
      <li class="nav-item dropdown menu-large"">
      <a class="" href="{{ url($menu_item['url']) }}">{{ $menu_item['link'] }}</a>
     
      </li>
      @endforeach
      @endif 
                <li class="nav-item dropdown menu-large"><a href="{{ url('shop') }}">Shop <b class="caret"></b></a>
                </li>
                <!-- ========== FULL WIDTH MEGAMENU ==================-->
             
              </ul>
            </div>
          </div>
        </div>
      </header>
      <!-- Navbar End-->
      
      <main class="mt-5" style="min-height:850px;">@yield('main_content')</main>

      <!--master footer -->
      <!-- GET IT-->
      <!-- FOOTER -->
     <footer class="main-footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <h4 class="h6">About Us</h4>
              <p>We are a digital shoes store based out of Israel!</p>
              <hr>
              <h4 class="h6">Join Our Monthly Newsletter</h4>
              
              <hr class="d-block d-lg-none">
            </div>
            <div class="col-lg-3">
              <h4 class="h6">Blog</h4>
              <ul class="list-unstyled footer-blog-list">
                <li class="d-flex align-items-center">
                  <div class="image"><img src={{ asset('lib/distribution/img/notbatman.jpg') }} alt="..." class="img-fluid"></div>
                  <div class="text">
                    <h5 class="mb-0"> <a href="post.html">Batmans's review</a></h5>
                  </div>
                </li>
                <li class="d-flex align-items-center">
                  <div class="image"><img src={{ asset('lib/distribution/img/person-1.jpg') }} alt="..." class="img-fluid"></div>
                  <div class="text">
                    <h5 class="mb-0"> <a href="post.html">Jonny's review</a></h5>
                  </div>
                </li>
                <li class="d-flex align-items-center">
                  <div class="image"><img src={{ asset('lib/distribution/img/detailsquare.jpg') }} alt="..." class="img-fluid"></div>
                  <div class="text">
                    <h5 class="mb-0"> <a href="post.html">Jayne's reiview</a></h5>
                  </div>
                </li>
              </ul>
              <hr class="d-block d-lg-none">
            </div>
          
            
          </div>
        </div>
        <div class="copyrights">
          <div class="container">   
            <div class="row">
              <div class="col-lg-4 text-center-md">
                <p>&copy;{{date('Y')}} The Shoes Store</p>
              </div>
              <div class="col-lg-8 text-right text-center-md">
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Javascript files-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>
@if( Session::has('sm') )
<script>
  toastr.options.positionClass = 'toast-bottom-full-width';
toastr.success( '' ,"{{ Session::get('sm') }}");
</script>
 @endif
    <script src={{ asset('lib/distribution/vendor/jquery/jquery.min.js') }}></script>
    <script src={{ asset('lib/distribution/vendor/popper.js/umd/popper.min.js') }}> </script>
    <script src={{ asset('lib/distribution/vendor/bootstrap/js/bootstrap.min.js') }}></script>
    <script src={{ asset('lib/distribution/vendor/jquery.cookie/jquery.cookie.js') }}> </script>
    <script src={{ asset('lib/distribution/vendor/waypoints/lib/jquery.waypoints.min.js') }}> </script>
    <script src={{ asset('lib/distribution/vendor/jquery.counterup/jquery.counterup.min.js') }}> </script>
    <script src={{ asset('lib/distribution/vendor/owl.carousel/owl.carousel.min.js') }}></script>
    <script src={{ asset('lib/distribution/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js') }}></script>
    <script src={{ asset('lib/distribution/js/jquery.parallax-1.1.3.js') }}></script>
    <script src={{ asset('lib/distribution/vendor/bootstrap-select/js/bootstrap-select.min.js') }}></script>
    <script src={{ asset('lib/distribution/vendor/jquery.scrollto/jquery.scrollTo.min.js') }}></script>
    <script src={{ asset('lib/distribution/js/front.js') }}></script>
  </body>
</html>