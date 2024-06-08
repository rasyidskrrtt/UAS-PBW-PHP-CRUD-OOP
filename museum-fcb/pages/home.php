<!DOCTYPE html>
<html>
<head>
    <title>Museum FC Bayern Munchen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .header {
            background-color: black;
            color: white;
            padding: 10px;
        }
        .header img {
            height: 76px;
        }
        .header span {
            font-size: 30px;
            margin-left: 10px;
        }
        .navbar-custom {
            background-color: #c60428;
        }
        .navbar-custom .nav-link {
            color: white;
            font-size: 15px;
        }
        .content img {
            width: 100%;
            height: auto;
        }
        .full-width {
            width: 100%;
        }
        .bordered {
            border: 2px solid #dc052d;
            padding: 5px;
        }
        .full-width-images {
            display: flex;
        }
        .full-width-images img {
            width: 50%;
            height: auto;
        }
        .day-mode {
            background-color: white;
            color: black;
        }
        .night-mode {
            background-color: #2c2c2c;
            color: white;
        }
        .header-buttons {
            display: flex;
            align-items: center;
        }
        .header-buttons form, .header-buttons .night-mode-btn {
            margin-left: 10px;
            background-color: #c60428;
            color: white;
        }
        .position-relative {
            position: relative;
        }
        .text-overlay {
            position: absolute;
            top: 10px;
            left: 10px;
            color: white;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 5px 10px;
            font-size: 24px;
            z-index: 1;
        }
        .image-container {
            margin-bottom: 1rem; /* Adjust margin as needed */
        }
        .text-below {
            text-align: center;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 10px 0;
            font-size: 18px;
        }
        .footer {
            background-color: #c60428;
            color: black;
            padding: 20px;
            text-align: center;
            margin-top: 20px;
        }
        .footer .social-icons {
            margin-top: 10px;
        }
        .footer .social-icons a {
            color: black;
            margin: 0 10px;
            text-decoration: none;
            font-size: 20px;
        }
        .footer .sponsor-logo img {
            width: 100px; /* Adjust size as needed */
            margin: 0 10px;
        }
    </style>
</head>
<body class="day-mode">
<!-- Header -->
<div class="container-fluid header">
  <div class="d-flex justify-content-between align-items-center">
    <div class="d-flex align-items-center">
      <img src="../images/FCB-Logo.png" alt="Logo FC Bayern Munich">
      <span>FC Bayern Museum</span>
    </div>
    <!-- Button Logout and Night Mode -->
    <div class="header-buttons">
      <form action="../pages/logout.php" method="post">
        <button type="submit" class="btn btn-sm btn-danger">Logout</button>
      </form>
      <button id="toggle-mode" class="btn btn-sm btn-secondary night-mode-btn">
        <i class="fas fa-moon"></i>
      </button>
    </div>
  </div>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-custom sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="../images/FCB-LogoB.png" alt="Logo" style="width:30px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="../pages/home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../pages/exhibition.php">Exhibition</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../pages/ticket.php">Ticket</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Content -->
<div class="container mt-5 content">
    <!-- New Content Section -->
    <div class="row">
        <div class="col-md-12">
            <div class="text-center mb-4">
                <h3 class="mt-1 mb-2" style="font-size: 24px;">Welcome to FC Bayern Museum!</h3>
                <p>Discover the history and glory of FC Bayern Munich through an extensive collection of memorabilia, interactive exhibits, and immersive experiences.</p>
            </div>
        </div>
    </div>
    
    <!-- Full-width Images Section -->
    <div class="row">
        <div class="col-md-12">
            <div class="full-width-images bordered mt-1">
                <img src="../images/Kiri-main.jpg" alt="Landscape 1">
                <img src="../images/Kanan-main.jpg" alt="Landscape 2">
            </div>
        </div>
    </div>
    
    <!-- Image Section with One Large on the Left and Two Smaller on the Right -->
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="image-container">
                <img src="../images/AARENA.jpg" alt="Exhibition Image" class="img-fluid bordered">
                <div class="text-below">The Allianz Arena.</div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="image-container">
                <img src="../images/Best-team.jpeg" alt="Best-team" class="img-fluid bordered">
                <div class="text-below">Best XI team in the world</div>
            </div>
            <div class="image-container">
                <img src="../images/Seppmaiyer.png" alt="Sepp Maier" class="img-fluid bordered">
                <div class="text-below">All the best, Sepp Maier!</div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sponsor-logo">
                    <img src="../images/adidas.png" alt="Sponsor 1">
                    <img src="../images/Telekom.png" alt="Sponsor 2">
                    <img src="../images/audi.png" alt="Sponsor 3">
                </div>
                <p class="mt-3">Created by Rasyid Iskandar Prayogi</p>
                <div class="social-icons">
                    <a href="https://www.facebook.com/fcbayern" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/fcbayern" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/fcbayern" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/fcbayern" target="_blank"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById('toggle-mode').addEventListener('click', function() {
        document.body.classList.toggle('night-mode');
        document.body.classList.toggle('day-mode');
        if (document.body.classList.contains('night-mode')) {
            this.innerHTML = '<i class="fas fa-sun"></i>';
        } else {
            this.innerHTML = '<i class="fas fa-moon"></i>';
        }
    });
</script>
</body>
</html>
