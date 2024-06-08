<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

class MainPage {
    public function __construct() {
        $this->renderHeader();
        $this->renderNavbar();
    }

    protected function renderHeader() {
        echo '
        <!DOCTYPE html>
        <html>
        <head>
            <title>Museum FC Bayern Munchen</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
            <style>
                .header { background-color: black; color: white; padding: 10px; }
                .header img { height: 76px; }
                .header span { font-size: 30px; margin-left: 10px; }
                .navbar-custom { background-color: #c60428; }
                .navbar-custom .nav-link { color: white; font-size: 15px; }
                .content img { width: 100%; height: auto; }
                .full-width { width: 100%; }
                .bordered { border: 2px solid #dc052d; padding: 5px; }
                .full-width-images { display: flex; }
                .full-width-images img { width: 50%; height: auto; }
                .day-mode { background-color: white; color: black; }
                .night-mode { background-color: #2c2c2c; color: white; }
                .header-buttons { display: flex; align-items: center; }
                .header-buttons form, .header-buttons .night-mode-btn { margin-left: 10px; background-color: #c60428; color: white; }
            </style>
        </head>
        <body class="day-mode">
        <div class="container-fluid header">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <img src="../images/FCB-Logo.png" alt="Logo FC Bayern Munich">
                    <span>FC Bayern Museum</span>
                </div>
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
        ';
    }

    protected function renderNavbar() {
        echo '
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
        ';
    }

    public function renderFooter() {  //untuk bagian mode gelap/terang
        echo '
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            document.getElementById("toggle-mode").addEventListener("click", function() {
                document.body.classList.toggle("night-mode");
                document.body.classList.toggle("day-mode");
                if (document.body.classList.contains("night-mode")) {
                    this.innerHTML = "<i class=\"fas fa-sun\"></i>";
                } else {
                    this.innerHTML = "<i class=\"fas fa-moon\"></i>";
                }
            });
        </script>
        </body>
        </html>
        ';
    }
}

class ExhibitionPage extends MainPage {
    public function __construct() {
        parent::__construct();
        $this->renderContent();
        $this->renderFooter();
    }

    private function renderContent() {
        echo '<div class="container mt-5 content">';
        echo '<h1 class="text-center mb-4">Trophy Achievement Exhibition</h1>';
        // Start Card Section
        echo '<div class="row">';

        // Card 1
        echo '<div class="col-md-4">';
        echo '<div class="card mb-4">';
        echo '<img src="../images/UEFAliga.jpg" class="card-img-top" alt="Exhibition 1">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">UEFA Europa League</h5>';
        echo '<p class="card-text">Memories of pivotal encounters that etched the indomitable saga of FC Bayern Munich.</p>';
        echo '</div>';
        echo '</div>';
        echo '</div>';

        // Card 2
        echo '<div class="col-md-4">';
        echo '<div class="card mb-4">';
        echo '<img src="../images/ucl.jpg" class="card-img-top" alt="Exhibition 2">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">Liga Champions UEFA</h5>';
        echo '<p class="card-text">Memories of pivotal encounters that etched the indomitable saga of FC Bayern Munich.</p>';
        echo '</div>';
        echo '</div>';
        echo '</div>';

        // Card 3
        echo '<div class="col-md-4">';
        echo '<div class="card mb-4">';
        echo '<img src="../images/bundesliga.jpg" class="card-img-top" alt="Exhibition 3">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">Bundesliga Trophy</h5>';
        echo '<p class="card-text">Memories of pivotal encounters that etched the indomitable saga of FC Bayern Munich.</p>';
        echo '</div>';
        echo '</div>';
        echo '</div>';

        // Card 4
        echo '<div class="col-md-4">';
        echo '<div class="card mb-4">';
        echo '<img src="../images/fifacup.jpg" class="card-img-top" alt="Exhibition 4">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">FIFA Club World Cup</h5>';
        echo '<p class="card-text">Memories of pivotal encounters that etched the indomitable saga of FC Bayern Munich.</p>';
        echo '</div>';
        echo '</div>';
        echo '</div>';

        // Card 5
        echo '<div class="col-md-4">';
        echo '<div class="card mb-4">';
        echo '<img src="../images/dfb-pokal.jpg" class="card-img-top" alt="Exhibition 5">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">DFB-Pokal</h5>';
        echo '<p class="card-text">Memories of pivotal encounters that etched the indomitable saga of FC Bayern Munich.</p>';
        echo '</div>';
        echo '</div>';
        echo '</div>';

        // Card 6
        echo '<div class="col-md-4">';
        echo '<div class="card mb-4">';
        echo '<img src="../images/dfl-supercup.jpg" class="card-img-top" alt="Exhibition 6">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">DFL-Supercup</h5>';
        echo '<p class="card-text">Memories of pivotal encounters that etched the indomitable saga of FC Bayern Munich.</p>';
        echo '</div>';
        echo '</div>';
        echo '</div>';

        // End Card Section
        echo '</div>';
        // End Container
        echo '</div>';
        }
        }

        new ExhibitionPage();
        ?>