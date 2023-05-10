<?php


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

$sql = "SELECT name, password FROM adminplayer";
$result = mysqli_query($conn, $sql);
$na=$_POST["name"];
$pa=$_POST["password"];
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $naa= $row["name"];
        $paa=$row["password"];
        if($na==$naa && $pa==$paa){
            echo "login sucessfuly";
            header("Location: adminpanel.html");
        }
    }
} else {
    echo "<h1>0 results</h1>";
}

mysqli_close($conn);


function createtable(){
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

  // sql to create table
  $sql = "CREATE TABLE adminplayer (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(30) NOT NULL,
  password VARCHAR(30) NOT NULL,
  email VARCHAR(50) NOT NULL,
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";

  if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . mysqli_error($conn);
  }

  mysqli_close($conn);
}

//createtable();
?>