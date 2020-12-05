<?php

session_start();

include 'connection.php';

$type = $_SESSION['type'];
$eventCode = $_SESSION['eventCode'];
$oldEventType = $_SESSION['oldEventType'];

extract($_POST);

if($type == "Admin"){

  if ($eventType != $oldEventType) {
    if($eventType == 'Flagship'){
      $sql = "SELECT * FROM events WHERE EventType='Flagship'";
      $r = mysqli_query($conn, $sql);
      $count = mysqli_num_rows($r);
      // echo $count;
      echo "Flagship";
      $count = $count + 1;
      $newEventCode = 'FE'.$count;
    } elseif ($eventType == 'Other') {
      $sql = "SELECT * FROM events WHERE EventType='Other'";
      $r = mysqli_query($conn, $sql);
      $count = mysqli_num_rows($r);
      // echo $count;
      echo "Other";
      $count = $count + 1;
      $newEventCode = 'OT'.$count;
    } else {
      echo "<script> alert('Select Event Type..!!') </script>";
      echo "Select Event Type..!!";
      exit();
    }
  } else {
    $newEventCode = $eventCode;
  }

 $query = "UPDATE events SET EventTitle='$eventTitle',EventCode='$newEventCode',EventType='$eventType',EventAbstract='$eventAb',EventDescription='$eventDes',EventStartDate='$eventStartDate',
 EventEndDate='$eventEndDate',EventReport='$eventReport' WHERE EventCode='$eventCode'";

 // echo "<br>";
 // echo $query;

 // echo "<br>";

	if(mysqli_query($conn,$query))
	{
    // echo "Event Details Updated..!!";
    header('Location: events.php');
    exit();
	}
  else
	{
    echo "<br>";
		echo "Event Not Updated..!!";
	}
}
else {
  echo "<script> alert('Please Login..!!!') </script>";
  header('Location: loginPage.php');
  exit();
}
?>
