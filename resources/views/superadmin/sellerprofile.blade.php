<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

	<!-- My CSS -->
	<link rel="stylesheet" href="{{ asset('admin_assets/css/sellerprofile.css') }}">
	<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

    <title>Accounts of Sellers and Buyers</title>
</head>
<body>
    <!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="logo">
			<span class="icon"><i class='bx bxs-smile'></i></span>
			<span class="text">Super Admin</span>
		</a>
		<ul class="side-menu">

			<li>
				<a href="{{ asset('/selleracc') }}">
					<span class="icon"><i class='bx bxs-shopping-bag-alt' ></i></span>
					<span class="text">Accounts</span>
				</a>
				<span class="top"></span>
				<span class="bottom"></span>
			</li>
			<li>
				<a href="{{ asset('/sales') }}">
					<span class="icon"><i class='bx bxs-bar-chart-alt-2' ></i></span>
					<span class="text">Number of Sales</span>
				</a>
				<span class="top"></span>
				<span class="bottom"></span>
			</li>
			<li class="active">
				<a href="{{ asset('/sellerprofile') }}">
					<span class="icon"><i class='bx bxs-comment' ></i></span>
					<span class="text">Profile of Seller</span>
				</a>
				<span class="top"></span>
				<span class="bottom"></span>
			</li>
			<li>
				<a href="team.html">
					<span class="icon"><i class='bx bxs-group' ></i></span>
					<span class="text">Team</span>
				</a>
				<span class="top"></span>
				<span class="bottom"></span>
			</li>
		</ul>
			<span class="top"></span>
			<span class="bottom"></span>
		</li>
	</ul>

		<ul class="side-menu bottom">
			<li>
				<a href="#">
					<span class="icon"><i class='bx bxs-cog' ></i></span>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<span class="icon"><i class='bx bxs-log-out-circle' ></i></span>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->

    <!-- CONTENT -->
	<section id="content">
		<nav>
			<span class="menu-bar"><i class='bx bx-menu' ></i></span>
			<a href="#" class="link-nav">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-icon"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<a href="#" class="notification">
				<span class="icon"><i class='bx bxs-bell' ></i></span>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<span class="name">Jhon Doe</span>
				<img src="img/people.png" alt="Image">
			</a>
			<span class="curve"></span>
		</nav>

        <main>
            <div class="container profile-container">
                <div class="text-center">
                    <img src="profile-picture.jpg" alt="Profile Picture" class="profile-picture">
                    <h1 class="mt-3">Seller Name</h1>
                    <p class="lead">Business Name</p>
                </div>
        
                <hr>
        
                <h3>About Shop</h3>
                <p>Description about the shop goes here. You can provide a brief overview of products and items.</p>
        
                <h3>Business Experience</h3>
            </div>
        

        </main>
	</section>
    <script src="{{ asset('admin_assets/js/accounts.js') }}"></script>
    <!-- Bootstrap JS and Popper.js (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>