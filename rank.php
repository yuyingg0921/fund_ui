<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Ranking</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

	
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Ranking</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="home"></span>
                  Home <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="forecast.html">
                  <span data-feather="activity"></span>
                  Forecast
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Total Rank
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="alert-octagon"></span>
                  Risk Rank
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="category.html">
                  <span data-feather="list"></span>
                  Category
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="customized.html">
                  <span data-feather="users"></span>
                  Customized
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="recommend.html">
                  <span data-feather="star"></span>
                  Recommend
                </a>
              </li>
            </ul>


          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">



    <div class="container" >
      <div class="card-deck mb-1 text-center" >
	  
<?php
  print <<< HERE
  <table class="table table-hover">
  <tr>
   <th><h2>Rank</h2></th>
   <th><h2>Fund</h2></th>
   <th><h2>Month Profit</h2></th>
  </tr>
HERE;
  $data = file("fund_profit.csv");
  foreach ($data as $line){
  $lineArray = explode(",", $line);
  list($fName, $lName, $email) = $lineArray;
  print <<< HERE
   <tr >
   <td><h3>$fName</h3></td>
   <td><h3>$lName</h3></td>
   <td><h3>$email</h3></td>
   </tr>
HERE;
  } // end foreach
  //print the bottom of the table
  print "</table> ";
 ?>
 

      </div>

        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

  </body>
</html>
