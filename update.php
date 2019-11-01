<?php
  session_start();
  $x=$_SESSION['user'];
  
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
$sql = "UPDATE user
			SET userId ='$n',
			email = '$m', 
			password = '$o' 
            WHERE userId = '$x'" ;

if (mysqli_query($conn, $sql)) {
	echo ("<script>alert('Your Update Success');document.location.href='updateAccount.php';</script>");
	$_SESSION['user']= $n;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
}

else{
	//header('Location: register.php?msg=Password Incorrect!!');
	echo ("<script>alert('Your Update Failed');document.location.href='updateAccount.php';</script>");
}
?>