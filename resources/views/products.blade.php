<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
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

</head>
<body>

    <nav class ="navbar">
        <div class="logo"><h2>Product</h2></div>
        <div class="search-box">
            <input type="text" class="tbox" placeholder="Search for products"/>
            <button class="searchbtn"><i class="fas fa-search"></i></i></button>
        </div>
        <ul class="menu">
            <li><a href="{{ asset('/homee')}}">Home</a></li>
            <li><a href="{{route('shopping.cart')}}">Cart</a></li>
            <li><a href="{{ asset('/account') }}">Account</a></li>
            <li><a href="{{ asset('/customersupport') }}">Customer Support</a></li>
        </ul>
		
<!--for resposive button-->
        <div class = "menu-btn">
            <i  class = "fa fa-bars"></i>
        </div>
    </nav>
    @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
    @endif

    <div class="row">
        @foreach($items as $item)
            <div class="col-md-3 col-6 mb-4">
                <div class="card">
                    <img src="{{ asset('img') }}/{{ $item->image }}" class="card-img-top"/>
                    <div class="card-body">
                        <h4 class="card-title">{{ $item->name }}</h4>
                        <p class="card-text"><strong>Price: </strong> ${{ $book->price }}</p>
                        <p class="btn-holder"><a href="{{ route('additem.to.cart', $item->id) }}" class="btn btn-outline-danger">Add to cart</a> </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    
</body>