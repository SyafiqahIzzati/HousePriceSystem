<?php
session_start();

  $n=$_POST["userName"];					
  $m=$_POST["email"];					
  $o=$_POST["password"];
  $p=$_POST["rePassword"];					

if($o == $p){

// Create connection
$conn=mysqli_connect("localhost","root","","house");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//SQL Statement
$sql = "INSERT INTO user(userId,email, password) 
	VALUES ('$n','$m','$o')";

if (mysqli_query($conn, $sql)) {
	echo ("<script>alert('Registration Success');document.location.href='index.php';</script>");
	$_SESSION['user']= $n;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
}

else{
	//header('Location: register.php?msg=Password Incorrect!!');
	echo ("<script>alert('Registration Failed. Try Again..');document.location.href='register.php';</script>");
}
?>
