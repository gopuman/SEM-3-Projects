<html>
	<head>
		<title>CAR4SALE:The best place to rent or buy cars!</title>
	</head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Lobster+Two|Montserrat|Open+Sans|Spectral+SC" rel="stylesheet">
	<link rel = "stylesheet" type = "text/css" href = "homepage.css">
	<center>
		<div class = "image">
			<div id = "navbar">
			<img class ="logo-img" src = "logo.png">
			<a id = "linkref" href = "homepage1.php">Home</a>
			<a id = "linkref" href = "CarHome1.php">Buy</a>
			<a id = "linkref" href = "CarHome1.php">Rent</a>
			<a id = "linkref" href = "CarHome1.php">Sell</a>
            <a id = "linkref" href = "Aboutus.php">About Us</a>
            <a id = "linkref1" style = "display:none;">Logout</a>
		</div>
	</center>
	<div id = "aboutus">
	<p>
	<h1><center><u>About Us</u></center></h1>Cars4Sale is a startup car dealer founded in 2017 by four teenage car enthusiasts: K P Arjun Rajesh, Gopal Nambiar, Hrishikesh, Gautam Srinidhi to provide a third party portal for customers to buy,
	sell or rent cars. It is a rapidly growing business venture which has made marketing of automobiles very effecive through online sales.
	The company essentially deals in finding the best prices available in the automobile industry and posts it on the website and is also a platform for renting and resale of cars.
	</p>
	</div>
	<div id = "us">
		<div id = "arjun">
			<a href ="https://www.facebook.com/gooner.juni" target = "_blank" ><img id = "b" src = "A.jpg"/></a>
			<p style="font-size:30px;font-family:Copperplate Gothic;"><b>Arjun Rajesh</b></p>
			<p>Student at PES University</p>
		</div>
		<div id = "gautam">
			<a href ="https://www.facebook.com/gautam.srinidhi" target = "_blank" ><img id = "b" src = "Ga.jpg"/></a>
			<p style="font-size:30px;font-family:Copperplate Gothic;"><b>Gautam Srinidhi</b></p>
			<p>Student at PES University</p>
		</div>
		<div id = "gopal">
			<a href ="https://www.facebook.com/gopal.nambiar2" target = "_blank" ><img id = "b" src = "Go.jpg"/></a>
			<p style="font-size:30px;font-family:Copperplate Gothic;"><b>Gopal Nambiar</b></p>
			<p>Student at PES University</p>
		</div>
		<div id = "hrishi">
			<a href ="https://www.facebook.com/hrishikesh.suresh.7" target = "_blank" ><img id = "b" src = "H.jpg"/></a>
			<p style="font-size:30px;font-family:Copperplate Gothic;"><b>Hrishikesh Suresh</b></p>
			<p>Student at PES University</p>
		</div>
    </div>
    <?php
        session_start();
        if(isset($_SESSION["userName"]))
        {echo "<script type='text/javascript'>document.getElementById('linkref1').innerHTML ='Logout'</script>";        
        echo "<script type='text/javascript'>document.getElementById('linkref1').href = 'logout.php'</script>";
        echo "<script type='text/javascript'>document.getElementById('linkref1').style.display = 'block'</script>";}
    ?>
</body>
</html>