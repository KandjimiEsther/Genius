<?php
session_start();
   if(!isset($_SESSION['login_user'])){
      header("location:home.php");
   }
?>
<!DOCTYPE html>
<html>
<head>
<title>FIMAN | Admin</title>
<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
<style>
body{
background-color: #F5FFFA;
}
fieldset{
border:2px solid blue;
border-radius: 5px;
font-family: 'Bree Serif', serif;
color: green;
}
legend{
border:2px solid blue;
border-radius: 5px;
font-family: 'Bree Serif', serif;
color: blue;
}
.admin{
border:2px solid blue;
border-radius: 5px;
background-color: blue;
font-family: 'Bree Serif', serif;
color: white;
cursor: pointer;
}
.admin1{
border:2px solid blue;
border-radius: 5px;
background-color: blue;
font-family: 'Bree Serif', serif;
color: white;
cursor: pointer;
}
.admin2{
border:2px solid blue;
border-radius: 5px;
background-color: blue;
font-family: 'Bree Serif', serif;
color: white;
cursor: pointer;
}
.admin3{
border:2px solid blue;
border-radius: 5px;
background-color: blue;
font-family: 'Bree Serif', serif;
color: white;
cursor: pointer;
}
input[type=text]{
    width: 280px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border-bottom: 1px solid #3498DB;
	border-left: 1px solid #f2f2f2;
	border-right: 1px solid #f2f2f2;
	border-top: 1px solid #3498DB;
    box-sizing: border-box;
    color: blue;
    font-family: 'Bree Serif', serif;
	background-color: #f2f2f2;
	text-align:center;
}
</style>
</head>
<body>
<fieldset>
<legend><h1>Administration</h1></legend>
<br>
<form method="post" action="">
  <fieldset>
    <legend>Messages</legend>
<?php
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

$sql = " SELECT name, email, mymessage FROM messagetb";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> Name: ". $row["name"]. " <br> Email: ". $row["email"]. " <br> Message: " . $row["mymessage"] . "<br><br><br>";
     }
} else {
     echo "0 messages". "<br>";
	 echo "<script type='text/javascript'>document.getElementById('clearm').style.display='none';</script>";
}

$conn->close();
?> 
<br>
<?php
if(isset($_POST['subcm'])){ 
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

$sql = "DELETE FROM messagetb";

if ($conn->query($sql) === TRUE) {
    echo "Messages cleared.";
	echo "<meta http-equiv='refresh' content='0'>";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
	}
?>
<br>
    <input class="admin1" type="submit" name="subcm" id="clearm" value="Clear Messages">
  </fieldset>
</form>
<br>
<form method="post" action="">
  <fieldset>
    <legend>Bookings</legend>
	 
<?php
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

$sql = " SELECT name, email, message FROM bookingstb";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> Name: ". $row["name"]. " <br> Email: ". $row["email"]. " <br> Booking: " . $row["message"] . "<br><br><br>";
     }
} else {
     echo "0 bookings". "<br>";
	 echo "<script type='text/javascript'>document.getElementById('clearb').style.display='none';</script>";
}

$conn->close();
?> 
<br>
	<?php
if(isset($_POST['subcb'])){ 
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

$sql = "DELETE FROM bookingstb";

if ($conn->query($sql) === TRUE) {
    echo "Bookings cleared.";
	echo "<meta http-equiv='refresh' content='0'>";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
	}
?>
<br>
    <input class="admin2" type="submit" name="subcb" id="clearb" value="Clear Bookings">
  </fieldset>
</form>
<br>
<form method="post" action="">
  <fieldset>
    <legend>Update advertisements</legend>
    Title: <input type="text" size="30" name="title"><br>
    Descciption: <input type="text" size="30" name="des"><br>
    <input class="admin" type="submit" name="savad" value="Save ad"><br>
	<?php
if(isset($_POST['savad'])){ 
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

$sql = "INSERT INTO ad (title, description)
VALUES ('".$_POST['title']."', '".$_POST['des']."')";

if ($conn->query($sql) === TRUE) {
    echo "Adverisement added.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
	}
?>

  </fieldset>
  <br><br>


</form>
<br>
<form method="post" action="">
  <fieldset>
    <legend>Update vacancies</legend>
    Title: <input type="text" size="30" name="title"><br>
    Descciption: <input type="text" size="30" name="des"><br>
    <input class="admin" type="submit" name="savvac" value="Save vacancy"><br>
	<?php
if(isset($_POST['savvac'])){ 
$servername = "localhost";
$username = "root";
$password = "201402279";
$dbname = "vacancy";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO vac (title, description)
VALUES ('".$_POST['title']."', '".$_POST['des']."')";

if ($conn->query($sql) === TRUE) {
    echo "Vacancy added.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
	}
?>

  </fieldset>
  <br><br>


</form>
<br>
<form method="post" action="">
  <fieldset>
    <legend>Existing advertisements</legend>
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

$sql = " SELECT id, title, description FROM ad";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
		 
         echo "<br> Title: ". $row["title"]. " <br> Description: ". $row["description"]. "<br>";
		 echo "<td><a href=\"delete.php?id=".$row['id']."\">Delete</a></td>";
		 echo "<br><br>";
     }
} else {
     echo "0 bookings". "<br>";
}

$conn->close();
?> 

  </fieldset>
  <br><br>
  <?php
if(isset($_POST['logout'])){ 
session_start();
session_destroy();
header("location:home.php");
	}
?>

</form>
<br>
<form method="post" action="">
  <fieldset>
    <legend>Existing vacancies</legend>
            <?php
$servername = "localhost";
$username = "root";
$password = "201402279";
$dbname = "vacancy";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

$sql = " SELECT id, title, description FROM vac";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
		 
         echo "<br> Title: ". $row["title"]. " <br> Description: ". $row["description"]. "<br>";
		 echo "<td><a href=\"deletevac.php?id=".$row['id']."\">Delete</a></td>";
		 echo "<br><br>";
     }
} else {
     echo "0 vacancies". "<br>";
}

$conn->close();
?> 

  </fieldset>
  <br><br>
  <?php
if(isset($_POST['logout'])){ 
session_start();
session_destroy();
header("location:home.php");
	}
?>
  <input class="admin3" type="submit" name="logout" value="Sign out" style="float: right;padding:20px;">
</form>
<br><br>
</fieldset>
</body>

</html>