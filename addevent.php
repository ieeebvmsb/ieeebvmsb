<?php

session_start();

include 'connection.php';

$type = $_SESSION['type'];

extract($_POST);

//$text = $mail;
//$nm=$name;

if ($eventType == 'Flagship') {
  $sql = "SELECT * FROM events WHERE EventType='Flagship'";
  $r = mysqli_query($conn, $sql);
  $count = mysqli_num_rows($r);
  // echo $count;
  $count = $count + 1;
  $eventCode = 'FE'.$count;
} else if ($eventType == 'Other') {
  $sql = "SELECT * FROM events WHERE EventType='Other'";
  $r = mysqli_query($conn, $sql);
  $count = mysqli_num_rows($r);
  // echo $count;
  $count = $count + 1;
  $eventCode = 'OT'.$count;
} else {
  echo "<script> alert('Select Event Type..!!') </script>";
  echo "Select Event Type..!!";
  exit();
}

$file = $_FILES['eventTitleImage']['name'];
$temp_file = $_FILES['eventTitleImage']['tmp_name'];
// echo $file;
// echo "<br>";
// echo $temp_file;
// echo "<br>";

// echo $eventTitle, "<br>", $eventDes, "<br>", $eventStartDate, "<br>", $eventEndDate, "<br>", $eventReport;
$titleFolder = "events/eventTitleImage/".$eventCode."_".$file;
$eventThumb = "events/eventTitleImage/".$eventCode."_".$_FILES['eventThumbnail']['name'];
$ep1 = "events/eventPhotos/".$eventCode."_".$_FILES['eventPhoto1']['name'];
$ep2 = "events/eventPhotos/".$eventCode."_".$_FILES['eventPhoto2']['name'];
$ep3 = "events/eventPhotos/".$eventCode."_".$_FILES['eventPhoto3']['name'];
$ep4 = "events/eventPhotos/".$eventCode."_".$_FILES['eventPhoto4']['name'];
// echo "<br>";
// echo $titleFolder;

if($type == "Admin"){

 $query = "INSERT INTO events(EventType,EventCode,EventTitle,EventAbstract,EventThumbnail,EventTitleImage,EventDescription,EventStartDate,EventEndDate,EventReport,EventPhoto0,EventPhoto1,EventPhoto2,EventPhoto3)
 VALUES('$eventType','$eventCode','$eventTitle','$eventAb','$eventThumb','$titleFolder','$eventDes','$eventStartDate','$eventEndDate','$eventReport','$ep1','$ep2','$ep3','$ep4')";

 // echo "<br>";
 // echo $query;

 // echo "<br>";

	if(mysqli_query($conn,$query))
	{

    // Title Image Upload
    if (move_uploaded_file($temp_file, $titleFolder))  {
          $msg = "Title Image uploaded successfully";
          // echo "<br>";
          echo $msg;
    }
    else{
          $msg = "Failed to upload image";
          echo "<br>";
          echo $msg;
          exit();
    }

    // Event Thumbnail Upload
    if (move_uploaded_file($_FILES['eventThumbnail']['tmp_name'], $eventThumb))  {
          $msg = "Event Thumbnail uploaded successfully";
          echo "<br>";
          echo $msg;
    }
    else{
          $msg = "Failed to upload image";
          echo "<br>";
          echo $msg;
          exit();
    }

    // Event Photos Upload
    if (move_uploaded_file($_FILES['eventPhoto1']['tmp_name'], $ep1))  {
          $msg = "Event Photo 1 uploaded successfully";
          echo "<br>";
          echo $msg;
    }
    else{
          $msg = "Failed to upload image";
          echo "<br>";
          echo $msg;
          exit();
    }
    if (move_uploaded_file($_FILES['eventPhoto2']['tmp_name'], $ep2))  {
          $msg = "Event Photo 2 uploaded successfully";
          echo "<br>";
          echo $msg;
    }
    else{
          $msg = "Failed to upload image";
          echo "<br>";
          echo $msg;
          exit();
    }
    if (move_uploaded_file($_FILES['eventPhoto3']['tmp_name'], $ep3))  {
          $msg = "Event Photo 3 uploaded successfully";
          echo "<br>";
          echo $msg;
    }
    else{
          $msg = "Failed to upload image";
          echo "<br>";
          echo $msg;
          exit();
    }
    if (move_uploaded_file($_FILES['eventPhoto4']['tmp_name'], $ep4))  {
          $msg = "Event Photo 4 uploaded successfully";
          echo "<br>";
          echo $msg;
    }
    else{
          $msg = "Failed to upload image";
          echo "<br>";
          echo $msg;
          exit();
    }

    header('Location: events.php');
    exit();
	}
  else
	{
    echo "<br>";
		echo "Event Not Added..!!";
	}
}
else {
  echo "<script> alert('Please Login..!!!') </script>";
  header('Location: loginPage.php');
  exit();
}
?>
