<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Account</title>
    <!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href=" nunito-font.css ">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="{{ asset('admin_assets/css/product.css') }}"/>
	<link rel="stylesheet" href="{{ asset('admin_assets/css/owl.carousel.min.css') }}"/>
	<!-- Bootstrap Css -->
    <link rel="stylesheet" href="{{ asset('admin_assets/css/bootstrap.min.css') }}"/>
	<!-- Required meta tags -->
  <script src="product.js" async></script>
  <!--Main JavaScript -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">

</head>
<body>

    <nav class ="navbar">
        <div class="logo"><h2>Account</h2></div>
        <div class="search-box">
            <input type="text" class="tbox" placeholder="Search for products"/>
            <button class="searchbtn"><i class="fas fa-search"></i></i></button>
        </div>
        <ul class="menu">
            <li><a href="{{ asset('/homee') }}">Home</a></li>
            <li><a href="cart.html">Cart</a></li>
            <li><a href="{{ asset('/account') }}">Account</a></li>
            <li><a href="{{ asset('/customersupport') }}">Customer Support</a></li>
        </ul>
        <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
			@csrf
			@method('DELETE')
			<button class="btn btn-danger" type="submit">Logout</button>
		</form>
<!--for resposive button-->
        <div class = "menu-btn">
            <i  class = "fa fa-bars"></i>
        </div>
    </nav>

    <div class="container d-md-flex align-items-stretch">
        <!-- Page Content  -->
        <div class="container mt-4">
          <div class="row">
              <div class="col-lg-3 my-lg-0 my-md-1">
                  <div id="sidebar" class="bg-orange">
                      <div class="h4 text-white">Account</div>
                      <ul>
                          <li class="active">
                              <a href="#" class="text-decoration-none d-flex align-items-start">
                                  <div class="fas fa-box pt-2 me-3"></div>
                                  <div class="d-flex flex-column">
                                      <div class="link">My Account</div>
                                      <div class="link-desc">View & Manage orders and returns</div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="#" class="text-decoration-none d-flex align-items-start">
                                  <div class="fas fa-box-open pt-2 me-3"></div>
                                  <div class="d-flex flex-column">
                                      <div class="link">My Orders</div>
                                      <div class="link-desc">View & Manage orders and returns</div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="#" class="text-decoration-none d-flex align-items-start">
                                  <div class="far fa-address-book pt-2 me-3"></div>
                                  <div class="d-flex flex-column">
                                      <div class="link">Address Book</div>
                                      <div class="link-desc">View & Manage Addresses</div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="#" class="text-decoration-none d-flex align-items-start">
                                  <div class="far fa-user pt-2 me-3"></div>
                                  <div class="d-flex flex-column">
                                      <div class="link">My Profile</div>
                                      <div class="link-desc">Change your profile details & password</div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="#" class="text-decoration-none d-flex align-items-start">
                                  <div class="fas fa-headset pt-2 me-3"></div>
                                  <div class="d-flex flex-column">
                                      <div class="link">Help & Support</div>
                                      <div class="link-desc">Contact Us for help and support</div>
                                  </div>
                              </a>
                          </li>
                          <li>
                            <a href="#" class="text-decoration-none d-flex align-items-start">
                                <div class="fas fa-bag pt-2 me-3"></div>
                                <div class="d-flex flex-column">
                                    <div class="link"><a href="{{ asset('/sellerauth') }}">Be a Seller</a></div>
                                    <div class="link-desc">Sell your products here</div>
                                </div>
                            </a>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="col-lg-9 my-lg-0 my-1">
                  <div id="main-content" class="bg-white border">
                      <div class="d-flex flex-column">
                          <div class="h5">Hello {{ Auth::user()->name }},</div>
                          <div>Logged in as: {{ Auth::user()->email }}</div>
                      </div>
                      <div class="d-flex my-4 flex-wrap">
                          <div class="box me-4 my-1 bg-light">
                              <img src="https://www.freepnglogos.com/uploads/box-png/cardboard-box-brown-vector-graphic-pixabay-2.png"
                                  alt="">
                              <div class="d-flex align-items-center mt-2">
                                  <div class="tag">Orders placed</div>
                                  <div class="ms-auto number">10</div>
                              </div>
                          </div>
                          <div class="box me-4 my-1 bg-light">
                              <img src="https://www.freepnglogos.com/uploads/shopping-cart-png/shopping-cart-campus-recreation-university-nebraska-lincoln-30.png"
                                  alt="">
                              <div class="d-flex align-items-center mt-2">
                                  <div class="tag">Items in Cart</div>
                                  <div class="ms-auto number">10</div>
                              </div>
                          </div>
                          <div class="box me-4 my-1 bg-light">
                              <img src="https://www.freepnglogos.com/uploads/love-png/love-png-heart-symbol-wikipedia-11.png"
                                  alt="">
                              <div class="d-flex align-items-center mt-2">
                                  <div class="tag">Wishlist</div>
                                  <div class="ms-auto number">10</div>
                              </div>
                          </div>
                      </div>
                      <div class="text-uppercase">My recent orders</div>
                      <div class="order my-3 bg-light">
                          <div class="row">
                              <div class="col-lg-4">
                                  <div class="d-flex flex-column justify-content-between order-summary">
                                      <div class="d-flex align-items-center">
                                          <div class="text-uppercase">Order #fur10001</div>
                                          <div class="blue-label ms-auto text-uppercase">paid</div>
                                      </div>
                                      <div class="fs-8">Products #03</div>
                                      <div class="fs-8">22 August, 2020 | 12:05 PM</div>
                                      <div class="rating d-flex align-items-center pt-1">
                                          <img src="https://www.freepnglogos.com/uploads/like-png/like-png-hand-thumb-sign-vector-graphic-pixabay-39.png"
                                              alt=""><span class="px-2">Rating:</span>
                                          <span class="fas fa-star"></span>
                                          <span class="fas fa-star"></span>
                                          <span class="fas fa-star"></span>
                                          <span class="fas fa-star"></span>
                                          <span class="far fa-star"></span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-8">
                                  <div class="d-sm-flex align-items-sm-start justify-content-sm-between">
                                      <div class="status">Status : Delivered</div>
                                      <div class="btn btn-primary text-uppercase">order info</div>
                                  </div>
                                  <div class="progressbar-track">
                                      <ul class="progressbar">
                                          <li id="step-1" class="text-muted green">
                                              <span class="fas fa-gift"></span>
                                          </li>
                                          <li id="step-2" class="text-muted green">
                                              <span class="fas fa-check"></span>
                                          </li>
                                          <li id="step-3" class="text-muted green">
                                              <span class="fas fa-box"></span>
                                          </li>
                                          <li id="step-4" class="text-muted green">
                                              <span class="fas fa-truck"></span>
                                          </li>
                                          <li id="step-5" class="text-muted green">
                                              <span class="fas fa-box-open"></span>
                                          </li>
                                      </ul>
                                      <div id="tracker"></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="order my-3 bg-light">
                          <div class="row">
                              <div class="col-lg-4">
                                  <div class="d-flex flex-column justify-content-between order-summary">
                                      <div class="d-flex align-items-center">
                                          <div class="text-uppercase">Order #fur10001</div>
                                          <div class="green-label ms-auto text-uppercase">cod</div>
                                      </div>
                                      <div class="fs-8">Products #03</div>
                                      <div class="fs-8">22 August, 2020 | 12:05 PM</div>
                                      <div class="rating d-flex align-items-center pt-1">
                                          <img src="https://www.freepnglogos.com/uploads/like-png/like-png-hand-thumb-sign-vector-graphic-pixabay-39.png"
                                              alt=""><span class="px-2">Rating:</span>
                                          <span class="fas fa-star"></span>
                                          <span class="fas fa-star"></span>
                                          <span class="fas fa-star"></span>
                                          <span class="fas fa-star"></span>
                                          <span class="far fa-star"></span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-8">
                                  <div class="d-sm-flex align-items-sm-start justify-content-sm-between">
                                      <div class="status">Status : Delivered</div>
                                      <div class="btn btn-primary text-uppercase">order info</div>
                                  </div>
                                  <div class="progressbar-track">
                                      <ul class="progressbar">
                                          <li id="step-1" class="text-muted green">
                                              <span class="fas fa-gift"></span>
                                          </li>
                                          <li id="step-2" class="text-muted">
                                              <span class="fas fa-check"></span>
                                          </li>
                                          <li id="step-3" class="text-muted">
                                              <span class="fas fa-box"></span>
                                          </li>
                                          <li id="step-4" class="text-muted">
                                              <span class="fas fa-truck"></span>
                                          </li>
                                          <li id="step-5" class="text-muted">
                                              <span class="fas fa-box-open"></span>
                                          </li>
                                      </ul>
                                      <div id="tracker"></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>

    <!-- MDB -->
    <script type="text/javascript" src="mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="script.js"></script>
	<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
	<script src="https://kit.fontawesome.com/64fd8e8cb1.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

	
	<footer>
		<p>Copyrights at <a href=""></a>BuyIn&SellOut</p>
	</footer>

	<!--jquery-->
	<script>

		$(".menu-btn").click(function(){
			$(".navbar.menu").toggleClass("active");
			$(".menu-btn i").toggleClass("active");
		});
		
		</script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>