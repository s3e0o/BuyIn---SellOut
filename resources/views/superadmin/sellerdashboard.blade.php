<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

	<!-- My CSS -->
	<link rel="stylesheet" href="{{ asset('admin_assets/css/sellerdashboard.css') }}">

	<title>Super Admin Dashboard</title>
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
				<a href="#">
					<span class="icon"><i class='bx bxs-dashboard' ></i></span>
					<span class="text">Dashboard</span>
				</a>
				<span class="top"></span>
				<span class="bottom"></span>
			</li>
			<li>
				<a href="accounts.html">
					<span class="icon"><i class='bx bxs-shopping-bag-alt' ></i></span>
					<span class="text">Accounts</span>
				</a>
				<span class="top"></span>
				<span class="bottom"></span>
			</li>
			<li>
				<a href="sales.html">
					<span class="icon"><i class='bx bxs-bar-chart-alt-2' ></i></span>
					<span class="text">Number of Sales</span>
				</a>
				<span class="top"></span>
				<span class="bottom"></span>
			</li>
			<li>
				<a href="profile.html">
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
				<span class="name">Admin</span>
				<img src="user.png" alt="Image">
			</a>
			<span class="curve"></span>
		</nav>

		<main>
			<div class="top">
				<div class="left">
					<h1 class="title">Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li class="arrow-icon"><i class='bx bx-chevron-right'></i></li>
						<li>
							<a href="#" class="active">Home</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<span class="icon"><i class='bx bxs-cloud-download' ></i></span>
					<span class="text">Download PDF</span>
				</a>
			</div>
			<div class="box-info">
				<div class="box">
					<span class="icon"><i class='bx bxs-calendar-check'></i></span>
					<div class="text">
						<h3>1200</h3>
						<p>New Order</p>
					</div>
				</div>
				<div class="box">
					<span class="icon"><i class='bx bxs-group' ></i></span>
					<div class="text">
						<h3>2040</h3>
						<p>Visitors</p>
					</div>
				</div>
				<div class="box">
					<span class="icon"><i class='bx bxs-dollar-circle' ></i></span>
					<div class="text">
						<h3>P506</h3>
						<p>Total Sales</p>
					</div>
				</div>
			</div>
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Recent Order</h3>
						<span><i class='bx bx-search' ></i></span>
						<span><i class='bx bx-filter' ></i></span>
					</div>
					<table>
						<thead>
							<tr>
								<th>User</th>
								<th>Date order</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img src="img/people.png" alt="Image">
									<span class="name">John Doe</span>
								</td>
								<td>29-10-2021</td>
								<td><span class="badge completed">Completed</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png" alt="Image">
									<span class="name">John Doe</span>
								</td>
								<td>29-10-2021</td>
								<td><span class="badge process">Process</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png" alt="Image">
									<span class="name">John Doe</span>
								</td>
								<td>29-10-2021</td>
								<td><span class="badge process">Process</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png" alt="Image">
									<span class="name">John Doe</span>
								</td>
								<td>29-10-2021</td>
								<td><span class="badge pending">Pending</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png" alt="Image">
									<span class="name">John Doe</span>
								</td>
								<td>29-10-2021</td>
								<td><span class="badge completed">Completed</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png" alt="Image">
									<span class="name">John Doe</span>
								</td>
								<td>29-10-2021</td>
								<td><span class="badge pending">Pending</span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="todo">
					<div class="head">
						<h3>Todo List</h3>
						<span><i class='bx bx-plus' ></i></span>
						<span><i class='bx bx-filter' ></i></span>
					</div>
				</div>
			</div>
		</main>
	</section>
	<!-- CONTENT -->


	<script src="dashboard.js"></script>
</body>
</html>