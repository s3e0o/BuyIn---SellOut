<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Seller Registration Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="nunito-font.css"/>
    <link rel="stylesheet" href="{{ asset('admin_assets/css/sellerform.css') }}"/>
	<link rel="stylesheet" href="{{ asset('admin_assets/css/owl.carousel.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('admin_assets/css/bootstrap.min.css') }}"/>
</head>
<body class="form-v9">
	<nav class ="navbar">
        <div class="logo"><h2>Products</h2></div>
        <div class="search-box">
            <input type="text" class="tbox" placeholder="Search for products"/>
            <button class="searchbtn"><i class="fas fa-search"></i></i></button>
        </div>
        <ul class="menu">
            <li><a href="{{ asset('/homee')}}">Home</a></li>
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

	<div class="container">
		@if(Session::has('success'))
		<div class="alert alert-success" role="alert">
			{{ Session::get('success') }}
		</div>
		@endif
		<form class="justify-content-center" id="sellerForm" onsubmit="return validateForm()" action="{{ route('sellerreg') }}" method="POST">
			@csrf
			<label for="registeredName">Registered Name</label>
			<input for="text" id="registeredName" name="registeredName" placeholder="Your Name" required>
		
			<label for="sellerType">Seller Type:</label>
			<select id="sellerType" name="sellerType">
			<option value="individual">Individual</option>
			<option value="group">Group</option>
			</select>

			<label for="registeredAddress">Registered Address </label>
			<input type="text" id="registeredAddress" name="registeredAddress" placeholder="Your Address"required>
		
			<label for="businessName">Business Type</label>
			<input type="text" id="businessName" name="businessName" placeholder="Your Business Name"required>

			<label for="shopName">Shop Name</label>
			<input for="text" maxlength="30" id="shopName" name="shopName" placeholder="Your Shop Name"required>
		
			<label for="pickupAddress">Pick-up Address</label>
			<input type="text" id="pickupAddress" name="pickupAddress" placeholder="Your Pickup Address"required>
		
			<label for="email">Email Address:</label>
			<input type="text" id="email" name="email" placeholder="Your Email" required>
		
			<label for="phoneNo">Contact Number</label>
			<input type="text" maxlength="11" id="phoneNo" name="phoneNo" placeholder="Your Contact Number"required>

			<label for="password">Password</label>
			<input type="password" id="password" name="password" placeholder="Your Password"required>

			<label for="confirm_password">Confirm Password</label>
			<input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required> 
			<br>
			<br>
			<button type="button" onclick="cancelForm()">Cancel</button>
			<br>
			<br>
			<button>Submit</button>
		</form>
	</div>

	
<script>
    function validateForm() {
      var registeredName = document.getElementById('registeredName').value;
      var sellerType = document.getElementById('sellerType').value;
      var registeredAddress = document.getElementById('registeredAddress').value;
      var businessName = document.getElementById('businessName').value;
	  var shopName = document.getElementById('shopName').value;
      var pickupAddress = document.getElementById('pickupAddress').value;
      var email = document.getElementById('email').value;
      var contact = document.getElementById('contact').value;
	  var phoneNo = document.getElementById('phoneNo').value;
	  var password = document.getElementById('password').value;
	  var verification = document.getElementById('confirm_password').value;

      if (registeredName === '' || sellerType === '' || registeredAddress === '' || businessName ==='' || shopName === '' || pickupAddress === '' || email === '' || contact ==='' || phoneNo ==='' || password === '' || confirm_password === '') {
        alert('Please fill in all fields');
        return false;
      }
      alert('Form submitted successfully!');
      return true;
    }

    function cancelForm() {
			document.getElementById("sellerForm").reset();
		  }
  </script>

      	<script type="text/javascript" src="{{ asset('js/min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
	    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>

	<script>
		window.onscroll = function() {myFunction()};
		var navbar = document.getElementById("navbar");
		var sticky = navbar.offsetTop;
		function myFunction() {
		  if (window.pageYOffset >= sticky) {
			navbar.classList.add("sticky")
		  } else {
			navbar.classList.remove("sticky");
		  }
		}
	</script>
</body>
</html>
