﻿<html>
	<head>
		<title>CAR4SALE:The best place to rent or buy cars!</title>
	</head>
	<link rel = "stylesheet" type = "text/css" href = "homepage.css">
	<center>
		<div class = "image">
			<div id = "navbar">
			<img class ="logo-img" src = "logo.png">
			<a id = "linkref" href = "homepage1.php">Home</a>
			<a id = "linkref" href = "">What's New</a>
			<a id = "linkref" href = "">Buy</a>
			<a id = "linkref" href = "">Rent</a>
			<a id = "linkref" href = "Aboutus.php">About Us</a>
			<a id = "linkref1" style = "display:none;">Logout</a>
		</div>
	</center>
	<div id = pri>
	<p><center><h1><u>Privacy Policy</u></h1></center>
This privacy notice discloses the privacy practices for CARS4SALE.This privacy notice applies solely to information collected by this web site. 
It will notify you of the following: 
What personally identifiable information is collected from you through the web site, how it is used and with whom it may be shared.
What choices are available to you regarding the use of your data.
The security procedures in place to protect the misuse of your information.
How you can correct any inaccuracies in the information.
Information Collection, Use, and Sharing
We are the sole owners of the information collected on this site. We only have access to/collect information that you voluntarily give us via email or other direct contact 
from you. We will not sell or rent this information to anyone.
We will use your information to respond to you, regarding the reason you contacted us. We will not share your information with any third party outside of our organization, other than as necessary to fulfill your request, e.g. to ship an order.
Unless you ask us not to, we may contact you via email in the future to tell you about specials, new products or services, or changes to this privacy policy.
Your Access to and Control Over Information
You may opt out of any future contacts from us at any time. You can do the following at any time by contacting us via the email address or phone number given on our website: 
See what data we have about you, if any.
Change/correct any data we have about you.
Have us delete any data we have about you.
Express any concern you have about our use of your data.
Security
We take precautions to protect your information. When you submit sensitive information via the website, your information is protected both online and offline.
Wherever we collect sensitive information (such as credit card data), that information is encrypted and transmitted to us in a secure way. You can verify this by looking for a closed lock icon at the bottom of your web browser, or looking for "https" at the beginning of the address of the web page.
While we use encryption to protect sensitive information transmitted online, we also protect your information offline. Only employees who need the information to perform a specific job (for example, billing or customer service) are granted access to personally identifiable information. The computers/servers in which we store personally identifiable information are kept in a secure environment.
If you feel that we are not abiding by this privacy policy, you should contact us immediately via telephone at 905-670-7368 or via email info@cars4salerentals.com.
</p>
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