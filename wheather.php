<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Weather</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="css/modern-business.css" rel="stylesheet">
  <link rel="stylesheet" href="wheather1.css">
  <script src="wheather.js" defer></script>
</head>
<style>
        .navbar-toggler {
            z-index: 1;
        }

        @media (max-width: 576px) {
            nav>.container {
                width: 100%;
            }
        }

        .carousel-item.active,
        .carousel-item-next,
        .carousel-item-prev {
            display: block;
        }
    </style>
<body>
  <?php include('includes/header.php'); ?>

  <div class="container">
    <br>
  <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Weather</li>
        </ol>
   
    <div class="row">
      <div class="col-sm-11 offset-sm-4 col-11">
        <div class="card">
          <div class="search">
            <input type="text" class="search-bar" placeholder="Search">
            <button><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1.5em" width="1.5em" xmlns="http://www.w3.org/2000/svg">
                <path d="M909.6 854.5L649.9 594.8C690.2 542.7 712 479 712 412c0-80.2-31.3-155.4-87.9-212.1-56.6-56.7-132-87.9-212.1-87.9s-155.5 31.3-212.1 87.9C143.2 256.5 112 331.8 112 412c0 80.1 31.3 155.5 87.9 212.1C256.5 680.8 331.8 712 412 712c67 0 130.6-21.8 182.7-62l259.7 259.6a8.2 8.2 0 0 0 11.6 0l43.6-43.5a8.2 8.2 0 0 0 0-11.6zM570.4 570.4C528 612.7 471.8 636 412 636s-116-23.3-158.4-65.6C211.3 528 188 471.8 188 412s23.3-116.1 65.6-158.4C296 211.3 352.2 188 412 188s116.1 23.2 158.4 65.6S636 352.2 636 412s-23.3 116.1-65.6 158.4z">
                </path>
              </svg></button>
          </div>

          <div class="weather loading">
            <h2 class="city">Weather in Kolhapur</h2>
            <h1 class="temp">51°C</h1>
            <div class="flex">
              <img src="https://openweathermap.org/img/wn/04n.png" alt="" class="icon" />
              <div class="description">Cloudy</div>
            </div>
            <div class="humidity">Humidity: 60%</div>
            <div class="wind">Wind speed: 6.2 km/h</div>

          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/tether/tether.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
<br><br><br><br><br><br><br><br>
<?php include('includes/footer.php'); ?>

</html>