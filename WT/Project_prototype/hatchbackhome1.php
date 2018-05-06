<html>
<head>
  <title>CARS4SALE:The best place to rent or buy cars!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Lobster+Two|Montserrat|Open+Sans|Spectral+SC" rel="stylesheet">  <style>
  ul {
list-style-type: none;
}
  </style>
<head>
<body link="white">
    <link rel = "stylesheet" type = "text/css" href = "carpages.css">
    <center>
    <div class="image">
      <div id="navbar">
      <img class="logo-img" src="logo.png">
      <a id = "linkref" href = "homepage1.php">Home</a>
			<a id = "linkref" href = "CarHome1.php">Buy</a>
			<a id = "linkref" href = "CarHome1.php">Rent</a>
			<a id = "linkref" href = "CarHome1.php">Sell</a>
			<a id = "linkref" href = "Aboutus.php">About Us</a>
			<a id = "linkref1" style = "display:none;">Logout</a>
    </div>
  </div></center>
</br>
</br>
</br>
</br>
</br>
</br>
<h1 style="color:white;font-family: 'Lobster Two', cursive;text-align:center;">List of Hatchbacks available for buying, selling and renting </h1>
  <div id = "x">
        <ul>
          <li><a href="figo.php">FORD FIGO</a></li>
        </br>
        </br>
          <ul>
            <li><img src="figored.jpg" height="300px" width="400px"></li>
          </ul>
        </br>
      </br>
          <li><a href="swift.php">MARUTI SWIFT</a></li>
        </br>
      </br>

          <ul>
            <li><img src="swift.png" height="300px" width="400px"></li></ul>
          </br>
        </br>
          <li><a href="baleno.php">BALENO</a></li>
        </br>
      </br>
          <ul>
            <li><img src="balenogrey.jpg" height="300px" width="400px"></li></ul>
          </br>
        </br>
          <li><a href="kuv100.php">MAHINDRA KUV 100</a></li>
        </br>
      </br>
          <ul>
            <li><img src="kuvred.jpg" height="300px" width="400px"></li>
       </ul>
     </ul>
  </div>

  </div>
<?php
        session_start();
        if(isset($_SESSION["userName"]))
        {echo "<script type='text/javascript'>document.getElementById('linkref1').innerHTML ='Logout'</script>";        
        echo "<script type='text/javascript'>document.getElementById('linkref1').href = 'logout.php'</script>";
        echo "<script type='text/javascript'>document.getElementById('linkref1').style.display = 'block'</script>";}
    ?>