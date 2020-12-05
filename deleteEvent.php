<?php

session_start();

include 'connection.php';

$type = $_SESSION['type'];
$eventCode = $_SESSION['eventCode'];

extract($_POST);

if($type == "Admin"){

 $query = "DELETE FROM events WHERE EventCode='$eventCode'";

 // echo "<br>";
 echo $query;

 // echo "<br>";

	if(mysqli_query($conn,$query))
	{
    echo "Event Deleted..!!";
    header('Location: events.php');
    exit();
	}
  else
	{
    echo "<br>";
		echo "Event Not Deleted..!!";
	}
}
else {
  echo "<script> alert('Please Login..!!!') </script>";
  header('Location: loginPage.php');
  exit();
}
?>
