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
  $sql = "CREATE TABLE lvinfo (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  uid INT(6) NOT NULL,
  Level1 VARCHAR(30) DEFAULT 'u',
  Level2 VARCHAR(30) DEFAULT 'u',
  Level3 VARCHAR(30) DEFAULT 'u',
  Level4 VARCHAR(30) DEFAULT 'u',
  Level5 VARCHAR(30) DEFAULT 'u',
  Level6 VARCHAR(30) DEFAULT 'u'
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

  $sql = "INSERT INTO lvinfo (uid)
  VALUES (1)";

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
}

//createdatabase();

dbinsert();

//createtable();
?>