<html>
<head>
  <?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "users";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * from car_details where model_name = 'city'";
    $result = $conn->query($sql)->fetch_assoc();
    $_SESSION["model_name"] = $result["model_name"];
    $_SESSION["company"] = $result["company"];
    $_SESSION["price"] = $result["price"];
   ?>
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>CARS4SALE:The best place to rent or buy cars!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Lobster+Two|Montserrat|Open+Sans|Spectral+SC" rel="stylesheet">

    <style>
        .checked {
           color: orange;
           }
         body{
           color:white;
           font-family: cursive;
         }
         #button1{
           background-color: #4CAF50;
           border: none;
           color: white;
           padding: 15px 32px;
           text-align: center;
           text-decoration: none;
           display: inline-block;
           font-size: 16px;
           margin: 4px 2px;
           cursor: pointer;
          }
          #button2{
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
           }
           #relative{
             position: absolute;
             top: 200px;
             left:800px;


           }

           * {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 500px;
  position: relative;
  top:30px;
  left:50px;

}

.mySlides {
    display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor:pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
table {
    border-collapse: collapse;
    width: 80%;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:hover{background-color:rgb(128,128,128)}

    </style>
  </head>
  <body>
    <link rel="stylesheet" type="text/css" href="homepage.css">
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
<br><br><br><br><br>
  <h1>Honda City</h1>
  <div id="relative">
    <h3>Starting at Rs8,80,000</h3>
    <p>color picker</p>
    <input type="color" value="CHOOSE">
    <h2>Star Rating</h2>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>

  </div>
  <div id="slide" >
    <div class="slideshow-container" >
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="city.jpg" style="width:100%">
    <div class="text" style="color:black;">White</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="cityred.jpg" style="width:100%">
    <div class="text" style="color:black;">Red</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="citygrey.jpg" style="width:100%">
    <div class="text" style="color:black;">Grey</div>
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

</br>
</br>
    <form action="orderConfirmation.php">
      <input id="button1" type="submit" value="BUY NOW!">
      <input id="button2" type="submit" value="ADD TO CART">
    </form>
  </div>
<br>
<br>
<br>
<center>
  <div>
    <h2>specifications</h2>
    <table border="1px">
      <tbody><tr>
        <th>Model Name</th>
        <th>Price(Rs)</th>
        <th>Engine capacity(Litres)</th>
        <th>petrol/diesel</th>
        <th>Sell(Rs)</th>
        <th>Rent(Rs)</th>
      </tr>
      <tr>
        <td>Honda City S Petrol</td>
        <td>8,80,000</td>
        <td>1.5</td>
        <td>petrol</td>
        <td>7,80,000</td>
        <td>95 per hr(Fuel Free)</td>
      </tr>
      <tr>
        <td>Honda City SV Diesel</td>
        <td>11,00,000</td>
        <td>1.5</td>
        <td>diesel</td>
        <td>10,00,000</td>
        <td>95 per hr(Fuel Free)</td>
      </tr>
    </tbody></table>
  </div>
</center>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
showSlides(slideIndex += n);
}

function currentSlide(n) {
showSlides(slideIndex = n);
}

function showSlides(n) {
var i;
var slides = document.getElementsByClassName("mySlides");
var dots = document.getElementsByClassName("dot");
if (n > slides.length) {slideIndex = 1}
if (n < 1) {slideIndex = slides.length}
for (i = 0; i < slides.length; i++) {
   slides[i].style.display = "none";
}
for (i = 0; i < dots.length; i++) {
   dots[i].className = dots[i].className.replace(" active", "");
}
slides[slideIndex-1].style.display = "block";
dots[slideIndex-1].className += " active";
}


</script>
<?php

        if(isset($_SESSION["userName"]))
        {echo "<script type='text/javascript'>document.getElementById('linkref1').innerHTML ='Logout'</script>";
        echo "<script type='text/javascript'>document.getElementById('linkref1').href = 'logout.php'</script>";
        echo "<script type='text/javascript'>document.getElementById('linkref1').style.display = 'block'</script>";}
    ?>

</body></html>
