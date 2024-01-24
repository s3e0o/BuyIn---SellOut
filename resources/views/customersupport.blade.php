<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Create Account</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="nunito-font.css"/>
	<!-- Main Style Css -->
    <link rel="stylesheet" href="{{ asset('admin_assets/css/customersupport.css') }}"/>
	<link rel="stylesheet" href="{{ asset('admin_assets/css/owl.carousel.min.css') }}"/>
	<!-- Bootstrap Css -->
    <link rel="stylesheet" href="{{ asset('admin_assets/css/bootstrap.min.css') }}"/>
	<!-- Required meta tags -->
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
      <h2 style="color:black; text-align:center">
        Frequently Asked Questions
      </h2>
    <br>
    <br>
    <div class="faq-section">
      <h2>Buying FAQs</h2>
        <div class="accordion">
            <div class="accordion__question">
                <p>1.How do I place an order?</p>
            </div>
            <div class="accordion__answer">
                <p>To place an order, simply browse our website, select the desired items, and add them to your cart. Follow the checkout process to complete your purchase.</p>
            </div>
        </div>

        <div class="accordion">
            <div class="accordion__question">
                <p>2.What payment methods do you accept?</p>
            </div>
            <div class="accordion__answer">
                <p>We accept a variety of payment methods, including credit/debit cards, PayPal, and other secure payment options. You can find the full list during the checkout process.</p>
            </div>
        </div>

        <div class="accordion">
              <div class="accordion__question">
                  <p>3.Can I modify or cancel my order after it's placed?</p>
              </div>
              <div class="accordion__answer">
                  <p>Unfortunately, once an order is confirmed, it cannot be modified or canceled. Please review your order carefully before completing the purchase.</p>
              </div>
          </div>
    
          <div class="accordion">
            <div class="accordion__question">
                <p>4.How can I track my order?</p>
            </div>
            <div class="accordion__answer">
                <p>Once your order is shipped, you will receive a confirmation email with a tracking number. Use this number on our "Order Tracking" page to monitor your shipment's progress.</p>
            </div>
        </div>
        
        <div class="accordion">
          <div class="accordion__question">
              <p>5.What is your return policy?</p>
          </div>
          <div class="accordion__answer">
              <p>Our return policy allows you to return items within [X] days of receiving them. Visit our "Returns" page for detailed instructions on how to initiate a return.</p>
          </div>
      </div>

      <div class="accordion">
        <div class="accordion__question">
            <p>6.Are there any additional costs, such as taxes or shipping fees?</p>
        </div>
      <div class="accordion__answer">
          <p>All relevant costs, including taxes and shipping fees, will be displayed during the checkout process. There are no hidden charges.</p>
      </div>
      </div>
      <div class="accordion">
        <div class="accordion__question">
            <p>7.Is it safe to shop and sell on your website?</p>
        </div>
      <div class="accordion__answer">
          <p>Yes, our website employs the latest security measures to ensure the safety of your personal and payment information. We use secure encryption and follow industry best practices.</p>
      </div>
    </div>
  </div>
  
  <div class="faq-section">
    <h2>Selling FAQs</h2>
      <div class="accordion">
          <div class="accordion__question">
              <p>1.How can I sell my products on your platform?</p>
          </div>
          <div class="accordion__answer">
              <p>To become a seller, you can sign up for a seller account on our website. Once approved, you can list your products and manage your inventory through the seller dashboard.</p>
          </div>
      </div>
      <div class="accordion">
          <div class="accordion__question">
              <p>2. What types of products can I sell?</p>
          </div>
          <div class="accordion__answer">
              <p>We welcome a variety of products, but they must adhere to our guidelines. Restricted items and prohibited content are outlined in our seller policies.</p>
          </div>
      </div>
      <div class="accordion">
            <div class="accordion__question">
                <p>3. How does the payment process work for sellers?</p>
            </div>
            <div class="accordion__answer">
                <p>We offer secure payment processing for sellers. Once a sale is made, funds are typically transferred to your account after deducting applicable fees.</p>
            </div>
        </div>
  
        <div class="accordion">
          <div class="accordion__question">
              <p>4. What are the seller fees and commissions?</p>
          </div>
          <div class="accordion__answer">
              <p>Our fees and commissions vary based on the type of product and service level. You can find detailed information about fees on our seller resources page.</p>
          </div>
      </div>
      
      <div class="accordion">
        <div class="accordion__question">
            <p>5. How do I manage returns and customer inquiries?</p>
        </div>
        <div class="accordion__answer">
            <p>Sellers are responsible for managing returns and addressing customer inquiries. You can access order details and communicate with buyers through your seller dashboard.</p>
        </div>
    </div>

    <div class="accordion">
      <div class="accordion__question">
          <p>6. How can I promote my products on your platform?</p>
      </div>
    <div class="accordion__answer">
        <p>We provide various tools for sellers to promote their products, including featured listings and promotional campaigns. Explore the seller dashboard for marketing opportunities.</p>
    </div>
    </div>
    <div class="accordion">
      <div class="accordion__question">
          <p>7. What support do you offer to sellers?</p>
      </div>
    <div class="accordion__answer">
        <p>We offer seller support through our help center, dedicated support team, and community forums. Sellers can find resources and guidance on optimizing their selling experience.</p>
    </div>
  </div>
</div>
  <div class="clearfix"></div>

<script>
    let answers = document.querySelectorAll(".accordion");
    answers.forEach((event) => {
    event.addEventListener("click", () => {
        if (event.classList.contains("active")) {
            event.classList.remove("active");
        } else {
            event.classList.add("active");
        }
    });
});
</script>
	
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
