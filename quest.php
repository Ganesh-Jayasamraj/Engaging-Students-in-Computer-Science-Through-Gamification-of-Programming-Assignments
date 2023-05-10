<?php


$na=$_POST["na"];
if ($na=="insert") {
  dbinsert();
  header("Location: question.html");
}
if ($na=="delete") {
  deletedata();
  header("Location: question.html");
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
  $ty=$_POST["desc"];
  $pa=$_POST["answer"];
  $target_dir = "src/levels/img/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
  // Check if image file is a actual image or fake image
  if(isset($_POST["na"])) {
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false) {
          echo "";
          $uploadOk = 1;
      } else {
          echo "<center>File is not an image.</center>";
          $uploadOk = 0;
      }
  }
  // Check if file already exists
  if (file_exists($target_file)) {
      echo "<center>Sorry, file already exists.</center>";
      $uploadOk = 0;
  }
  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 500000) {
      echo "<center>Sorry, your file is too large.</center>";
      $uploadOk = 0;
  }
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
      echo "<center>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</center>";
      $uploadOk = 0;
  }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
      echo "<center>Sorry, your file was not uploaded.</center>";
  // if everything is ok, try to upload file
  } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
          echo "<center><i><h4>The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.</h4></i></center>";
      } else {
          echo "<center>Sorry, there was an error uploading your file.</font></center>";
      }
  }
  $sql = "INSERT INTO $na (name, answer, image)
  VALUES ('$ty', '$pa', '$target_file')";
  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
}

function deletedata(){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "reg";
  $na=$_POST["name"];
  $ty=$_POST["desc"];
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // sql to delete a record
  $sql = "DELETE FROM $na WHERE name='$ty'";

  if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }

  mysqli_close($conn);
}



?>