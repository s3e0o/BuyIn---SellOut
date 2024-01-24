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
        body {
            padding-top: 56px; /* Adjust based on navbar height */
        }
        .container-fluid a{
            display: flex;
            justify-content: space-evenly;
            margin-right: 70%;
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
        .content {
            margin-left: 250px;
            padding: 20px;
        }

        /* Chat box styling */
        .chat-box {
            border: 1px solid #ccc;
            height: 400px;
            overflow-y: scroll;
            padding: 10px;
        }

        .message {
            margin-bottom: 10px;
        }

        /* Input area styling */
        .input-group {
            margin-top: 10px;
        }
        .card{
            max-width: 90%;
        }.nav-link img{
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 2px solid #e84118;
            padding: 2px;
        }a.nav-link{
            padding: 0px;
        }.card-body{
            height: 500px;
            overflow: auto;
            width: 100%;
        }.avatar{
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 2px solid #e84118;
            padding: 12px;
        }.card-footer{
            width: 100%;
        }.input-group{
            width: unset;
            align-items: center;
            margin-top: unset;
        }.container{
            margin-right: unset;
        }.container-fluid{
            margin-right: unset;
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
<div class="container mt-4">
    <div class="card mx-auto">
        <div class="card-header bg-transparent">
            <div class="navbar navbar-expand p-0">
                <ul class="navbar-nav me-auto align-items-center">
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <div class="position-relative" style="border-radius:50%;">
                                <img src="sonny1.jpg" class="img-fluid rounded circle" alt="">
                                <span class="position-absolute bottom-0 start-100 translate-middle p-1 bg-success border border-light rounded-circle">
                                    <span class="visually-hidden">New alerts</span>
                                  </span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Buyer</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="fa fa-info-circle"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </li>
                    
                </ul>
            </div>

        </div>
        <div class="card-body p-4">

            <div class="d-flex align-items-baseline mb4">
                <div class="position-relative avatar">
                    <img src="sonny1.jpg" class="img-fluid rounded circle" alt="">
                    <span class="position-absolute bottom-0 start-100 translate-middle p-1 bg-success border border-light rounded-circle">
                        <span class="visually-hidden">New alerts</span>
                      </span>
                </div>

                <div class="pe-2">
                    <div>
                        <div class="card d-inline-block p-2 px-3 m-1">Hi, is the item still available?</div>
                    </div>
                </div>
            </div>

            <div class="d-flex align-items-baseline text-end justify-content-end mb4">
                <div class="pe-2">
                    <div>
                        <div class="card d-inline-block p-2 px-3 m-1">Yes</div>
                    </div>
                    <div>
                        <div class="card d-inline-block p-2 px-3 m-1">Are you interested?</div>
                    </div>
                </div>
                
                <div class="position-relative avatar">
                    <img src="sonny1.jpg" class="img-fluid rounded circle" alt="">
                    <span class="position-absolute bottom-0 start-100 translate-middle p-1 bg-success border border-light rounded-circle">
                        <span class="visually-hidden">New alerts</span>
                      </span>
                </div>
            </div>

            <div class="d-flex align-items-baseline mb4">
                <div class="position-relative avatar">
                    <img src="sonny1.jpg" class="img-fluid rounded circle" alt="">
                    <span class="position-absolute bottom-0 start-100 translate-middle p-1 bg-success border border-light rounded-circle">
                        <span class="visually-hidden">New alerts</span>
                      </span>
                </div>

                <div class="pe-2">
                    <div>
                        <div class="card d-inline-block p-2 px-3 m-1">Yes na yes para sayo</div>
                    </div>
                </div>

            </div>

            <div class="d-flex align-items-baseline text-end justify-content-end mb4">
                <div class="pe-2">
                    <div>
                        <div class="card d-inline-block p-2 px-3 m-1">Okay, sabi mo eh</div>
                    </div>
                </div>
                
                <div class="position-relative avatar">
                    <img src="sonny1.jpg" class="img-fluid rounded circle" alt="">
                    <span class="position-absolute bottom-0 start-100 translate-middle p-1 bg-success border border-light rounded-circle">
                        <span class="visually-hidden">New alerts</span>
                      </span>
                </div>
            </div>

        </div>
        <div class="card-footer bg-transparent position-absolute bottom-0 m-0 p-1">
            <div class="input-group">
                <div class="input-group-text bg-transparent border-0">
                    <button class="btn light">
                        <i class="fas fa-paperclip"></i>
                    </button>
                </div>
                <input type="text" class="form-control border-0" placeholder="Write a message...">
            <div class="input-group">
                    <div class="input-group-text bg-transparent border-0">
                        <button class="btn light">
                            <i class="fas fa-smile"></i>
                        </button>
                    </div>
                <div class="input-group">
                    <div class="input-group-text bg-transparent border-0">
                    <button class="btn light">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and Popper.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
