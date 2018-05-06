<html>
   <head>
     <title>Sign Up</title>
     <link rel="stylesheet" type="text/css"  href="Signup-css.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://fonts.googleapis.com/css?family=Lobster+Two|Montserrat|Open+Sans|Spectral+SC" rel="stylesheet">
   </head>
   <body>
    <center>
      <div class = "image">
        <div id = "navbar">
        <img class ="logo-img" src = "logo.png">
        <a id = "linkref" href = "homepage1.php">Home</a>
        <a id = "linkref" href = "CarHome1.php">Buy</a>
        <a id = "linkref" href = "CarHome1.php">Rent</a>
        <a id = "linkref" href = "CarHome1.php">Sell</a>
        <a id = "linkref" href = "Aboutus.php">About Us</a>
      </div>
    </center>
     <div class="transbox">
       <form method = "POST" action = "Signup.php">
          Enter Your Name: <input type = "text" name = "name"></input>
          <br/><br/>
          Enter Your Email: <input type = "email" name = "email"></input>
          <br/><br/>
          Enter Your Username: <input type = "text" name = "user"></input>
          <br/><br/>
          Enter Password: <input type = "password" name = "pass"></input>
          <br/><br/>
          Confirm Password: <input type = "password" name = "cpass"></input>
          <br/><br/>
          <input type = "submit" name = "submit" value = "Sign-up"></input>
      </form>
      <?php
        session_start();
        if($_POST["pass"] == $_POST["cpass"])
        {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "users";
           
            $fullname = $_POST['name']; 
            $user = $_POST['user']; 
            $email = $_POST['email']; 
            $pwd = $_POST['pass'];

            $c = mysqli_connect($servername,$username,$password,$dbname);

            $query = "SELECT userName FROM websiteusers WHERE userName='$user'";
            $dupe = mysqli_query($c,$query);
            if (mysqli_num_rows($dupe) != 0)
            {
                echo "Username already exists";
            }
            else
            {
            $q = "INSERT INTO websiteusers (fullname,userName,email,pass) VALUES ('$fullname','$user','$email','$pwd')";            
            mysqli_query($c,$q);
            printf("Successfully signed up, check %s for a confirmation email",$email);
            header('Location: homepage1.php');
           }
        }

        else{
            echo("Re-Enter the password");
        }
      ?>
      </div>
    </body>
</html>
      