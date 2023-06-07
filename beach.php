<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Beaches</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/content_style.css">

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
<body>
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


<!-- Start of Content -------------------------------------------------------------------------------------------------->
<div class="container mt-5">
  <div class="row">
    <div class="col-md-12">
      <label for="places-dropdown">Filter by Location:</label>
      <select id="places-dropdown" class="form-control">
        <option value="all">All</option>
        <option value="Location 1">Location 1</option>
        <option value="Location 2">Location 2</option>
        <option value="Location 3">Location 3</option>
        <!-- Add more options for different locations -->
      </select>
    </div>
  </div>

  <br> 

  <div class="row">
    <div class="col-md-12">
      <div class="beach-card">
        <div class="row">
          <div class="col-md-6">
            <img src="img/nasugbu1.jpg" alt="Beach Image" class="card-image">
          </div>
          <div class="col-md-6">
            <div class="card-details">
              <h3 class="card-title">Location 1</h3>
              <p class="card-description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur vel tellus id bibendum.
                Morbi venenatis lacus at eleifend mattis. Phasellus ut orci vel enim tempus maximus. Sed in turpis
                id ex maximus cursus. Suspendisse mollis congue est, at pharetra tellus malesuada id.
                </p>
              <br>
              <a href="#" class="btn btn-primary view-btn" data-target="#location1Modal">View</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="beach-card">
        <div class="row">
          <div class="col-md-6">
            <img src="img/nasugbu1.jpg" alt="Beach Image" class="card-image">
          </div>
          <div class="col-md-6">
            <div class="card-details">
              <h3 class="card-title">Location 2</h3>
              <p class="card-description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur vel tellus id bibendum.
                Morbi venenatis lacus at eleifend mattis. Phasellus ut orci vel enim tempus maximus. Sed in turpis
                id ex maximus cursus. Suspendisse mollis congue est, at pharetra tellus malesuada id.
              </p>
              <br>
              <a href="#" class="btn btn-primary view-btn" data-target="#location2Modal">View</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="beach-card">
        <div class="row">
          <div class="col-md-6">
            <img src="img/nasugbu1.jpg" alt="Beach Image" class="card-image">
          </div>
          <div class="col-md-6">
            <div class="card-details">
              <h3 class="card-title">Location 3</h3>
              <p class="card-description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur vel tellus id bibendum.
                Morbi venenatis lacus at eleifend mattis. Phasellus ut orci vel enim tempus maximus. Sed in turpis
                id ex maximus cursus. Suspendisse mollis congue est, at pharetra tellus malesuada id.
              </p>
              <br>
              <a href="#" class="btn btn-primary view-btn" data-target="#location3Modal">View</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Add more beach cards with different images and descriptions -->
</div>
<!-- End of Content -------------------------------------------------------------------------------------------------->




 <!-- Popup Content -------------------------------------------------------------------------------------------------->
<div class="modal fade" id="location1Modal" tabindex="-1" role="dialog" aria-labelledby="location1ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="location1ModalLabel">Location 1</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur vel tellus id bibendum.
          Morbi venenatis lacus at eleifend mattis. Phasellus ut orci vel enim tempus maximus. Sed in turpis
          id ex maximus cursus. Suspendisse mollis congue est, at pharetra tellus malesuada id.
        </p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="location2Modal" tabindex="-1" role="dialog" aria-labelledby="location2ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="location2ModalLabel">Location 2</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur vel tellus id bibendum.
          Morbi venenatis lacus at eleifend mattis. Phasellus ut orci vel enim tempus maximus. Sed in turpis
          id ex maximus cursus. Suspendisse mollis congue est, at pharetra tellus malesuada id.
        </p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="location3Modal" tabindex="-1" role="dialog" aria-labelledby="location3ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="location3ModalLabel">Location 3</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur vel tellus id bibendum.
          Morbi venenatis lacus at eleifend mattis. Phasellus ut orci vel enim tempus maximus. Sed in turpis
          id ex maximus cursus. Suspendisse mollis congue est, at pharetra tellus malesuada id.
        </p>
      </div>
    </div>
  </div>
</div>







<script>

// DROPDOWN FUNCTION
    document.getElementById('places-dropdown').addEventListener('change', function() {
        var selectedOption = this.value;
        var beachCards = document.querySelectorAll('.beach-card');

    beachCards.forEach(function(card) {
        var cardTitle = card.querySelector('.card-title');
        var isVisible = selectedOption === 'all' || cardTitle.textContent === selectedOption;
        card.style.display = isVisible ? 'block' : 'none';
    });

    // Reset the spacing of the dropdown
    this.classList.toggle('space-adjusted', selectedOption !== 'all');
    });




// POPUP MODAL <script>
  document.querySelectorAll('.view-btn').forEach(function(button) {
    button.addEventListener('click', function() {
      var targetModal = this.getAttribute('data-target');
      $(targetModal).modal('show');
    });
  });


</script>




<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>

</body>
</html>