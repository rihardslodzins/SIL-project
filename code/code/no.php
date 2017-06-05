<?php
session_start();
setcookie("PHPSESSID","", time()-3600 );
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="\css\style.css">
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Study In Latvia</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Universities</a></li>
        <li><a href="#">Events</a></li>
        <li><a href="#">Tax</a></li>
        <li><a href="#">Transport</a></li>
        <li><a href="#">Contact us</a></li>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="\images\universities.c.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Universities</h3>
          <p>Best universities in Latvia</p>
        </div>      
      </div>

      <div class="item">
        <img src="\images\transport.c.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Transport</h3>
          <p>Explore the transportation system in Riga</p>
        </div>      
      </div>
    

    <div class="item">
      <img src="\images\event.c.jpg" alt="Image">
      <div class="carousel-caption">
        <h3>Event</h3>
        <p>Attend best events suited for international student</p>
      </div>  
    </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<!-- News container -->
<div class="container" id="mycontainer">
    <div class="row">
      <?php
           require_once('news.php'); 
           showLatestNews();
      ?>
        <div class="col-md-6 col-lg-6">
            <ul class="all-blogs">
                <?php
                require_once('news.php');
                showAllNews();
              ?>     
            </ul>
        </div>
    </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>