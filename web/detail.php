<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Amacons</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
  </head>
  <body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>

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
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="?type=all#gallery">Gallery</a></li>
                <li><a href="?type=workers#gallery">Workers</a></li>
                <li><a href="index.php#contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>

    <div class="container">
      <br/><br/><br/>
        <?php
          if(!isset($_GET["id"])) {
              echo "<h1>Please pass a valid id in the url</h1>";
              die();
          }
          $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
          $server = $url["host"];
          $username = $url["user"];
          $password = $url["pass"];
          $db = substr($url["path"], 1);
          $conn = new mysqli($server, $username, $password, $db);
          if ($conn->connect_errno) {
            echo "Failed to connect to MySQL: (" . mysqli_connect_error() . ") " . $conn->connect_error;
          }
          $query = "SELECT * FROM details where id='". $_GET['id'] . "'";
          $res = $conn->query($query);
          $res->data_seek(0);
          while ($row = $res->fetch_assoc()) {
            $data["type"] = $row['type'];
            $data["p_name"] = $row['p_name'];
            $data["description"] = $row['description'];
            $data["o_name"] = $row['o_name'];
            $data["o_phone"] = $row['o_phone'];
            $data["latitude"] = $row['latitude'];
            $data["longitude"] = $row['longitude'];
            $data["area"] = $row['area'];
            $data["city"] = $row['city'];
            $data["landmark"] = $row['landmark'];
            $data["images"] = $row['images'];
          }
        ?>
    </div>  

    <div class="container-fluid text-center bg-grey" id="gallery">
    <h2 align="left"><u>Images</u></h2><br/>
    <div class="row text-center slideanim">
      <?php 
          $images = explode('|', $data["images"]);
          foreach ($images as $image) {
              echo "<div class='col-sm-6 col-md-4'>";
              echo "<div class='thumbnail'>";
              echo "<img src='" . $image . "' class='img-rounded' alt='house' width='300' height='100'>";        
              echo "</div>";
              echo "</div>";
          }
      ?>
   </div> 

   <h4 align="left"><u>Description</u></h4>
    <p align="left"> <?php echo $data["description"]; ?> </p>

   <h4 align="left"><u>Address</u></h4> 
    <p align="left"><b>Location:</b> <?php echo $data["area"].",".$data["city"]; ?> </p>
    <p align="left"><b>Landmark:</b> <?php echo $data["landmark"]; ?> </p>

    <h4 align="left"><u>Owner contact</u></h4> 
    <p align="left"><b>Name:</b> <?php echo $data["o_name"]; ?> </p>
    <p align="left"><b>Phone:</b> <?php echo $data["o_phone"]; ?> </p>

  </div> 
</body>  
</html>  

