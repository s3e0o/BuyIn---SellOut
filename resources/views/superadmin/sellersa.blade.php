<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

	<!-- My CSS -->
	<link rel="stylesheet" href="{{ asset('admin_assets/css/sellersa.css') }}">
	<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

    <title>Seller Account</title>
</head>
<body>
    <!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="logo">
			<span class="icon"><i class='bx bxs-smile'></i></span>
			<span class="text">Super Admin</span>
		</a>
		<ul class="side-menu">

			<li  class="active">
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
			<li>
				<a href="profile.html">
					<span class="icon"><i class='bx bxs-comment' ></i></span>
					<span class="text">Profile of Buyer</span>
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
					<span class="form">
						<form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
						@csrf
						@method('DELETE')
						<button class="btn btn-danger" type="submit">Logout</button>
					</form></span>
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
                    <li>
                        <a href="accounts.html">Account</a>
                    </li>
                    <li class="arrow-icon"><i class='bx bx-chevron-right'></i></li>
            </div>
			<div class="box-info">
			<div class="box">
				<span class="icon"><iconify-icon icon="bx:user-circle"></iconify-icon></span>
				<div class="text">
					<h3>4</h3>
					<p>Total of Accounts</p>
				</div>
			</div>
		</div>
                <div class="table-data">
                    <div class="order">
                        <div class="head">
                            <h3>Seller Account</h3>
                            <span><i class='bx bx-search' ></i></span>
                            <span><i class='bx bx-filter' ></i></span>
                        </div>
                            <table>
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                    </tr>
                                </thead>
                
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>
                                            <img src="user.png" alt="">
                                        </td>
                                        <td>Kristel Jeanne Bautista</td>
                                        <td>0111111111</td>
                                        <td>Libsong East</td>
                                    </tr>
                                </tbody>
								<tbody>
                                    <tr>
                                        <td>02</td>
                                        <td>
                                            <img src="user.png" alt="">
                                        </td>
                                        <td>Kristel Jeanne Bautista</td>
                                        <td>0111111111</td>
                                        <td>Libsong East</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

					</div>
                    
                </div>

				<div class="table-data">
                    <div class="order">
                        <div class="head">
                            <h3>Buyers Account</h3>
                            <span><i class='bx bx-search' ></i></span>
                            <span><i class='bx bx-filter' ></i></span>
                        </div>
                            <table>
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                    </tr>
                                </thead>
                
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>
                                            <img src="user.png" alt="">
                                        </td>
                                        <td>Kristel Jeanne Bautista</td>
                                        <td>0111111111</td>
                                        <td>Libsong East</td>
                                    </tr>
                                </tbody>
								<tbody>
                                    <tr>
                                        <td>02</td>
                                        <td>
                                            <img src="user.png" alt="">
                                        </td>
                                        <td>Kristel Jeanne Bautista</td>
                                        <td>0111111111</td>
                                        <td>Libsong East</td>
                                    </tr>
                                </tbody>
                            </table>

					</div>
                    
                </div>
        </main>
	</section>
    <script src="accounts.js"></script>
</body>
</html>