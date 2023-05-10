<?php


$nae=$_POST["na"];
if ($nae=="create") {
  createtable();
}
if ($nae=="insert") {
  da();
  header("Location: gmaster.php");
}
if ($nae=="delete") {
  deleteta();
  header("Location: gmaster.php");
}

function deleteta(){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "reg";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());

  }

  $nam=$_POST['id'];

  $sql = "DELETE FROM players WHERE id=$nam";
  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);

}

function da(){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "reg";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());

  }

  $nam=$_POST['id'];
  $nl=$_POST['level'];
  $npo=$_POST['point'];

  $sql = "UPDATE players SET level=$nl,points=$npo WHERE id=$nam";
  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);

}
?>