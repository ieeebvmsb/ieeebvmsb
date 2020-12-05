<?php
ini_set('display_errors','off');
session_start();

include('connection.php');

	$name = $_POST['name'];
	$pass = $_POST['pass'];

  if($name != "" && $pass != "")
  {

  	$sql = "select * from admins where AdminID = '$name' and Password = '$pass'";

  	$result = mysqli_query($conn,$sql);

  	//echo $result;

  	$count = mysqli_num_rows($result);

  	//echo $count;
  	//echo "<br>";
  	//echo "fsdfsd".mysqli_affected_rows($result) . "hh";
  	if ($count == 1){
  	//	echo "Logged In";

  		$_SESSION['type'] = "Admin";
      $_SESSION['name'] = $name;
  		// echo $name;
  		// echo $pass;
      mysqli_free_result($result);
      header("Location: adminPanel.php");
  		exit();
  	} else {
  		//echo"not login";
  		//echo "$uname";
  		//echo "$pass";
  		echo "<script> alert('Enter Wrong Password!!!') </script>";
  		//header('Location: LoginHTML.php');
  		exit();
  	}
  } else {
    echo "<script> alert('Fill Up All Fields!!!') </script>";
  }

?>
