
<html>
<head>
<style>
.parallax {
    /* The image used */
    background-image: url("hatchback1.jpg");

    /* Set a specific height */
    min-height: 700px;

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.parallax2{
  /* The image used */
  background-image: url("sedan1.jpg");

  /* Set a specific height */
  min-height: 700px;

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.parallax3{
  /* The image used */
  background-image: url("suv1.jpg");

  /* Set a specific height */
  min-height: 700px;

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

#overlay {
    position: fixed;
    display: none;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0,0,0,0.5);
    z-index: 2;
    cursor: pointer;
    opacity:0.2;
}

#text{
    position: absolute;
    top: 50%;
    left: 50%;
    font-size: 50px;
    color: black;
    transform: translate(-50%,-50%);
    -ms-transform: translate(-50%,-50%);
}
.bottom-left {
    position: absolute;
    bottom: 8px;
    left: 1106px;
}
</style>
</head>
<body onload=on()>

  <link rel = "stylesheet" type = "text/css" href = "homepage.css">
  <link href="https://fonts.googleapis.com/css?family=Lobster+Two|Montserrat|Open+Sans|Spectral+SC" rel="stylesheet">
  <center>
    <div class = "image">
      <div id = "navbar">
      <img class ="logo-img" src = "logo.png">
      <a id = "linkref" href = "homepage1.php">Home</a>
      <a id = "linkref" href = "CarHome1.php">Buy</a>
      <a id = "linkref" href = "CarHome1.php">Rent</a>
      <a id = "linkref" href = "CarHome1.php">Sell</a>
      <a id = "linkref" href = "Aboutus.php">About us</a>
	  <a id = "linkref1" style = "display:none;">Logout</a>

    </div>
  </center>

<pre>
  <div id="overlay" onclick="off()">
  <div id="text">click on the type of car you want</div>
</div>
<div onload ="on()"style="padding:20px">
</div>
</pre>




<div onclick="obj.fun1()" class="parallax"><p>click for hatchback</p><p class="bottom-left">scroll down</p></div>
<div onclick="obj.fun2()" class="parallax2"><p>click for sedan</p><p class="bottom-left">scroll down</p></div>
<div onclick="obj.fun3()" class="parallax3"><p>click for suv</p></div>
<script>
     var obj={}
     obj.fun1=function()
              {
                 window.open("hatchbackhome1.php");
              }
     obj.fun2=function()
              {
                 window.open("sedanhomepage.php");
              }
    obj.fun3=function()
              {
                 window.open("suvhome.php");
              }



    function on() {
             document.getElementById("overlay").style.display = "block";
         }

    function off() {
             document.getElementById("overlay").style.display = "none";
         }
  </script>
  <?php
        session_start();
        if(isset($_SESSION["userName"]))
        {echo "<script type='text/javascript'>document.getElementById('linkref1').innerHTML ='Logout'</script>";        
        echo "<script type='text/javascript'>document.getElementById('linkref1').href = 'logout.php'</script>";
        echo "<script type='text/javascript'>document.getElementById('linkref1').style.display = 'block'</script>";}
    ?>
</html>
