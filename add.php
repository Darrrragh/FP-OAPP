
<?php
include 'login_checker.php';
include 'db_connect.php';


session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
    header("Location: login.php");
}
$res=mysql_query("SELECT * FROM b_users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Marker</title>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>

      <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OfferAPP </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <title>Offer App</title>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkSwBwTPv9Hul4ylzyvfsXmlVOPr1FRnw"
            type="text/javascript"></script>
   
  </head>

  <body style="margin:0px; padding:0px;" onload="load()">


  <div class="brand">OfferAPP </div>
    <div class="address-bar">Geolocation | Deals | Offers</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">OfferAPP </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="map.html">Map</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                     <li>
                        <a href="chat.html">Chat</a>
                    </li>

                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">


 <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Add An Offer!
                       
                    </h2>

                    <hr>
                  
                   
                </div>
            </div>
        </div>

    <div>
</head>
<body>
<center>
    <div id="content">
           <h1> hi <?php echo $userRow['business_name']; ?></h1>&nbsp;<a href="logout.php?logout">Sign Out</a>
        </div>


<form action="insert.php" method="post">
    <p>
        <label for="name">Business Name:</label>
       <input type="text" name="name" value="<?php echo $userRow['business_name'];?>" />
    </p>
    <p>
        <label for="address">Address:</label>
        <input type="text" name="address" value="<?php echo $userRow['address'];?>" id="address">
    </p>
    <p>
        <label for="offer">Offer:</label>
        <input type="text" name="offer"  id="offer">
    </p>
     <p>
        <label for="lat">lat:</label>
        <input type="text" name="lat" value="<?php echo $userRow['location_lat'];?>" id="lat">
    </p>
     <p>
        <label for="lng">lng:</label>
        <input type="text" name="lng" value="<?php echo $userRow['location_lng'];?>" id="lng">
    </p>
    <input type="submit" value="Submit">
</form>

    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
