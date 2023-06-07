<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Travel Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/simplebar@5.3.5/dist/simplebar.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            margin: 0;
             padding: 0;
            width: 100%;
            height: 100%;
            background-image: url('img/background.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            opacity: 1;
            backdrop-filter: brightness(100%) blur(3px); 
            /* add opacity to make the background slightly faded */
        }
    </style>

</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="Travel Website Logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="travel_packages.php">Travel Prices</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about_us.php">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Contact</a>
            </li>
        </ul>
    </div>
</nav>


<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <br>
                <br>
                <br>
                <div class="list-group">
                    <a href="beach.php" class="list-group-item list-group-item-action">
                        Beach
                    </a>
                    <br>
                    <a href="#mountainSection" class="list-group-item list-group-item-action">
                        Mountain/Hiking
                    </a>
                    <br>
                    <a href="#fallsSection" class="list-group-item list-group-item-action">
                        Falls
                    </a>
                    <br>
                    <a href="#divingSection" class="list-group-item list-group-item-action">
                        Diving
                    </a>
                    <br>
                    <a href="#museumSection" class="list-group-item list-group-item-action">
                        Museum
                    </a>
                </div>
            </div>
            <div class="col-md-9">
                <br>
                <br>
                <h1>Discover Philippines CALABARZON</h1>
                <p>Explore the beautiful tourist spots of Region 4-A CALABARZON and experience the best travel prices with us.</p>
                <a href="#" class="btn btn-primary">Travel Prices</a>
            </div>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/simplebar@5.3.5/dist/simplebar.min.js"></script>

<script src="js/scripts.js"></script>

</body>
</html>
