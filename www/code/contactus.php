<!DOCTYPE html>
<html lang="en">
<head>
  <title>News</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="\css\detail.css">
</head>
<body>
<div class="navbar-wrapper">
  <div class="container">
    <div class="navbar navbar-inverse navbar-static-top">
      
        <div class="navbar-header">
	    <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </a>
        <a class="navbar-brand" href="#">Study in Latvia</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li ><a href="index.php">Home</a></li>
            <li><a href="universities.php" target="ext">Universities</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="tax.php">Tax</a></li>
            <li><a href="transport.html">Transport</a></li>
            <li class="active"><a href="contactus.php">Contact us</a></li>
          </ul>
        </div>

    </div>
  </div><!-- /container -->
</div>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img src="\images\universities1.jpg" class="img-responsive">
      <div class="container">
        <div class="carousel-caption">
             <h3>Universities</h3>
          <p>Best universities in Latvia</p>
          </div>
      </div>
    </div>
    <div class="item">
      <img src="\images\transport1.jpg" class="img-responsive">
      <div class="container">
        <div class="carousel-caption">
            <h3>Transport</h3>
          <p>Explore the transportation system in Riga</p>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="\images\study1.jpg" class="img-responsive">
      <div class="container">
        <div class="carousel-caption">
                  <h3>Event</h3>
        <p>Attend best events suited for international student</p>
        </div>
      </div>
    </div>
  </div>
 
  <!-- Controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <i class="glyphicon glyphicon-chevron-left"></i>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <i class="glyphicon glyphicon-chevron-right"></i>
  </a>  
</div>
    <div class="container">
	<div class="row">
        
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
         <h1> Send us a message</h1>
         <hr>
          <form class="form-horizontal" action="" method="POST">
          <fieldset>
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Name</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Your E-mail</label>
              <div class="col-md-9">
                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
              </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Your message</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg">Comment</button>
              </div>
            </div>
                      <?php
            $db = new PDO("mysql:host=172.17.0.1:9097;dbname=sildb","root","root");
            
            if(isset($_POST['name'], $_POST['message'])){


    $stmt = $db->prepare("INSERT INTO contact (contact_name, contact_email, contact_message) values(:name, :email, :message)");
            $stmt->bindParam(':name', $_POST['name']);
            $stmt->bindParam(':email', $_POST['email']);
        $stmt->bindParam(':message', $_POST['message']);
       
        $stmt->execute();


}
            
          ?>
          </fieldset>

          </form>
        </div>
      </div>
	</div>
</div>
 </body>
</html>
