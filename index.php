<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Dtravels</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <script>
        function Warn() {
    alert ("Contact: +91 9100236856  ,  Email: TelanganaTravels@gmail.com");
   
   
 }
        </script>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">DTravels</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="login.php">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="Table.html">SERVICE</a></li>
                    <li><a href="#" onclick="Warn()">CONTACT</a></li>
                </ul>
            </div>

            

        </div> 
        <div class="content">
            <h1>Welcome,<br> </h1>
            <p class="par">Want to enjoy your trips in Telangana with all the amenities and safety? Click here today.</p>

                <button class="cn"><a href="Booking.html">Book Now</a></button>

               
                    </div>
                </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>




</body>
</html>