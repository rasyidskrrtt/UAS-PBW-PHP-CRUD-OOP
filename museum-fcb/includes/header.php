<!DOCTYPE html>
<html lang="en">
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