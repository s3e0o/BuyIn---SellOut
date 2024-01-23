<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Dashboard</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS CDN (for icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Custom styles can be added here */
        body {
            padding-top: 56px; /* Adjust based on your navbar height */
        }
        .container-fluid a{
            display: flex;
            justify-content: space-evenly;
            margin-right: 75%;
            padding: 10px;   
        }
        #navbarNav a{
            padding-right: 30px;
            margin-right: 2%;
        }


        /* Sidebar styling */
        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #4576a8;
            padding-top: 75px;
        }

        .sidebar a {
            padding: 15px;
            text-decoration: none;
            color: #cbd4dd;
            display: block;
        }

        .sidebar a:hover {
            background-color: #060f16;
        }

        /* Content area styling */
        .content {
            margin-left: 250px;
            padding: 20px;
        }
    </style>
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Seller Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Orders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Account</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Sidebar -->
<div class="sidebar">
    <a href="#">Shipments</a>
    <a href="#">My Shipments</a>
    <br>
    <a href="#">Order</a>
    <a href="#">My Order</a>
    <a href="#">Cancellation</a>
    <a href="#">Return/Refund</a>
    <br>
    <a href="#">Product</a>
    <a href="#">My Product/s</a>
    <a href="#">Add New Product/s</a>
    <a href="#">Suspended Products</a>



</div>

<!-- Main Content Area -->
<div class="content">
    <h2>Welcome to the Seller Dashboard</h2>
    <!-- Add your dashboard content here -->
    <div class="content-form">
        
    </div>
</div>

<!-- Bootstrap JS and Popper.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
