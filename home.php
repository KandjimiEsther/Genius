<!DOCTYPE html>
<html>
  <head>
    <title>FIMAN Trading cc</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
    <style>

      html {

        box-sizing: border-box;

      }
      .mainheader {
        list-style-type: none;
        margin: 0;
        background:#808080;
		color:Orange;
        overflow: hidden;
        border-bottom:4px solid red;
        width:100%;

        padding: 25px 0;
      }

      li {

        float: left;
        border-right:0 solid;


      }

      li:last-child {
        border-right: none;
      }

      .mainheader li a {
        display: block;
        color: orange;
        text-align: center;
        padding: 14px 16px;
        
        text-decoration: none;
        border-radius:5px;

      }

      li a:hover:not(.active) {
        background-color: #3d3dff;
      }
      .topsignin {
        border:2px solid white;
        border-radius: 25px;
        height: 45px;
        width: 100px;
        color: white;
        background-color: blue;
        cursor: pointer;
      }
      .topsignin:hover{
        border: 2px solid blue;
        border-radius: 25px;
        height: 45px;
        width: 100px;
        color: blue;
        background-color: white;

        cursor: pointer;
      }
      body {
        font-family: "Open Sans", sans-serif;
        
        margin:0px; padding:0px;
		
		background-color: #e9ece5;
        
      }
      h1{
        color:white;
        text-align:center;
        font-size: 300%;
      }
      h2{
        color:white;
        text-align:center;
        font-size: 150%;
        padding-bottom: 30px;
      }
      .introdiv{
        margin: auto;
        width: 85%;
      }
      .topwrapper{
        width: 100%;

      }
      .signinbtn{
        border: 2px solid blue;
        border-radius: 25px;
        height: 49px;
        width: 100px;
        color: blue;
        background-color: white;
        margin-right: 15px;
        cursor: pointer;

      }
      .signinbtn:hover{
        border: 2px solid white;
        border-radius: 25px;
        height: 49px;
        width: 100px;
        color: white;
        background-color: blue;
        cursor: pointer;
      }


      .firstscreen1{
        background-repeat: no-repeat;
        background-size: 100% 100%;
        width:100%;
        min-height:670px;
		background-image: url("solar-energy-2157212.jpg");
      }
      .footer-distributed {
        background-color: #292c2f;
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
        box-sizing: border-box;
        width: 100%;
        text-align: left;
        font: normal 16px sans-serif;
        padding: 45px 50px;
        margin-top: 80px;
      }
      .footer-distributed .footer-left p {
        color: #8f9296;
        font-size: 14px;
        margin: 0;
      }
      .footer-distributed p.footer-links {
        font-size: 18px;
        font-weight: bold;
        color: #ffffff;
        margin: 0 0 10px;
        padding: 0;
      }
      .footer-distributed p.footer-links a {
        display: inline-block;
        line-height: 1.8;
        text-decoration: none;
        color: inherit;
      }
      .footer-distributed .footer-right {
        float: right;
        margin-top: 6px;
        max-width: 180px;
      }
      .footer-distributed .footer-right a {
        display: inline-block;
        width: 35px;
        height: 35px;
        background-color: #33383b;
        border-radius: 20px;
        font-size: 20px;
        color: #ffffff;
        text-align: center;
        line-height: 35px;
        margin-left: 3px;
      }
      h2{
        font-weight: 100;
      }
      .featuresfitdivtitle{
        border:4px solid orange;
        background-color: orange;
        border-top-right-radius: 4em;
        opacity: 0.5;
        width:1000px;
      }

      .featuresfitdiv{
        border:4px solid orange;
        border-bottom-left-radius: 4em;

        background-color: Transparent;
        padding: 20px;
        overflow: auto;
        margin:90px;
        width:1000px;
      }
	  .featuresfitdiv1{
        border:2px solid orange;
        border-bottom-left-radius: 4em;
        background-color:  silver;
        
        padding: 20px;
        overflow: auto;
        margin:90px;
        width:1000px;
		color: white;
		font-size:30px;
		text-align: center;
      }
      .animate {
        -webkit-animation: animatezoom 0.6s;
        animation: animatezoom 0.6s
      }

      @-webkit-keyframes animatezoom {
        from {-webkit-transform: scale(0)} 
        to {-webkit-transform: scale(1)}
      }

      @keyframes animatezoom {
        from {transform: scale(0)} 
        to {transform: scale(1)}
      }
      .modal2 {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        padding-top: 60px;
      }
      .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        padding-top: 60px;
      }
      .modal3 {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        padding-top: 60px;
      }
      .modal-content2 {

      }
      .modal-content1 {

      }
      .bookingstb, select {
        width: 280px;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border-bottom: 1px solid #3498DB;
        border-left: 1px solid #f2f2f2;
        border-right: 1px solid #f2f2f2;
        border-top: 1px solid #f2f2f2;
        box-sizing: border-box;
        color: blue;
        font-family: 'Bree Serif', serif;
        background-color: #f2f2f2;
        text-align:center;
      }
      .bookingsmail{
        width: 280px;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border-bottom: 1px solid #3498DB;
        border-left: 1px solid #f2f2f2;
        border-right: 1px solid #f2f2f2;
        border-top: 1px solid #f2f2f2;
        box-sizing: border-box;
        color: blue;
        font-family: 'Bree Serif', serif;
        background-color: #f2f2f2;
        text-align:center;
      }

      .bookingsbtn{
        width: 280px;
        background-color: blue;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-family: 'Bree Serif', serif;
      }
      textarea{
        width: 240px;
        color: #3498DB;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        font-family: 'Bree Serif', serif;
        border: 1px solid #3498DB;
        text-align: center;
      }
      .bookingsbtn:hover {
        border: 1px solid blue;
      }
      .bookingstb:hover {
        border: 1px solid blue;
        border-radius: 4px;
        background-color: white;
      }
      .bookingsmail:hover{
		  
		border: 1px solid blue;
        border-radius: 4px;
        background-color: white; 
	  }
      modal-content a{
        text-decoration: none;
        color:#3498DB;
      }
      .contdiv{
        border-radius: 5px;
        background-color: #f2f2f2;
        margin: 0px auto 10px auto;
        border: 3px solid blue;
        padding-right: 100px;
        padding-left: 100px;
        display: inline-block;
        font-family: 'Bree Serif', serif;
      }
	  .featuresfitdiv1 div{
		  border: 1px solid orange;
		  
		  margin-right: 120px;
          margin-left: 120px;
		  background-color: white;
		  color:  #3498DB;
	  }
    </style>
  </head>

  <body>

    <div class="firstscreen1" >

      <center>
        <div class="topwrapper">

          <ul class="mainheader">

            <li><a href="home.php">HOME</a></li>
            <li><a href="aboutus.php">ABOUT US</a></li>
            <li><a href="services.php">SERVICES</a></li>
			<li><a href="vacancies.php">VACANCIES</a></li>
            <input class="topsignin" href="#home" style="float:right" type="submit"  onclick="document.getElementById('id03').style.display='block'" value="Sign In">
            <li style="float:right" onclick="document.getElementById('id01').style.display='block'"><a href="#about">CONTACT US</a></li>
            <li style="float:right" onclick="document.getElementById('id02').style.display='block'"><a href="#">BOOKINGS</a></li>
          </ul>
        </div>
        <div class="introdiv">
          <center>
            <h1 style="border-bottom: 5px solid orange; width: 40%;">FI<span style="color:orange;">MAN</span> Trading cc</h1>
          </center>

        </div>
        <center>
          <table>
            <tr>
              <th class="featuresfitdivtitle">
                <h3 style="font-size: 200%;">Services we provide:</h3>
              </th>
            </tr>
            <tr>
              <td class="featuresfitdiv">
                <h2>| Printing | Sign boards | Billboards |<br>| Corporate clothing | Embroidery | Brading | Promotional Items |<br>| Signage | Publications | Software & Web Development |<br>| Indoor & Outdoor | General Trading |<br>| Civils |</h2>


              </td>
            </tr>
          </table>

          <div id="id02" class="modal2">
            <div class="contdiv">
              <form method="post" action="" class="modal-content animate">

                <br><br><br>
                <i class="material-icons" style="font-size:100px;color:blue;font-weight: normal;">&#xe616;</i>
                <br><br>

                <input class="bookingstb" type="text" name="uname1" placeholder="Name">
                <br>

                <input  class="bookingsmail" type="text" name="mail1" placeholder="E-mail Address">
                <br>
                <textarea rows="4" cols="50" name="message1" placeholder="Make your bookings here..."></textarea>
                <br>
                <input class="bookingsbtn" type="submit" name="sub1" value="Submit"><br>

<?php 	
if(isset($_POST['sub1'])){ 
$servername = "localhost";
$username = "root";
$password = "201402279";
$dbname = "bookings";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO bookingstb (name, email, message)
VALUES ('".$_POST['uname1']."', '".$_POST['mail1']."', '".$_POST['message1']."')";

if ($conn->query($sql) === TRUE) {
    echo "Booking successfully made.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
	}
?>
                <br><br>
              </form>
            </div>
          </div>

          <div id="id01" class="modal">
            <div class="contdiv">
              <form method="post" action="" class="modal-content animate">

                <br><br><br>
                <i class="material-icons" style="font-size:100px;color:blue;font-weight: normal;">&#xe554;</i>
                <br><br>

                <input class="bookingstb" type="text" name="uname2" placeholder="Name">
                <br>

                <input  class="bookingsmail" type="text" name="mail2" placeholder="E-mail Address">
                <br>
                <textarea rows="4" cols="50" name="message2"  placeholder="Leave a message..."></textarea>
                <br>
                <input class="bookingsbtn" type="submit" name="sub2" value="Submit">	<br>
<?php 	
if(isset($_POST['sub2'])){ 
$servername = "localhost";
$username = "root";
$password = "201402279";
$dbname = "messages";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO messagetb (name, email, mymessage)
VALUES ('".$_POST['uname2']."', '".$_POST['mail2']."', '".$_POST['message2']."')";

if ($conn->query($sql) === TRUE) {
    echo "Message successfully sent.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
	}
?>
                <br><br>
              </form>
            </div>
          </div>

          <div id="id03" class="modal3">
            <div class="contdiv">
              <form method="POST" class="modal-content animate">

                <br><br><br>
                <i class="material-icons" style="font-size:100px;color:blue;font-weight: normal;">&#xe899;</i>
                <br><br>

                <input  class="bookingstb" type="text" name="uname" placeholder="Username">
                <br>

                <input class="bookingsmail" type="password" name="pass" placeholder="Password">
                <br>
                <input class="bookingsbtn" type="submit" name="sub" value="Sign In">


                <br><br>
                
              
<?php 	
session_start();
	if(isset($_POST['sub'])){ 
		$db = new mysqli("localhost","root","201402279","kk");	
        $username=$_POST['uname'];
        $password=$_POST['pass'];		
		$query = "SELECT * FROM kktable WHERE username='".$_POST['uname']."' AND password='".$_POST['pass']."'";		
		$sql = $db->query($query);		
		$n = $sql->num_rows;
		if($n > 0){
			$_SESSION['login_user']=$username; 
         echo "<script type='text/javascript'>window.top.location='admin.php';</script>";
		} else {
        echo "<script type='text/javascript'>document.getElementById('id03').style.display='block';</script>";
		echo ("Username or password is incorrect...");
		}
	}
?>
</form>
            </div>
          </div>

        </center>
      </center>

    </div>
    <script>
      // Get the modal
      var modal = document.getElementById('id01');

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        if ((event.target == modal || event.target == modal2) || event.target == modal3) {
          modal.style.display = "none";
          modal2.style.display = "none";
          modal3.style.display = "none";
        }
      }

      var modal2 = document.getElementById('id02');

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        if ((event.target == modal || event.target == modal2) || event.target == modal3) {
          modal2.style.display = "none";
          modal.style.display = "none";
          modal3.style.display = "none";
        }
      }
      var modal3 = document.getElementById('id03');

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        if ((event.target == modal || event.target == modal2) || event.target == modal3){
          modal.style.display = "none";
          modal2.style.display = "none";
          modal3.style.display = "none";
        }
      }
    </script>
    <center>
      <table>
        <tr>
          <th class="featuresfitdivtitle">
            <h3 style="font-size: 200%;">Advertisements:</h3>
          </th>
        </tr>
        <tr>
          <td class="featuresfitdiv1">
            <?php
$servername = "localhost";
$username = "root";
$password = "201402279";
$dbname = "adverts";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

$sql = " SELECT title, description FROM ad";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
		 echo "<div>";
         echo "<br> Title: ". $row["title"]. " <br> Description: ". $row["description"]. "<br><br><br>";
		 echo "</div><br>";
		
     }
} else {
     echo "0 adverts". "<br>";
}

$conn->close();
?> 
          </td>
        </tr>
      </table>
    </center>
    <footer class="footer-distributed">

      <div class="footer-right">

        <a href="http://facebook.com/"><i class="fa fa-facebook" style="font-size:24px"></i></a>
        <a href="http://twitter.com/"><i class="fa fa-twitter" style="font-size:24px"></i></a>
        <a href="https://www.linkedin.com"><i class="fa fa-linkedin" style="font-size:24px"></i></a>
        <a href="http://instagram.com/"><i class="fa fa-instagram" style="font-size:24px"></i></a>

      </div>

      <div class="footer-left">

        <p class="footer-links">
          <a href="home.php">Home</a>
					.
					<a href="aboutus.html">About Us</a>
					·
					<a href="services.html">Services</a>
					.
					<a href="vacancies.php">Vacancies</a>
					.
					<a href="#" onclick="document.getElementById('id02').style.display='block'">Bookings</a>
					·
					<a href="#" onclick="document.getElementById('id01').style.display='block'">Contact Us</a>
					·
					<a href="#" onclick="document.getElementById('id03').style.display='block'" >Sign In</a>
					<br><br>
					<a href="tel:+264811234567" style="color: #8f9296;"><i class="fa fa-phone"></i> +264813897624</a>
					<br>
					<a href="" style="color: #8f9296;"><i class="fa fa-envelope"></i> P O Box 26210, Windhoek</a>
					<br>
					<a href="mailto:someone@example.com" style="color: #8f9296;"><i class="fa fa-envelope-o"></i> fimantrading@gmail.com</a>
					
        </p>

        <p>FIMAN &copy; 2017</p>
      </div>

    </footer>
  </body>

</html>
