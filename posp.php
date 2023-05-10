<?php

// Create connection
function createdatabase(){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $conn = mysqli_connect($servername, $username, $password);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  // Create database
  $sql = "CREATE DATABASE reg";
  if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
  } else {
    echo "Error creating database: " . mysqli_error($conn);
  }

  mysqli_close($conn);
}

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
  $sql = "CREATE TABLE players (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(30) NOT NULL,
  password VARCHAR(30) NOT NULL,
  email VARCHAR(50) NOT NULL,glink VARCHAR(250) NOT NULL,level INT(6) DEFAULT 0,points INT(6) DEFAULT 0,image VARCHAR(250) DEFAULT 'src/player/img/ch1.jpg',
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";

  if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . mysqli_error($conn);
  }

  mysqli_close($conn);
}


function dbinsert(){
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
  $na=$_POST["name"];
  $pa=$_POST["password"];
  $em=$_POST["email"];
  $li=$_POST["link"];

  $sql = "INSERT INTO players (name, password, email, glink)
  VALUES ('$na', '$pa', '$em', '$li')";

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    cat();
    header("Location: index.html");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    header("Location: sorry.php");
  }

  mysqli_close($conn);
}


//function to insert the uid in lvinfo,dailytask
function cat(){
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
  $na=$_POST["name"];
  $sql = "SELECT id FROM players WHERE name='$na'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
          $nid= $row["id"];  
      }
      dblv($nid);
      dbdtask($nid);
  } else {
      echo "0 results";
  }

  mysqli_close($conn);



}



function dblv($tv){
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

  $sql = "INSERT INTO lvinfo (uid)
  VALUES ($tv)";

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
}

function dbdtask($tv){
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

  $sql = "INSERT INTO dailyt (uid)
  VALUES ($tv)";

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
}



//createdatabase();
//createtable();
dbinsert();
//dblv();
//dbdtask();
?>