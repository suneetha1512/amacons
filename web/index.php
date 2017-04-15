<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Amacons</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
  </head>
  <body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
       <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Amacons</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="images/image1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Welcome :)</h1>
              <p>You have reached a one stop destination for all your construction needs. Join us and we can make your hunt faster and easier.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="images/image2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>A House...</h1>
              <p>Dream a house and we can help you in fulfilling it. Choose one from our best collection and live like a king.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="images/image3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Think bigger.</h1>
              <p>You can find anything and everything needed for your construction.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">View more</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


  <div class="container text-center" id="gallery">
    <h1>Gallery</h1>
      <div class="row">
    <div class="col-md-4">
      <div class="thumbnail" style="width:80%">
        <a href="images/house1.jpeg" target="_blank">
          <img src="images/house1.jpeg" alt="Lights" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail" style="width:80%">
        <a href="images/house3.jpg" target="_blank">
          <img src="images/house3.jpg" alt="Nature" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail" style="width:80%">
        <a href="images/house3.jpg" target="_blank">
          <img src="images/house3.jpg" alt="Fjords" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail" style="width:80%">
        <a href="images/house2.jpg" target="_blank">
          <img src="images/house2.jpg" alt="Fjords" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
  </div>

 <h1><center>Post a free add</center></h1>
 <div class="container">
    <form class="form-horizontal">
        <div class="form-group">
            <label for="type" class="control-label col-sm-2">Type</label>
            <div class="col-xs-3">
              <select class="form-control" id="type">
                <option>house</option>
                <option>construction materials</option>
                <option>workers</option>
                <option>cement</option>
                <option>something</option>
            </select>
          </div>
        </div>  
        <div class="form-group">
          <label for="name" class="control-label col-sm-2">Name</label>
          <div class="col-xs-4"> 
            <input type="text" class="form-control" rows="5" id="name"/>
          </div>
        </div>
        <div class="form-group">
          <label for="description" class="control-label col-sm-2">Description</label>
          <div class="col-xs-4"> 
            <textarea class="form-control" rows="5" id="description" placeholder="write the full description"></textarea>
          </div>
        </div>
        <div class="form-group">
          <label for="latitude" class="control-label col-sm-2">Latitude</label>
          <div class="col-xs-4"> 
            <input type="text" class="form-control" rows="5" id="latitude"/>
          </div>
        </div>
        <div class="form-group">
          <label for="longitude" class="control-label col-sm-2">Longitude</label>
          <div class="col-xs-4"> 
            <input type="text" class="form-control" rows="5" id="longitude"/>
          </div>
        </div>
        <div class="form-group">
          <label for="area" class="control-label col-sm-2">Area</label>
          <div class="col-xs-4"> 
            <input type="text" class="form-control" rows="5" id="area"/>
          </div>
        </div>
        <div class="form-group">
          <label for="city" class="control-label col-sm-2">City</label>
          <div class="col-xs-4"> 
            <input type="text" class="form-control" rows="5" id="city"/>
          </div>
        </div><div class="form-group">
          <label for="landmark" class="control-label col-sm-2">Landmark</label>
          <div class="col-xs-4"> 
            <input type="text" class="form-control" rows="5" id="landmark"/>
          </div>
        </div>
        <div class="form-group">
          <label for="oname" class="control-label col-sm-2">Owner name</label>
          <div class="col-xs-4"> 
            <input type="text" class="form-control" rows="5" id="oname"/>
          </div>
        </div>
        <div class="form-group">
          <label for="ophone" class="control-label col-sm-2">Owner contact phone</label>
          <div class="col-xs-4"> 
            <input type="text" class="form-control" rows="5" id="ophone"/>
          </div>
        </div>
        <div class="form-group">
          <label for="exampleInputFile" class="control-label col-sm-2">Upload an image</label>
          <div class="col-xs-4"> 
            <input type="file" id="exampleInputFile" class="form-control">
            <p class="help-block">Upload high quality image for better views.</p>
          </div>
        </div>
        <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">Submit for review</button>
      </div>
    </div>
    </form>
 </div> 

  <?php
    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    $server = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"], 1);
    $conn = new mysqli($server, $username, $password, $db);
    if ($conn->connect_errno) {
      echo "Failed to connect to MySQL: (" . mysqli_connect_error() . ") " . $conn->connect_error;
    }
    $res = $conn->query("SELECT * FROM details limit 10");
    $res->data_seek(0);
    $count = 0;
    while ($row = $res->fetch_assoc()) {
      $data[$count]["type"] = $row['type'];
      $data[$count]["p_name"] = $row['p_name'];
      $data[$count]["description"] = $row['description'];
      $data[$count]["o_name"] = $row['o_name'];
      $data[$count]["o_phone"] = $row['o_phone'];
      $data[$count]["latitude"] = $row['latitude'];
      $data[$count]["longitude"] = $row['longitude'];
      $data[$count]["area"] = $row['area'];
      $data[$count]["city"] = $row['city'];
      $data[$count]["landmark"] = $row['landmark'];
      $count++;
    }
  ?>

   <div class="container-fluid text-center bg-grey" id="gallery">
    <h1>Gallery</h1>
    <div class="row text-center slideanim">
      <?php 
        foreach ($data as $index => $object) {
            echo "<div class='col-sm-6 col-md-4'>";
              echo "<div class='thumbnail'>";
                echo "<img src='images/house3.jpg' class='img-rounded' alt='house' width='400' height='300'>";
                  echo "<div class='caption'>";
                      echo "<p><strong>" . $data[$index]["p_name"] . "</strong></p>";
                      echo "<p>". $data[$index]["description"] ."</p>";
                  echo "</div>";
                echo "</div>";
              echo "</div>";
      }
      ?>
   </div> 
  </div>


    <div class="container marketing bg-grey" id="contact">
      <div class="row">
        <div class="col-sm-5">
          <img class="img-circle" src="images/contact-us.jpg" alt="Generic placeholder image" width="180" height="140">
          <p><b><span class="glyphicon glyphicon-phone"></span> Phone :</b>  9848022338 <br/>
            <b><span class="glyphicon glyphicon-phone"></span> Alternative Phone :</b>  9848022338 <br/>
             <b><span class="glyphicon glyphicon-envelope"></span> Email :</b>  someone@something.com <br/>
             <b><span class="glyphicon glyphicon-map-marker"></span> Address :</b> Benz circle, Vijayawada
           </p>
        </div>
      </div>
    </div>

  </body>
</html>
