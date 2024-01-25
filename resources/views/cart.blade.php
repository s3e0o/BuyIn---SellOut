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
        <div class="logo"><h2>Cart</h2></div>
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

    <table id="cart" class="table table-bordered">
        <thead>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Total</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @php $total = 0 @endphp
            @if(session('cart'))
                @foreach(session('cart') as $id => $details)
                     
                    <tr rowId="{{ $id }}">
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-sm-3 hidden-xs"><img src="{{ $details['image'] }}" class="card-img-top"/></div>
                                <div class="col-sm-9">
                                    <h4 class="nomargin">{{ $details['name'] }}</h4>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">${{ $details['price'] }}</td>
                        
                        <td data-th="Subtotal" class="text-center"></td>
                        <td class="actions">
                            <a class="btn btn-outline-danger btn-sm delete-product"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    <script type="text/javascript">

        $(".edit-cart-info").change(function (e) {
                e.preventDefault();
                var ele = $(this);
                $.ajax({
                    url: '{{ route('update.shopping.cart') }}',
                    method: "patch",
                    data: {
                        _token: '{{ csrf_token() }}', 
                        id: ele.parents("tr").attr("rowId"), 
                    },
                    success: function (response) {
                    window.location.reload();
                    }
                });
            });

            $(".delete-product").click(function (e) {
                e.preventDefault();
   
                var ele = $(this);
   
                if(confirm("Do you really want to delete?")) {
                    $.ajax({
                        url: '{{ route('delete.cart.product') }}',
                        method: "DELETE",
                        data: {
                            _token: '{{ csrf_token() }}', 
                            id: ele.parents("tr").attr("rowId")
                        },
                        success: function (response) {
                            window.location.reload();
                        }
                    });
                }
            });   

    </script>