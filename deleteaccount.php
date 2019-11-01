<?php
 ob_start();
 session_start();
  $a=$_SESSION['user'];
  
  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "house";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
		$sql= "DELETE  FROM user WHERE userId = '$a'";
		
if (mysqli_query($conn, $sql)) {
	echo ("<script>document.location.href='deletehouse.php';</script>");
} else {
	echo ("<script>alert('Your Account can not deleted.. Try Again!!');document.location.href='updateAccount.php';</script>");
}

				

?>
