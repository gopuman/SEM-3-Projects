<!DOCTYPE html>
<html>
  <head>
    <?php
      session_start();
      $model = $_SESSION["model_name"];
      $company = $_SESSION["company"];
      $price = $_SESSION["price"];
     ?>
    <meta charset="utf-8">
    <meta name="viewpoint" content="width = device_width">
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>CARS4SALE:The best place to rent or buy cars!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lobster+Two|Montserrat|Open+Sans|Spectral+SC" rel="stylesheet">
    <title>Confirm Order</title>
    <link rel="stylesheet" type="text/css" href="orderConfirmation.css">
  </head>
  <body>
    <center>
    <div class="image">
      <div id="navbar">
      <img class="logo-img" src="logo.png">
      <a id="linkref" href="homepage1.php">Home</a>
      <a id="linkref" href="CarHome1.php">What's New</a>
      <a id="linkref" href="CarHome1.php">Buy</a>
      <a id="linkref" href="CarHome1.php">Rent</a>
      <a id="linkref" href="Aboutus.php">Contact Us</a>
      <a id = "linkref1" style = "display:none;">Logout</a>
    </div>
  </div></center>
</br>
</br>
</br>
</br>
</br>
</br>
  <center>
    <table>
      <caption>Order Details</caption>
      <tr>
        <th>CAR DETAILS</th>
        <th>PRICE</th>
      </tr>
      <tr>
        <td><?php echo $model." ".$company; ?></td>
        <td><?php echo $price ?></td>
      </tr>
    </table>
  </center>
    <!---<div id="map" style="width:400px;height:400px;background:yellow;float:right"></div>--->
    <form action="payment.php" method="post">
      <div class="details">
      <br>Enter address :
      <input id="textdetails" type="text" name="address" width="100px" height="30px;"><br>
      Select date of Delivery :<br>
      <input id="textdetails" type="date" name="order_date"><br>
      <input id="orderconfirmation" type="button" value="Confirm Order">
      <script>
      function myMap() {
        var mapOptions = {
                    center: new google.maps.LatLng(51.5, -0.12),
                    zoom: 10,
                    mapTypeId: google.maps.MapTypeId.HYBRID
                 }
                 var map = new google.maps.Map(document.getElementById("map"), mapOptions);
      }
      </script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHLaSpu_B9-DFb_CHWVkkrL8zNVdGNHJw"></script>
      </div>
      <div>
        <input class="locate" type="button" onclick="getLocation()" value="Allow Access for location">
     </div>
    </form>
    <script src="orderConfirmation.js">
    </script>
    <?php

            if(isset($_SESSION["userName"]))
            {echo "<script type='text/javascript'>document.getElementById('linkref1').innerHTML ='Logout'</script>";
            echo "<script type='text/javascript'>document.getElementById('linkref1').href = 'logout.php'</script>";
            echo "<script type='text/javascript'>document.getElementById('linkref1').style.display = 'block'</script>";}
        ?>
  </body>
</html>
